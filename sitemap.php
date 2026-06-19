<?php
require_once __DIR__ . '/config/config.php';

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Add homepage
echo '  <url>' . "\n";
echo '    <loc>https://econline.in/</loc>' . "\n";
echo '    <changefreq>daily</changefreq>' . "\n";
echo '    <priority>1.0</priority>' . "\n";
echo '  </url>' . "\n";

try {
    // Get all other published pages
    $stmt = $pdo->query("SELECT slug, updated_at FROM econline_pages WHERE status = 'published' AND slug != 'home' ORDER BY id ASC");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($pages as $page) {
        $lastmod = date('Y-m-d', strtotime($page['updated_at']));
        echo '  <url>' . "\n";
        echo '    <loc>https://econline.in/' . htmlspecialchars($page['slug']) . '/</loc>' . "\n";
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
?>
