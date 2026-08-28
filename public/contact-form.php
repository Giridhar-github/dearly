<?php
require_once __DIR__ . '/../src/config/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ------------------------------------
// Security headers
// ------------------------------------
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

function fail(int $code, string $message, array $errors = []): void
{
    http_response_code($code);
    $payload = ['success' => false, 'message' => $message];
    if (!empty($errors)) {
        $payload['errors'] = $errors;
    }
    echo json_encode($payload);
    exit;
}

// ------------------------------------
// 1. Method & request shape checks
// ------------------------------------

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    fail(405, 'Method not allowed.');
}

$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
if (
    stripos($contentType, 'multipart/form-data') === false &&
    stripos($contentType, 'application/x-www-form-urlencoded') === false
) {
    fail(415, 'Unsupported content type.');
}

// Reject abnormally large payloads (protects against memory exhaustion)
$maxBytes = 20 * 1024; // 20 KB is generous for a contact form
if (isset($_SERVER['CONTENT_LENGTH']) && (int) $_SERVER['CONTENT_LENGTH'] > $maxBytes) {
    fail(413, 'Request too large.');
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ------------------------------------
// 2. CSRF verification
// ------------------------------------

$submittedToken = $_POST['csrf_token'] ?? '';
$sessionToken   = $_SESSION['csrf_token'] ?? '';

if ($sessionToken === '' || $submittedToken === '' || !hash_equals($sessionToken, $submittedToken)) {
    fail(403, 'Invalid or expired session. Please refresh the page and try again.');
}

// ------------------------------------
// 3. Honeypot check (silently reject bots, don't reveal why)
// ------------------------------------

if (!empty($_POST['website'])) {
    // Log for monitoring, but respond as if it succeeded so bots don't learn to skip the field
    error_log('Honeypot triggered from IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    echo json_encode(['success' => true, 'message' => 'Thanks! Your message has been sent.']);
    exit;
}

// ------------------------------------
// 4. Rate limiting — session + IP-based sliding window
// ------------------------------------

$now = time();

// Per-session cooldown
$lastSubmit = $_SESSION['last_contact_submit'] ?? 0;
if ($now - $lastSubmit < 30) {
    fail(429, 'Please wait a moment before sending another message.');
}

// Per-IP daily cap using a simple file-based counter (swap for Redis/DB in production)
$ip = filter_var($_SERVER['REMOTE_ADDR'] ?? '', FILTER_VALIDATE_IP) ?: 'unknown';
$rateLimitFile = sys_get_temp_dir() . '/contact_rl_' . md5($ip) . '.json';
$rateData = ['count' => 0, 'window_start' => $now];

if (file_exists($rateLimitFile)) {
    $decoded = json_decode(file_get_contents($rateLimitFile), true);
    if (is_array($decoded) && isset($decoded['count'], $decoded['window_start'])) {
        $rateData = $decoded;
    }
}

// Reset window every 24h
if ($now - $rateData['window_start'] > 86400) {
    $rateData = ['count' => 0, 'window_start' => $now];
}

if ($rateData['count'] >= 10) {
    fail(429, 'Too many submissions from this network today. Please try again tomorrow.');
}

// ------------------------------------
// 5. Raw input existence & type checks
// ------------------------------------

$fields = ['name', 'email', 'phone', 'subject', 'message'];
foreach ($fields as $field) {
    if (!isset($_POST[$field]) || !is_string($_POST[$field])) {
        fail(422, 'Invalid submission.', [$field => 'This field is required.']);
    }
}

// ------------------------------------
// 6. Reject null bytes & invalid UTF-8 globally (before any processing)
// ------------------------------------

foreach ($fields as $field) {
    $value = $_POST[$field];
    if (strpos($value, "\0") !== false) {
        fail(422, 'Invalid submission.');
    }
    if (!mb_check_encoding($value, 'UTF-8')) {
        fail(422, 'Invalid character encoding.');
    }
}

// ------------------------------------
// 7. Normalize whitespace, strip tags, trim
// ------------------------------------

$name    = trim(strip_tags($_POST['name']));
$email   = trim(strip_tags($_POST['email']));
$phone   = trim(strip_tags($_POST['phone']));
$subject = trim(strip_tags($_POST['subject']));
$message = trim(strip_tags($_POST['message']));

// Collapse repeated whitespace (helps catch whitespace-padding evasion attempts)
$name    = preg_replace('/\s+/', ' ', $name);
$subject = preg_replace('/\s+/', ' ', $subject);

// ------------------------------------
// 8. Strict per-field whitelist validation
// ------------------------------------

$errors = [];

// Name: letters (incl. accented), spaces, hyphens, apostrophes only
if ($name === '') {
    $errors['name'] = 'Please enter your name.';
} elseif (mb_strlen($name) > 100) {
    $errors['name'] = 'Name is too long.';
} elseif (!preg_match("/^[\p{L}\p{M} '\-\.]+$/u", $name)) {
    $errors['name'] = 'Name contains invalid characters.';
}

// Email: standard validation + length cap + reject consecutive dots / leading-trailing dots
if ($email === '') {
    $errors['email'] = 'Please enter your email.';
} elseif (mb_strlen($email) > 254) {
    $errors['email'] = 'Email is too long.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
} elseif (preg_match('/\.{2,}/', $email)) {
    $errors['email'] = 'Please enter a valid email address.';
} else {
    // Optional but recommended: verify the domain can actually receive mail
    $domain = substr(strrchr($email, '@'), 1);
    if ($domain === false || (!checkdnsrr($domain, 'MX') && !checkdnsrr($domain, 'A'))) {
        $errors['email'] = 'This email domain does not appear to be valid.';
    }
}

// Phone: digits, spaces, +, -, () only, sane length
if ($phone === '') {
    $errors['phone'] = 'Please enter your phone number.';
} elseif (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors['phone'] = 'Please enter a valid phone number.';
} elseif (substr_count($phone, '+') > 1) {
    $errors['phone'] = 'Please enter a valid phone number.';
}

// Subject: printable characters, reasonable length, no control chars
if ($subject === '') {
    $errors['subject'] = 'Please enter a subject.';
} elseif (mb_strlen($subject) > 150) {
    $errors['subject'] = 'Subject is too long.';
} elseif (preg_match('/[\x00-\x1F\x7F]/', $subject)) {
    $errors['subject'] = 'Subject contains invalid characters.';
}

// Message: length cap, no control chars except newlines/tabs
if ($message === '') {
    $errors['message'] = 'Please write a message.';
} elseif (mb_strlen($message) > 2000) {
    $errors['message'] = 'Message is too long (max 2000 characters).';
} elseif (preg_match('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', $message)) {
    $errors['message'] = 'Message contains invalid characters.';
}

if (!empty($_POST['hp_field'])) {
    error_log('Honeypot triggered from IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    echo json_encode(['success' => true, 'message' => 'Thanks! Your message has been sent.']);
    exit;
}
// ------------------------------------
// 9. Reject header-injection attempts explicitly (defense in depth on top of PHPMailer's own escaping)
// ------------------------------------

foreach (['name', 'email', 'phone', 'subject'] as $field) {
    if (preg_match('/\r|\n|%0a|%0d|content-type:|bcc:|cc:|to:/i', $$field)) {
        $errors[$field] = 'Invalid input detected.';
    }
}

// ------------------------------------
// 10. Basic injection-pattern / spam heuristics
// ------------------------------------

$combinedText = $name . ' ' . $subject . ' ' . $message;

$suspiciousPatterns = [
    '/<script/i',
    '/javascript:/i',
    '/on\w+\s*=/i',           // onclick=, onerror=, etc.
    '/union\s+select/i',
    '/base64_decode/i',
    '/(https?:\/\/[^\s]+){4,}/i', // 4+ URLs = likely spam
];

foreach ($suspiciousPatterns as $pattern) {
    if (preg_match($pattern, $combinedText)) {
        error_log('Suspicious contact submission blocked from IP: ' . $ip . ' | pattern: ' . $pattern);
        fail(422, 'Your message could not be processed. Please rephrase and try again.');
    }
}

if (!empty($errors)) {
    fail(422, 'Please check your details.', $errors);
}

// ------------------------------------
// 11. Send email via PHPMailer + SMTP
// ------------------------------------

if (!MAIL_IS_CONFIGURED) {
    error_log('Contact form submitted but SMTP is not configured yet.');
    fail(503, 'Our contact form is being set up right now — please reach out to us directly at ' . EMAIL . ' in the meantime.');
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int) SMTP_PORT;

    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    $mail->addAddress(CONTACT_RECEIVING_EMAIL);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission: ' . $subject;

    $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safePhone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
    $safeIp      = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');

    $mail->Body = "
        <div style='font-family: sans-serif; max-width: 600px;'>
            <h2 style='color: #76503D;'>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$safeName}</p>
            <p><strong>Email:</strong> {$safeEmail}</p>
            <p><strong>Phone:</strong> {$safePhone}</p>
            <p><strong>Subject:</strong> {$safeSubject}</p>
            <hr>
            <p><strong>Message:</strong></p>
            <p>{$safeMessage}</p>
            <hr>
            <p style='font-size: 11px; color: #999;'>Submitted from IP: {$safeIp}</p>
        </div>
    ";

    $mail->AltBody = "New submission from {$name} ({$email}, {$phone})\nSubject: {$subject}\n\n{$message}";

    $mail->send();

    // Update rate limit counters only on genuine success
    $_SESSION['last_contact_submit'] = $now;
    $rateData['count']++;
    @file_put_contents($rateLimitFile, json_encode($rateData));

    // Rotate CSRF token after successful use
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    echo json_encode([
        'success' => true,
        'message' => "Thanks, {$name}! We'll be in touch within 24 hours.",
        'csrf_token' => $_SESSION['csrf_token']
    ]);
} catch (Exception $e) {
    error_log('Contact form mail error: ' . $mail->ErrorInfo);
    fail(500, 'We could not send your message right now. Please try again shortly.');
}
