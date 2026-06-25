<?php
require_once 'config/config.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $self_linked_pages = [
        59215 => 'ec-online',
        59221 => 'land-ec'
    ];
    
    foreach ($self_linked_pages as $id => $slug) {
        echo "Processing Page ID $id ($slug)..." . PHP_EOL;
        
        $stmt = $pdo->prepare("SELECT content FROM econline_pages WHERE id = ?");
        $stmt->execute([$id]);
        $content = $stmt->fetchColumn();
        
        // Match self-linking anchors for this specific slug
        // E.g., <a href="/ec-online/">ec online</a> or <a href="/ec-online">ec online</a>
        // We handle case insensitivity and optional trailing slashes
        $pattern = '/<a\s+[^>]*href=["\']\/?' . preg_quote($slug, '/') . '\/?["\'][^>]*>(.*?)<\/a>/si';
        
        $new_content = preg_replace_callback($pattern, function($matches) {
            echo "  Found self-link: " . $matches[0] . " -> Replacing with: " . $matches[1] . PHP_EOL;
            return $matches[1];
        }, $content);
        
        if ($new_content !== $content) {
            $update_stmt = $pdo->prepare("UPDATE econline_pages SET content = ? WHERE id = ?");
            $update_stmt->execute([$new_content, $id]);
            echo "  SUCCESS: Cleaned self-links for $slug." . PHP_EOL;
        } else {
            echo "  No self-links matched the pattern." . PHP_EOL;
        }
        echo PHP_EOL;
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
