<?php
require_once __DIR__ . '/config/config.php';

header('Content-Type: application/json');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';

if (strlen($q) < 2) {
    echo json_encode([]);
    exit;
}

try {
    // Find up to 8 matched keywords that have published pages
    $stmt = $pdo->prepare("
        SELECT keyword, slug 
        FROM econline_pages 
        WHERE status = 'published' AND keyword LIKE :query 
        ORDER BY LENGTH(keyword) ASC 
        LIMIT 8
    ");
    $stmt->execute(['query' => '%' . $q . '%']);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode([]);
}
