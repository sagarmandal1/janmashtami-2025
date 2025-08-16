<?php
/**
 * Configuration file for Janmashtami 2025 Website
 * Date: 16 August 2025 - Shubho Janmashtami
 */

// Set timezone for Bangladesh
date_default_timezone_set('Asia/Dhaka');

// Website configuration
define('SITE_TITLE', 'শুভ জন্মাষ্টমী ২০২৫ | Happy Janmashtami 2025');
define('SITE_DESCRIPTION', 'শুভ জন্মাষ্টমী ২০২৫ উপলক্ষে বিশেষ ওয়েবসাইট। হরে কৃষ্ণ! Celebrating Janmashtami 2025 with devotion and joy.');
define('SITE_KEYWORDS', 'জন্মাষ্টমী, কৃষ্ণ, হিন্দু উৎসব, Janmashtami, Krishna, Hindu Festival, 2025');

// Current date and time
$currentDate = date("l, F j, Y");
$currentDateBangla = "শুক্রবার, ১৬ আগস্ট ২০২৫";
$currentTime = date("h:i:s A");

// Janmashtami specific content
$janmashtamiGreeting = [
    'bengali' => 'শুভ জন্মাষ্টমী ২০২৫! হরে কৃষ্ণ!',
    'english' => 'Happy Janmashtami 2025! Hare Krishna!'
];

$krishnaQuotes = [
    [
        'sanskrit' => 'कर्मण्येवाधिकारस्ते मा फलेषु कदाचन।',
        'bengali' => 'কর্মণ্যেবাধিকারস্তে মা ফলেষু কদাচন।',
        'english' => 'You have the right to perform your actions, but never to the fruits of action.',
        'source' => 'ভগবদ গীতা ২.৪৭'
    ],
    [
        'sanskrit' => 'यदा यदा हि धर्मस्य ग्लानिर्भवति भारत।',
        'bengali' => 'যদা যদা হি ধর্মস্য গ্লানির্ভবতি ভারত।',
        'english' => 'Whenever there is a decline in dharma and rise of adharma, O Bharata.',
        'source' => 'ভগবদ গীতা ৪.৭'
    ]
];

// Colors theme
$colors = [
    'primary' => '#1E3A8A',      // Dark Blue
    'secondary' => '#FCD34D',    // Yellow
    'accent' => '#F59E0B',       // Golden
    'text_light' => '#FFFFFF',
    'text_dark' => '#1F2937'
];
?>