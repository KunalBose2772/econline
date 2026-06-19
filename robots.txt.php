<?php
require_once __DIR__ . '/config/config.php';
header('Content-Type: text/plain');

echo "User-agent: *\n";
echo "Disallow: /admin/\n";
echo "Allow: /assets/\n";
echo "Allow: /css/\n";
echo "Allow: /js/\n\n";
echo "Sitemap: " . base_url('sitemap.xml') . "\n";
