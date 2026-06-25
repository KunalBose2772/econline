<?php
session_start();

// Automatically detect environment
$host = isset($_SERVER['HTTP_HOST']) ? strtolower($_SERVER['HTTP_HOST']) : '';
$addr = $_SERVER['REMOTE_ADDR'] ?? '';

$is_localhost = false;
if (
    php_sapi_name() === 'cli' ||
    strpos($host, 'localhost') !== false ||
    strpos($host, '127.0.0.1') !== false ||
    in_array($addr, ['127.0.0.1', '::1']) ||
    strpos($host, '.local') !== false ||
    preg_match('/^192\.168\.|^10\.|^172\.(1[6-9]|2[0-9]|3[0-1])\./', $host)
) {
    $is_localhost = true;
}

if ($is_localhost) {
    // Development Environment
    define('ENVIRONMENT', 'development');

    // Dynamic BASE_URL for any local host / port / subfolder
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $hostPort = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // Check if we are accessed via a subfolder like /econline/
    $requestUri = $_SERVER['REQUEST_URI'] ?? '';
    // Let's assume the base relies on the root of execution
    $base_dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    if ($base_dir === '/' || $base_dir === '\\')
        $base_dir = '';

    define('BASE_URL', rtrim($protocol . $hostPort . $base_dir, '/') . '/');

    // DB Config for local
    define('DB_HOST', 'localhost');
    define('DB_PORT', '3307'); // Local XAMPP MySQL port is 3307
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'econline');

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    // Production Environment
    define('ENVIRONMENT', 'production');
    define('BASE_URL', 'https://econline.in/');

    // DB Config for production
    define('DB_HOST', 'localhost');
    define('DB_PORT', '3306'); // Production MySQL port is 3306
    define('DB_USER', 'u827121208_ec');
    define('DB_PASS', 'KunalGW@1411');
    define('DB_NAME', 'u827121208_ec');

    error_reporting(0);
    ini_set('display_errors', 0);
}

// Global helper functions
function is_production()
{
    return ENVIRONMENT === 'production';
}

function base_url($path = '')
{
    return BASE_URL . ltrim($path, '/');
}

// Database Connection Setup
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    if (ENVIRONMENT === 'development') {
        die("Database connection failed: " . $e->getMessage());
    } else {
        die("A database error occurred.");
    }
}
