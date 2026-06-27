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

try {
    // Get all other published pages (excluding redirected ones)
    $stmt = $pdo->query("SELECT slug, updated_at FROM econline_pages WHERE status = 'published' AND slug != 'home' AND (redirect_to IS NULL OR redirect_to = '') ORDER BY id ASC");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($pages as $page) {
        $lastmod = date('Y-m-d', strtotime($page['updated_at']));
        echo '  <url>' . "\n";
        echo '    <loc>' . htmlspecialchars(CANONICAL_BASE_URL) . htmlspecialchars($page['slug']) . '/</loc>' . "\n";
        echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
        echo '    <changefreq>weekly</changefreq>' . "\n";
        echo '    <priority>0.8</priority>' . "\n";
        echo '  </url>' . "\n";
    }
} catch (PDOException $e) {
    // Fail silently in XML comment
    echo '  <!-- DB Error fetching pages -->' . "\n";
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
