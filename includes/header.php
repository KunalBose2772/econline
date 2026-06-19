<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'EC Online - Encumbrance Certificate Portals'; ?></title>
    <meta name="description" content="<?php echo isset($meta_desc) ? htmlspecialchars($meta_desc) : 'Official portals and step-by-step guides for searching, checking, and downloading Encumbrance Certificate (EC) online across all Indian states.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? htmlspecialchars($page_keywords) : 'ec online, encumbrance certificate, check ec online, download ec online'; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo isset($canonical_url) ? htmlspecialchars($canonical_url) : 'https://econline.in/'; ?>">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/EC_Favicon.png">
    
    <!-- Dynamic Schema Markups -->
    <?php if (isset($schemas) && is_array($schemas)): ?>
        <?php foreach ($schemas as $schema): ?>
            <script type="application/ld+json">
            <?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
            </script>
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>

<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo-link">
            <span class="logo-text">EC Online</span>
        </a>
        <nav>
            <ul class="nav-menu">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Tamil Nadu</a></li>
                <li><a href="#" class="nav-link">Karnataka</a></li>
                <li><a href="#" class="nav-link">Telangana</a></li>
                <li><a href="#" class="nav-link">Andhra Pradesh</a></li>
            </ul>
        </nav>
    </div>
</header>
