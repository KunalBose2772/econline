<?php
/**
 * EC Online - Google Indexing API Bulk Submission Tool
 * 
 * Instructions:
 * 1. Place your downloaded Google credentials JSON file in the ROOT folder of your project.
 * 2. Rename the file to: google_key.json
 * 3. Run this script from the command line: php config/google_index_bulk.php
 * 
 * Command-line options:
 *   php config/google_index_bulk.php              (Runs indexer only for pending pages)
 *   php config/google_index_bulk.php --status     (Shows indexing stats)
 *   php config/google_index_bulk.php --pending    (Lists pending page URLs)
 *   php config/google_index_bulk.php --submitted  (Lists already submitted URLs)
 *   php config/google_index_bulk.php --reset      (Resets state to submit all again)
 */

require_once __DIR__ . '/config.php';

// Self-migrate database to add tracking column if it doesn't exist
try {
    $pdo->query("SELECT google_indexed_at FROM econline_pages LIMIT 1");
} catch (PDOException $e) {
    echo "Adding 'google_indexed_at' column to database to track indexing state...\n";
    $pdo->exec("ALTER TABLE econline_pages ADD COLUMN google_indexed_at TIMESTAMP NULL DEFAULT NULL");
}

// Parse Command Line Arguments
$arg = $argv[1] ?? '';

if ($arg === '--status' || $arg === '-s') {
    $total = $pdo->query("SELECT COUNT(*) FROM econline_pages WHERE status = 'published'")->fetchColumn();
    $submitted = $pdo->query("SELECT COUNT(*) FROM econline_pages WHERE status = 'published' AND google_indexed_at IS NOT NULL")->fetchColumn();
    $pending = $pdo->query("SELECT COUNT(*) FROM econline_pages WHERE status = 'published' AND google_indexed_at IS NULL")->fetchColumn();
    
    echo "\n--- GOOGLE INDEXING STATE ---\n";
    echo "Total Published Pages: $total\n";
    echo "Already Submitted:    $submitted\n";
    echo "Pending Submission:   $pending\n";
    echo "-----------------------------\n\n";
    exit(0);
}

if ($arg === '--pending' || $arg === '-p') {
    $stmt = $pdo->query("SELECT slug FROM econline_pages WHERE status = 'published' AND google_indexed_at IS NULL ORDER BY id ASC");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "\n--- PENDING URLS (" . count($pages) . ") ---\n";
    foreach ($pages as $page) {
        $slug = $page['slug'];
        $url = ($slug === 'home') ? CANONICAL_BASE_URL : CANONICAL_BASE_URL . $slug . '/';
        echo $url . "\n";
    }
    echo "---------------------------\n\n";
    exit(0);
}

if ($arg === '--submitted' || $arg === '-d') {
    $stmt = $pdo->query("SELECT slug, google_indexed_at FROM econline_pages WHERE status = 'published' AND google_indexed_at IS NOT NULL ORDER BY google_indexed_at ASC");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "\n--- SUBMITTED URLS (" . count($pages) . ") ---\n";
    foreach ($pages as $page) {
        $slug = $page['slug'];
        $url = ($slug === 'home') ? CANONICAL_BASE_URL : CANONICAL_BASE_URL . $slug . '/';
        echo $url . " (Submitted: " . $page['google_indexed_at'] . ")\n";
    }
    echo "-----------------------------\n\n";
    exit(0);
}

if ($arg === '--reset' || $arg === '-r') {
    $pdo->exec("UPDATE econline_pages SET google_indexed_at = NULL");
    echo "\n[SUCCESS] Indexing state has been reset. All pages are marked as pending submission.\n\n";
    exit(0);
}

// Default run: Index remaining pages
$key_file = __DIR__ . '/../google_key.json';

if (!file_exists($key_file)) {
    echo "\n[ERROR] Credentials file not found!\n";
    echo "Please copy your downloaded Google Cloud JSON key file to the root directory:\n";
    echo "  " . realpath(__DIR__ . '/../') . "\\google_key.json\n\n";
    exit(1);
}

// 1. Load credentials from JSON
$creds = json_decode(file_get_contents($key_file), true);
if (!$creds || !isset($creds['private_key']) || !isset($creds['client_email'])) {
    echo "[ERROR] Invalid google_key.json file format.\n";
    exit(1);
}

