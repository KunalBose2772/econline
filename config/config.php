<?php
session_start();

define('CANONICAL_BASE_URL', 'https://econline.in/');


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
    define('DB_PORT', '3306'); // Local XAMPP MySQL port is 3306
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

/**
 * Optimizes HTML content for technical SEO:
 * 1. Image dimension injection via local getimagesize() & native lazy loading/decoding
 * 2. Pre-calculates unique IDs for all <h2> headings to prepare for Table of Contents
 * 3. Injects descriptive title attributes to all <a> tags
 */
function optimize_content_for_seo($content) {
    // 1. Image Sanitizer
    $content = preg_replace_callback('/<img\s+([^>]*)\/?>/is', function($img_matches) {
        $attrs_string = $img_matches[1];
        $attrs = [];
        preg_match_all('/([a-z0-9\-]+)\s*=\s*["\']([^"\']*)["\']/i', $attrs_string, $attr_matches, PREG_SET_ORDER);
        foreach ($attr_matches as $match) {
            $attrs[strtolower($match[1])] = $match[2];
        }
        $attrs['loading'] = 'lazy';
        $attrs['decoding'] = 'async';
        if (!isset($attrs['width']) && !isset($attrs['height'])) {
            $src = $attrs['src'] ?? '';
            $resolved = false;
            if (!empty($src) && !str_starts_with($src, 'http') && !str_starts_with($src, 'data:')) {
                // Resolve path relative to the document root (workspace)
                $local_path = dirname(__DIR__) . '/' . ltrim(parse_url($src, PHP_URL_PATH), '/');
                if (file_exists($local_path) && !is_dir($local_path)) {
                    $size = @getimagesize($local_path);
                    if ($size) {
                        $attrs['width'] = (string)$size[0];
                        $attrs['height'] = (string)$size[1];
                        $resolved = true;
                    }
                }
            }
            if (!$resolved) {
                $attrs['width'] = '800';
                $attrs['height'] = '450';
            }
        }
        $new_attrs = [];
        foreach ($attrs as $name => $val) {
            $new_attrs[] = $name . '="' . htmlspecialchars($val) . '"';
        }
        return '<img ' . implode(' ', $new_attrs) . ' />';
    }, $content);

    // 2. Heading TOC IDs injection
    $toc_links = [];
    $h2_count = 0;
    $content = preg_replace_callback('/<h2\b([^>]*)>(.*?)<\/h2>/is', function($h2_matches) use (&$toc_links, &$h2_count) {
        $h2_count++;
        $attrs_string = $h2_matches[1];
        $heading_text = strip_tags($h2_matches[2]);
        $clean_id = 'heading-' . $h2_count;
        
        $attrs = [];
        if (!empty($attrs_string)) {
            preg_match_all('/([a-z0-9\-]+)\s*=\s*["\']([^"\']*)["\']/i', $attrs_string, $attr_matches, PREG_SET_ORDER);
            foreach ($attr_matches as $match) {
                $attrs[strtolower($match[1])] = $match[2];
            }
        }
        $attrs['id'] = $clean_id;
        $new_attrs = [];
        foreach ($attrs as $name => $val) {
            $new_attrs[] = $name . '="' . htmlspecialchars($val) . '"';
        }
        $toc_links[] = [
            'id' => $clean_id,
            'text' => $heading_text
        ];
        return '<h2 ' . implode(' ', $new_attrs) . '>' . $h2_matches[2] . '</h2>';
    }, $content);

    // 3. Link Sanitizer (Title injection)
    $content = preg_replace_callback('/<a\b([^>]*)>(.*?)<\/a>/is', function($anchor_matches) {
        $attrs_string = $anchor_matches[1];
        $link_text = trim(strip_tags($anchor_matches[2]));
        
        $attrs = [];
        preg_match_all('/([a-z0-9\-]+)\s*=\s*["\']([^"\']*)["\']/i', $attrs_string, $attr_matches, PREG_SET_ORDER);
        foreach ($attr_matches as $match) {
            $attrs[strtolower($match[1])] = $match[2];
        }
        
        if (!isset($attrs['title']) && !empty($link_text)) {
            $href = isset($attrs['href']) ? $attrs['href'] : '';
            $is_external = false;
            if (!empty($href) && (strpos($href, 'http') === 0) && (strpos($href, 'econline.in') === false)) {
                $is_external = true;
            }
            
            $link_text_lower = strtolower($link_text);
            
            if ($is_external) {
                $attrs['title'] = "Visit the official " . $link_text . " website (External Link)";
            } elseif ($link_text_lower === 'home' || $href === '/' || $href === '/index.php') {
                $attrs['title'] = "Go to the EC Online Homepage";
            } elseif ($link_text_lower === 'about us') {
                $attrs['title'] = "Learn more about us and our mission";
            } elseif ($link_text_lower === 'contact us') {
                $attrs['title'] = "Get in touch with our team";
            } elseif ($link_text_lower === 'privacy policy') {
                $attrs['title'] = "Read our privacy policy";
            } elseif ($link_text_lower === 'terms & conditions' || $link_text_lower === 'terms and conditions') {
                $attrs['title'] = "Read our terms and conditions";
            } elseif ($link_text_lower === 'disclaimer') {
                $attrs['title'] = "Read our legal disclaimer";
            } else {
                $attrs['title'] = "Read our comprehensive guide on " . $link_text;
            }
        }
        
        $new_attrs = [];
        foreach ($attrs as $name => $val) {
            $new_attrs[] = $name . '="' . htmlspecialchars($val) . '"';
        }
        return '<a ' . implode(' ', $new_attrs) . '>' . $anchor_matches[2] . '</a>';
    }, $content);

    return [
        'content' => $content,
        'toc_links' => $toc_links
    ];
}

// Database Connection Setup
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Self-migration: ensure redirect_to column exists on pre-existing database tables
    try {
        $pdo->query("SELECT `redirect_to` FROM `econline_pages` LIMIT 1");
    } catch (PDOException $e) {
        $pdo->exec("ALTER TABLE `econline_pages` ADD COLUMN `redirect_to` VARCHAR(255) DEFAULT NULL AFTER `status`");
    }
} catch (PDOException $e) {
    if (ENVIRONMENT === 'development') {
        die("Database connection failed: " . $e->getMessage());
    } else {
        die("A database error occurred.");
    }
}
