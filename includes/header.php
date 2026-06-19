<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo htmlspecialchars($meta_title); ?>
    </title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Open Graph tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($meta_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:site_name" content="econline.in">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo base_url('assets/econline_logo.png'); ?>">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo base_url('assets/econline_logo.png'); ?>">

    <!-- Robots meta -->
    <?php if (($page['schema_type'] ?? '') === '404' || ($page['status'] ?? '') === 'draft'): ?>
        <meta name="robots" content="noindex, nofollow">
    <?php else: ?>
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <?php endif; ?>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon-16x16.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/apple-touch-icon.png'); ?>">

    <!-- Schema Markup -->
    <?php require_once __DIR__ . '/meta.php'; ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div class="container header-inner">
            <a href="<?php echo base_url(); ?>" class="logo">
                <img src="<?php echo base_url('assets/econline_logo.png'); ?>"
                    alt="econline.in Official Information Portal" width="180" height="auto">
            </a>
            <!-- Desktop Nav -->
            <nav class="desktop-nav">
                <a href="<?php echo base_url(); ?>">Home</a>
                <a href="<?php echo base_url('about-us/'); ?>">About Us</a>
                <a href="<?php echo base_url('contact/'); ?>">Contact</a>

                <!-- Desktop Search -->
                <div class="header-search">
                    <form action="<?php echo base_url(); ?>" method="GET" style="display:flex; align-items:center;">
                        <input type="text" name="q" placeholder="Search Encumbrance Certificates..." required
                            aria-label="Search">
                        <button type="submit" aria-label="Submit Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="lang-switcher">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                        </path>
                    </svg>
                    <select onchange="window.location.href=this.value;" aria-label="Select Language">
                        <option value="<?php echo base_url($current_base_slug); ?>" <?php if ($current_lang == 'en')
                               echo 'selected'; ?>>🇬🇧 EN</option>
                        <option value="<?php echo base_url('hi/' . $current_base_slug); ?>" <?php if ($current_lang == 'hi')
                                 echo 'selected'; ?>>🇮🇳 HI</option>
                        <option value="<?php echo base_url('es/' . $current_base_slug); ?>" <?php if ($current_lang == 'es')
                                 echo 'selected'; ?>>🇪🇸 ES</option>
                        <option value="<?php echo base_url('fr/' . $current_base_slug); ?>" <?php if ($current_lang == 'fr')
                                 echo 'selected'; ?>>🇫🇷 FR</option>
                        <option value="<?php echo base_url('ar/' . $current_base_slug); ?>" <?php if ($current_lang == 'ar')
                                 echo 'selected'; ?>>🇦🇪 AR</option>
                    </select>
                </div>
            </nav>

            <button class="mobile-menu-btn" aria-label="Toggle Menu"
                onclick="document.body.classList.toggle('nav-open')">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Off-Canvas Menu -->
    <div class="mobile-nav-wrapper">
        <div class="mobile-nav-header">
            <img src="<?php echo base_url('assets/econline_logo.png'); ?>" alt="econline.in" height="40">
            <button class="close-menu-btn" aria-label="Close Menu" onclick="document.body.classList.remove('nav-open')">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <nav class="mobile-nav-links">
            <a href="<?php echo base_url(); ?>">Home</a>
            <a href="<?php echo base_url('about-us/'); ?>">About Us</a>
            <a href="<?php echo base_url('contact/'); ?>">Contact</a>

            <div class="mobile-lang">
                <span style="color:var(--text-muted); font-size: 0.9rem; font-weight: 500;">Select Language:</span>
                <select onchange="window.location.href=this.value;"
                    style="padding: 0.75rem; border-radius: 4px; border: 1px solid var(--border-color); font-size: 1rem;">
                    <option value="<?php echo base_url($current_base_slug); ?>" <?php if ($current_lang == 'en')
                           echo 'selected'; ?>>🇬🇧 English</option>
                    <option value="<?php echo base_url('hi/' . $current_base_slug); ?>" <?php if ($current_lang == 'hi')
                             echo 'selected'; ?>>🇮🇳 हिन्दी (Hindi)</option>
                    <option value="<?php echo base_url('es/' . $current_base_slug); ?>" <?php if ($current_lang == 'es')
                             echo 'selected'; ?>>🇪🇸 Español</option>
                    <option value="<?php echo base_url('fr/' . $current_base_slug); ?>" <?php if ($current_lang == 'fr')
                             echo 'selected'; ?>>🇫🇷 Français</option>
                    <option value="<?php echo base_url('ar/' . $current_base_slug); ?>" <?php if ($current_lang == 'ar')
                             echo 'selected'; ?>>🇦🇪 العربية (Arabic)</option>
                </select>
            </div>
        </nav>
    </div>
    <div class="mobile-nav-backdrop" onclick="document.body.classList.remove('nav-open')"></div>