<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

define('APP_NAME', 'Dearly');
define('BASE_URL', $_ENV['BASE_URL']);

define('EMAIL', 'dearly@gmail.com');
define('PHONE', '+9111545445454');
define('ADDRESS', 'Kochi, Kerala, India');

date_default_timezone_set('Asia/Kolkata');

define('DIARIES_DELIVERED', '1');
define('AVERAGE_RATING', '4.9');
define('PERSONALISED', '100%');
define('GIFT_SATISFACTION', '98%');