echo "Generating OAuth 2.0 Access Token from Google...\n";

// Helper function for base64url encoding
function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

// 2. Build JSON Web Token (JWT)
$header = base64url_encode(json_encode([
    'alg' => 'RS256',
    'typ' => 'JWT'
]));

$now = time();
$payload = base64url_encode(json_encode([
    'iss' => $creds['client_email'],
    'scope' => 'https://www.googleapis.com/auth/indexing',
    'aud' => 'https://oauth2.googleapis.com/token',
    'exp' => $now + 3600,
    'iat' => $now
]));

$signature_input = $header . '.' . $payload;
$signature = '';

if (!openssl_sign($signature_input, $signature, $creds['private_key'], OPENSSL_ALGO_SHA256)) {
    echo "[ERROR] Failed to sign JWT assertion. Please make sure the openssl extension is enabled in PHP.\n";
    exit(1);
}

$assertion = $signature_input . '.' . base64url_encode($signature);

// 3. Request Access Token from Google OAuth2
$ch = curl_init('https://oauth2.googleapis.com/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
    'assertion' => $assertion
]));

$token_response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if (PHP_VERSION_ID < 80000) {
    $close_handle = 'curl_close';
    $close_handle($ch);
}

if ($http_code !== 200) {
    echo "[ERROR] OAuth request failed with code $http_code. Response:\n$token_response\n";
    exit(1);
}

$token_data = json_decode($token_response, true);
$access_token = $token_data['access_token'] ?? null;

if (!$access_token) {
    echo "[ERROR] Access Token not found in response.\n";
    exit(1);
}

echo "Access Token retrieved successfully.\n";

// 4. Fetch pending pages from database
try {
    $stmt = $pdo->query("SELECT slug FROM econline_pages WHERE status = 'published' AND google_indexed_at IS NULL ORDER BY id ASC");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "[ERROR] Database query failed: " . $e->getMessage() . "\n";
    exit(1);
}

$total_pending = count($pages);
echo "Found $total_pending pending pages in the database.\n\n";

if ($total_pending === 0) {
    echo "All pages have already been successfully submitted to Google! Nothing to do.\n";
    exit(0);
}

// 5. Submit pages to Google Indexing API
$submitted = 0;
$failed = 0;

$update_stmt = $pdo->prepare("UPDATE econline_pages SET google_indexed_at = CURRENT_TIMESTAMP WHERE slug = :slug");

foreach ($pages as $index => $page) {
    $slug = $page['slug'];
    $url = ($slug === 'home') ? CANONICAL_BASE_URL : CANONICAL_BASE_URL . $slug . '/';
    
    echo "[" . ($index + 1) . "/$total_pending] Submitting: $url ... ";
    
    $ch = curl_init('https://indexing.googleapis.com/v3/urlNotifications:publish');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'url' => $url,
        'type' => 'URL_UPDATED'
    ]));
    
    $api_response = curl_exec($ch);
    $api_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (PHP_VERSION_ID < 80000) {
        $close_handle = 'curl_close';
        $close_handle($ch);
    }
    
    if ($api_code === 200) {
        // Update database state immediately on success
        $update_stmt->execute(['slug' => $slug]);
        echo "SUCCESS\n";
        $submitted++;
    } else {
        $error_data = json_decode($api_response, true);
        $error_msg = $error_data['error']['message'] ?? 'Unknown Error';
        echo "FAILED (HTTP $api_code: $error_msg)\n";
        $failed++;
        
        // If daily quota limit (429) is hit, stop processing
        if ($api_code === 429) {
            echo "\n[NOTICE] Google's daily quota limit (200 requests per day) has been reached.\n";
            echo "Please run this script again tomorrow to submit the remaining pages.\n";
            break;
        }
    }
    
    // Tiny sleep to avoid aggressive API hit rates
    usleep(150000); // 150ms
}

echo "\n--- INDEXING RUN COMPLETED ---\n";
echo "Successfully Submitted: $submitted URLs\n";
echo "Failed to Submit: $failed URLs\n";
echo "-------------------------------\n";
