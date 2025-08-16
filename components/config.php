<?php
/**
 * শুভ জন্মাষ্টমী ২০২৫ - Configuration File
 * Happy Janmashtami 2025 - Configuration File
 */

// Site Configuration
define('SITE_TITLE', 'শুভ জন্মাষ্টমী ২০২৫ | Happy Janmashtami 2025');
define('SITE_DESCRIPTION', 'শ্রীকৃষ্ণের জন্মদিন উদযাপন - Celebrating Lord Krishna\'s Birthday');
define('SITE_KEYWORDS', 'জন্মাষ্টমী, কৃষ্ণ, Janmashtami, Krishna, 2025, ভারতীয় উৎসব, Indian Festival');
define('SITE_AUTHOR', 'Janmashtami 2025 Team');

// Date Configuration (August 16, 2025 - Janmashtami)
define('JANMASHTAMI_DATE', '2025-08-16');
define('JANMASHTAMI_YEAR', '2025');

// Timezone
date_default_timezone_set('Asia/Dhaka');

// Color Theme Configuration
$theme_colors = [
    'primary' => '#1E3A8A',      // Deep Blue
    'secondary' => '#FCD34D',    // Yellow
    'accent' => '#F59E0B',       // Golden
    'text_light' => '#FFFFFF',
    'text_dark' => '#1F2937',
    'gradient' => 'linear-gradient(135deg, #1E3A8A, #3B82F6, #FCD34D)'
];

// Content Configuration
$bengali_greetings = [
    'main' => 'শুভ জন্মাষ্টমী ২০২৫!',
    'secondary' => 'হরে কৃষ্ণ হরে কৃষ্ণ কৃষ্ণ কৃষ্ণ হরে হরে!',
    'blessing' => 'ভগবান শ্রীকৃষ্ণ সবার মঙ্গল করুন!'
];

$english_greetings = [
    'main' => 'Happy Janmashtami 2025!',
    'secondary' => 'Hare Krishna Hare Krishna Krishna Krishna Hare Hare!',
    'blessing' => 'May Lord Krishna bless everyone!'
];

// Utility Functions
function getCurrentDateTime() {
    return date('l, F j, Y - g:i:s A');
}

function getBengaliDateTime() {
    $months = [
        'January' => 'জানুয়ারি', 'February' => 'ফেব্রুয়ারি', 'March' => 'মার্চ',
        'April' => 'এপ্রিল', 'May' => 'মে', 'June' => 'জুন',
        'July' => 'জুলাই', 'August' => 'আগস্ট', 'September' => 'সেপ্টেম্বর',
        'October' => 'অক্টোবর', 'November' => 'নভেম্বর', 'December' => 'ডিসেম্বর'
    ];
    
    $current_month = date('F');
    $bengali_month = $months[$current_month] ?? $current_month;
    
    return date('j') . ' ' . $bengali_month . ' ' . date('Y') . ' - ' . date('g:i:s A');
}

function isJanmashtamiDay() {
    return date('Y-m-d') === JANMASHTAMI_DATE;
}
?>