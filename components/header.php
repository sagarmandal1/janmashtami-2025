<?php
// Include configuration
require_once 'components/config.php';
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
    <meta name="author" content="Janmashtami 2025 Team">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo SITE_TITLE; ?>">
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="bn_BD">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-brand">
                    <i class="fas fa-lotus"></i>
                    <h1>জন্মাষ্টমী ২০২৫</h1>
                </div>
                <div class="nav-links">
                    <a href="#home" class="nav-link">হোম</a>
                    <a href="#significance" class="nav-link">তাৎপর্য</a>
                    <a href="#traditions" class="nav-link">ঐতিহ্য</a>
                    <a href="#quotes" class="nav-link">শ্লোক</a>
                </div>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
        
        <!-- Date and Time Display -->
        <div class="datetime-display">
            <div class="date-info">
                <i class="fas fa-calendar-alt"></i>
                <span class="date-bengali"><?php echo $currentDateBangla; ?></span>
                <span class="date-english"><?php echo $currentDate; ?></span>
            </div>
            <div class="time-info">
                <i class="fas fa-clock"></i>
                <span id="current-time"><?php echo $currentTime; ?></span>
            </div>
        </div>
    </header>