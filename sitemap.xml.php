<?php
require_once __DIR__ . '/config/config.php';
header('Content-Type: application/xml; charset=utf-8');

$stmt = $pdo->query("SELECT slug, last_updated FROM pages WHERE status = 'published' AND slug != '404' ORDER BY id ASC");
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt_serv = $pdo->query("SELECT slug, last_updated FROM services WHERE status = 'published' ORDER BY id ASC");
$services = $stmt_serv->fetchAll(PDO::FETCH_ASSOC);

$stmt_country = $pdo->query("SELECT slug, '2026-02-25 00:00:00' as last_updated FROM countries ORDER BY id ASC");
$countries = $stmt_country->fetchAll(PDO::FETCH_ASSOC);

$stmt_category = $pdo->query("SELECT CONCAT('category/', slug) as slug, '2026-02-25 00:00:00' as last_updated FROM categories ORDER BY id ASC");
$categories = $stmt_category->fetchAll(PDO::FETCH_ASSOC);

$all_urls = array_merge($pages, $countries, $categories, $services);

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($all_urls as $p) {
    if ($p['slug'] === '404')
        continue;
    $url = base_url($p['slug'] == 'home' ? '' : $p['slug'] . '/');
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($url) . "</loc>\n";
    // Format to ISO 8601
    $date = date('Y-m-d\TH:i:sP', strtotime($p['last_updated']));
    echo "    <lastmod>" . $date . "</lastmod>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>" . ($p['slug'] === 'home' ? '1.0' : '0.8') . "</priority>\n";
    echo "  </url>\n";
}
echo '</urlset>';
