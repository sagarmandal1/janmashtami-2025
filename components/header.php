<?php
/**
 * Header Component for Janmashtami 2025 Website
 */
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">
    <meta name="author" content="<?php echo SITE_AUTHOR; ?>">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Bengali">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo SITE_TITLE; ?>">
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="bn_BD">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo SITE_TITLE; ?>">
    <meta name="twitter:description" content="<?php echo SITE_DESCRIPTION; ?>">
    
    <!-- Favicon and Icons -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Performance Optimizations -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
</head>
<body>
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="krishna-symbol">🕉️</div>
            <p>লোড হচ্ছে... Loading...</p>
        </div>
    </div>

    <header class="main-header" role="banner">
        <div class="header-background"></div>
        <div class="header-content container">
            <div class="header-top">
                <div class="date-time-display">
                    <div class="current-date">
                        <span class="bengali-date"><?php echo getBengaliDateTime(); ?></span>
                        <span class="english-date"><?php echo getCurrentDateTime(); ?></span>
                    </div>
                    <?php if (isJanmashtamiDay()): ?>
                        <div class="special-day-badge">
                            <span>🎉 আজ জন্মাষ্টমী! Today is Janmashtami! 🎉</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="header-main">
                <h1 class="site-title">
                    <span class="bengali-title">শুভ জন্মাষ্টমী <?php echo JANMASHTAMI_YEAR; ?></span>
                    <span class="english-title">Happy Janmashtami <?php echo JANMASHTAMI_YEAR; ?></span>
                </h1>
                
                <div class="greeting-message">
                    <p class="main-greeting bengali"><?php echo $bengali_greetings['main']; ?></p>
                    <p class="main-greeting english"><?php echo $english_greetings['main']; ?></p>
                    <p class="secondary-greeting"><?php echo $bengali_greetings['secondary']; ?></p>
                </div>
                
                <div class="krishna-symbols">
                    <span class="symbol">🦚</span>
                    <span class="symbol">🐄</span>
                    <span class="symbol">🪈</span>
                    <span class="symbol">🦚</span>
                </div>
            </div>
        </div>
        
        <nav class="main-navigation" role="navigation" aria-label="Main Navigation">
            <div class="container">
                <ul class="nav-links">
                    <li><a href="#celebration" class="nav-link">উৎসব <span>Celebration</span></a></li>
                    <li><a href="#significance" class="nav-link">তাৎপর্য <span>Significance</span></a></li>
                    <li><a href="#rituals" class="nav-link">আচার-অনুষ্ঠান <span>Rituals</span></a></li>
                    <li><a href="#teachings" class="nav-link">শিক্ষা <span>Teachings</span></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="main-content" role="main">
        <div class="floating-elements">
            <div class="floating-peacock-feather"></div>
            <div class="floating-lotus"></div>
            <div class="floating-om"></div>
        </div>