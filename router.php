<?php
// Built-in PHP development web server router script
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;

// Serve static assets directly if they exist
if ($path !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Pass request handling to main index.php entrypoint
require_once __DIR__ . '/index.php';
