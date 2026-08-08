<?php
require_once __DIR__ . '/config/config.php';

$cache_dir = __DIR__ . '/cache';
$cache_file = $cache_dir . '/sitemap.xml';
$cache_time = 86400; // 24-hour cache TTL

if (defined('ENVIRONMENT') && ENVIRONMENT === 'production') {
    if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_time)) {
        header("Content-Type: application/xml; charset=utf-8");
        readfile($cache_file);
        exit;
    }
    ob_start();
}

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Add homepage
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . '</loc>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '  </url>' . "\n";

// Add site directory
echo '  <url>' . "\n";
echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . 'site-directory/</loc>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>0.9</priority>' . "\n";
echo '  </url>' . "\n";

// Fetch all physical page files in pages/ directory
$file_slugs = [];
$pages_dir = __DIR__ . '/pages';
if (is_dir($pages_dir)) {
    $dir_files = scandir($pages_dir);
    foreach ($dir_files as $f) {
        if (substr($f, -4) === '.php') {
            $s = substr($f, 0, -4);
            if ($s !== 'home' && $s !== '404') {
                $file_slugs[$s] = date('Y-m-d', filemtime($pages_dir . '/' . $f));
            }
        }
    }
}

$redirected_slugs = [
    'ec-apply-online-in-tamilnadu' => true,
    'ec-check-online-tamilnadu' => true,
    'ec-copy-online-tamilnadu' => true,
    'get-ec-online-tamilnadu' => true,
    'how-to-apply-ec-online-in-tamilnadu' => true,
    'how-to-apply-for-ec-online-in-tamilnadu' => true,
    'how-to-check-ec-online-in-tamilnadu' => true,
    'how-to-check-ec-online-tamilnadu' => true,
    'how-to-get-ec-online-in-tamilnadu' => true,
    'how-to-take-ec-online-in-tamilnadu' => true,
    'ecview-tnreginet' => true,
    'ecview-tnreginet-net' => true,
    'tnreginet-ec-online-view' => true,
    'tnreginet-net-ec-view' => true,
    'www-tnreginet-net-ec' => true,
    'www-tnreginet-net-ec-view' => true,
    'www-tnreginet-net-2018-ec' => true,
    'tnreginet-ec-view-online' => true,
    'guideline-value-tamilnadu' => true,
    'tnreginet-guideline-value-tamilnadu' => true,
    'tnreginet-net-guideline-value' => true,
    'www-tnreginet-net-guideline-value' => true,
    'wwwtnreginetnet-guideline-value-2023' => true,
    'tnreginet-land-value' => true,
    'patta-chitta-ec-online' => true,
    'patta-chitta-ec-online-status-tamilnadu' => true,
    'patta-chitta-ec-online-tamil' => true,
    'tn-patta-chitta-ec-online' => true,
    'tamil-nadu-patta-chitta-ec-online' => true,
    'tnreginet-patta' => true,
];

try {
    // Get all other published pages (excluding redirected ones)
    $stmt = $pdo->query("SELECT slug, updated_at FROM econline_pages WHERE status = 'published' AND slug != 'home' AND (redirect_to IS NULL OR redirect_to = '') ORDER BY id ASC");
    $db_pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Merge DB pages with physical file pages
    $all_urls = [];
    foreach ($file_slugs as $s => $mdate) {
        if (!isset($redirected_slugs[$s])) {
            $all_urls[$s] = $mdate;
        }
    }
    foreach ($db_pages as $page) {
        $s = $page['slug'];
        if (isset($redirected_slugs[$s])) {
            continue;
        }
        $mdate = date('Y-m-d', strtotime($page['updated_at']));
        if (!isset($all_urls[$s])) {
            $all_urls[$s] = $mdate;
        }
    }
    
    foreach ($all_urls as $s => $lastmod) {
        echo '  <url>' . "\n";
        echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . htmlspecialchars($s) . '/</loc>' . "\n";
        echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
        echo '    <changefreq>weekly</changefreq>' . "\n";
        echo '    <priority>0.8</priority>' . "\n";
        echo '  </url>' . "\n";
    }
} catch (PDOException $e) {
    // Fallback output for physical files if DB fails
    foreach ($file_slugs as $s => $lastmod) {
        echo '  <url>' . "\n";
        echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . htmlspecialchars($s) . '/</loc>' . "\n";
        echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
        echo '    <changefreq>weekly</changefreq>' . "\n";
        echo '    <priority>0.8</priority>' . "\n";
        echo '  </url>' . "\n";
    }
}

echo '</urlset>' . "\n";

if (defined('ENVIRONMENT') && ENVIRONMENT === 'production') {
    $sitemap_content = ob_get_clean();
    if (!is_dir($cache_dir)) {
        mkdir($cache_dir, 0755, true);
    }
    file_put_contents($cache_file, $sitemap_content);
    echo $sitemap_content;
}
?>
