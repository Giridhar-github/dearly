<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad(); // won't crash if .env is missing (Render uses real env vars instead)

function env_required(string $key): string
{
    $value = $_ENV[$key] ?? getenv($key);
    if ($value === false || $value === null || $value === '') {
        error_log("Missing required environment variable: {$key}");
        http_response_code(500);
        die('Something went wrong. Please try again later.');
    }
    return $value;
}

function env_optional(string $key, string $default = ''): string
{
    $value = $_ENV[$key] ?? getenv($key);
    return ($value !== false && $value !== null && $value !== '') ? $value : $default;
}

// ------------------------------------
// BASE_URL: use .env locally (subfolder setup),
// auto-detect on Render (served from domain root) if not explicitly set
// ------------------------------------

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$dynamicDefault = $protocol . $host . '/';

define('APP_NAME', env_optional('APP_NAME', 'Dearly'));
define('BASE_URL', env_optional('BASE_URL', $dynamicDefault));

define('EMAIL', 'dearly@gmail.com');
define('PHONE', '+9111545445454');
define('ADDRESS', 'Kochi, Kerala, India');

date_default_timezone_set('Asia/Kolkata');

define('DIARIES_DELIVERED', '1');
define('AVERAGE_RATING', '4.9');
define('PERSONALISED', '100%');
define('GIFT_SATISFACTION', '98%');

// ------------------------------------
// SMTP / mail config — optional here;
// contact-form.php checks MAIL_IS_CONFIGURED before attempting to send
// ------------------------------------

define('SMTP_HOST', env_optional('SMTP_HOST'));
define('SMTP_PORT', env_optional('SMTP_PORT', '587'));
define('SMTP_USERNAME', env_optional('SMTP_USERNAME'));
define('SMTP_PASSWORD', env_optional('SMTP_PASSWORD'));
define('SMTP_FROM_EMAIL', env_optional('SMTP_FROM_EMAIL'));
define('SMTP_FROM_NAME', env_optional('SMTP_FROM_NAME', 'Dearly'));
define('CONTACT_RECEIVING_EMAIL', env_optional('CONTACT_RECEIVING_EMAIL'));

define('MAIL_IS_CONFIGURED', SMTP_HOST !== '' && SMTP_USERNAME !== '' && SMTP_PASSWORD !== '' && CONTACT_RECEIVING_EMAIL !== '');
define(
    'MAIL_IS_CONFIGURED',
    SMTP_HOST !== '' && SMTP_USERNAME !== '' && SMTP_PASSWORD !== '' && SMTP_FROM_EMAIL !== '' && CONTACT_RECEIVING_EMAIL !== ''
);
