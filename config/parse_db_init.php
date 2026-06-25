<?php
$lines = file(__DIR__ . '/db_init.php');
$count = 0;
foreach ($lines as $num => $line) {
    if (preg_match('/\$slug\s*=\s*\'([^\']+)\'/i', $line, $matches) || preg_match('/\$slug_(\w+)\s*=\s*\'([^\']+)\'/i', $line, $matches)) {
        $slug = isset($matches[2]) ? $matches[2] : $matches[1];
        echo "Line " . ($num + 1) . ": Slug = " . $slug . "\n";
        $count++;
        if ($count > 30) break;
    }
}
