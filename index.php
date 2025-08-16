<?php
/**
 * শুভ জন্মাষ্টমী ২০২৫ - Main Page
 * Happy Janmashtami 2025 - Main Page
 * 
 * This is the main landing page for the Janmashtami 2025 celebration website.
 * It includes comprehensive content about Lord Krishna's birthday celebration
 * with both Bengali and English content.
 */

// Include configuration
require_once 'components/config.php';

// Include header
include 'components/header.php';
?>

        <!-- Hero Section with Celebration Information -->
        <section id="celebration" class="content-section container">
            <h2 class="section-title">
                <span class="bengali">উৎসব উদযাপন</span>
                <span class="english">Celebration</span>
            </h2>
            
            <div class="content-text">
                <p class="bengali">
                    আজ ১৬ আগস্ট ২০২৫, পবিত্র জন্মাষ্টমীর দিন। এই আনন্দময় উৎসবে আমরা ভগবান শ্রীকৃষ্ণের জন্মদিন উদযাপন করছি। 
                    দ্বাপর যুগে মথুরার কারাগারে দেবকী ও বাসুদেবের পুত্র হিসেবে শ্রীকৃষ্ণের জন্ম হয়েছিল অন্ধকার রাত্রিতে।
                </p>
                <p class="english">
                    Today, August 16, 2025, we celebrate the sacred day of Janmashtami. On this joyous festival, we commemorate the birthday of Lord Sri Krishna. 
                    In the Dvapara Yuga, Sri Krishna was born to Devaki and Vasudeva in the prison of Mathura during the dark night.
                </p>
            </div>

            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">🏺</span>
                    <h3>
                        <span class="bengali">দধি হান্ডি</span>
                        <br>
                        <span class="english">Dahi Handi</span>
                    </h3>
                    <p class="bengali">মাখন চোরের স্মরণে দধি হান্ডি ভাঙ্গা</p>
                    <p class="english">Breaking the pot of yogurt in memory of the butter thief</p>
                </div>
                
                <div class="info-card">
                    <span class="icon">🎭</span>
                    <h3>
                        <span class="bengali">রাসলীলা</span>
                        <br>
                        <span class="english">Raas Leela</span>
                    </h3>
                    <p class="bengali">কৃষ্ণের জীবনের বিভিন্ন ঘটনার নাট্য অভিনয়</p>
                    <p class="english">Dramatic performances of various episodes from Krishna's life</p>
                </div>
                
                <div class="info-card">
                    <span class="icon">🪈</span>
                    <h3>
                        <span class="bengali">ভজন কীর্তন</span>
                        <br>
                        <span class="english">Bhajan Kirtan</span>
                    </h3>
                    <p class="bengali">হরে কৃষ্ণ মহামন্ত্র জপ ও গান</p>
                    <p class="english">Chanting and singing the Hare Krishna Mahamantra</p>
                </div>
            </div>
        </section>

        <!-- Significance Section -->
        <section id="significance" class="content-section container">
            <h2 class="section-title">
                <span class="bengali">জন্মাষ্টমীর তাৎপর্য</span>
                <span class="english">Significance of Janmashtami</span>
            </h2>
            
            <div class="content-text">
                <p class="bengali">
                    জন্মাষ্টমী হিন্দু ধর্মের একটি অত্যন্ত পবিত্র উৎসব। এই দিনে ভগবান বিষ্ণুর অষ্টম অবতার শ্রীকৃষ্ণের জন্ম হয়েছিল। 
                    তিনি পৃথিবীতে এসেছিলেন অধর্মের বিনাশ ও ধর্ম প্রতিষ্ঠার জন্য।
                </p>
                <p class="english">
                    Janmashtami is a highly sacred festival of Hinduism. On this day, Sri Krishna, the eighth incarnation of Lord Vishnu, was born. 
                    He came to earth to destroy adharma and establish dharma.
                </p>
            </div>

            <blockquote class="krishna-quote">
                <p class="bengali">যদা যদা হি ধর্মস্য গ্লানির্ভবতি ভারত।
                অভ্যুত্থানমধর্মস্য তদাত্মানং সৃজাম্যহম্।।</p>
                <p class="english">Whenever there is decline in righteousness and an increase in unrighteousness, 
                O Arjuna, at that time I manifest myself on earth.</p>
                <cite>- ভগবদ গীতা ৪.৭ (Bhagavad Gita 4.7)</cite>
            </blockquote>
            
            <div class="content-text">
                <p class="bengali">
                    এই শ্লোক থেকে বোঝা যায় যে যখনই পৃথিবীতে অন্যায় ও অধর্ম বৃদ্ধি পায়, তখনই ভগবান অবতার নিয়ে পৃথিবীতে আসেন।
                </p>
                <p class="english">
                    This verse explains that whenever injustice and unrighteousness increase on earth, 
                    the Lord incarnates on earth to restore balance.
                </p>
            </div>
        </section>

        <!-- Rituals Section -->
        <section id="rituals" class="content-section container">
            <h2 class="section-title">
                <span class="bengali">আচার-অনুষ্ঠান</span>
                <span class="english">Rituals and Traditions</span>
            </h2>
            
            <ul class="feature-list">
                <li>
                    <span class="bengali">উপবাস রাখা - রাত ১২টা পর্যন্ত নিরাহার থাকা</span>
                    <span class="english">Fasting - Observing fast until midnight</span>
                </li>
                <li>
                    <span class="bengali">মন্দির সাজানো - ফুল ও রঙিন সজ্জায় মন্দির সাজানো</span>
                    <span class="english">Temple Decoration - Decorating temples with flowers and colorful ornaments</span>
                </li>
                <li>
                    <span class="bengali">ভগবদ গীতা পাঠ - পবিত্র গ্রন্থ থেকে শ্লোক পাঠ</span>
                    <span class="english">Bhagavad Gita Recitation - Reading verses from the sacred text</span>
                </li>
                <li>
                    <span class="bengali">প্রসাদ বিতরণ - মিষ্টি ও ফল বিতরণ</span>
                    <span class="english">Prasad Distribution - Distributing sweets and fruits</span>
                </li>
                <li>
                    <span class="bengali">জন্মাভিষেক - কৃষ্ণ মূর্তির স্নান করানো</span>
                    <span class="english">Janmabhishek - Bathing the Krishna idol</span>
                </li>
            </ul>
            
            <div class="info-cards">
                <div class="info-card">
                    <span class="icon">🥛</span>
                    <h3>
                        <span class="bengali">মাখন মিশ্রী</span>
                        <br>
                        <span class="english">Makhan Mishri</span>
                    </h3>
                    <p class="bengali">কৃষ্ণের প্রিয় খাবার মাখন ও মিশ্রী</p>
                    <p class="english">Krishna's favorite food - butter and sugar candy</p>
                </div>
                
                <div class="info-card">
                    <span class="icon">🌸</span>
                    <h3>
                        <span class="bengali">তুলসী পাতা</span>
                        <br>
                        <span class="english">Tulsi Leaves</span>
                    </h3>
                    <p class="bengali">পবিত্র তুলসী পাতা দিয়ে পূজা</p>
                    <p class="english">Worship with sacred tulsi leaves</p>
                </div>
                
                <div class="info-card">
                    <span class="icon">🕯️</span>
                    <h3>
                        <span class="bengali">দীপাবলি</span>
                        <br>
                        <span class="english">Deepavali</span>
                    </h3>
                    <p class="bengali">প্রদীপ জ্বালিয়ে আলোকিত করা</p>
                    <p class="english">Lighting lamps to illuminate the surroundings</p>
                </div>
            </div>
        </section>

        <!-- Teachings Section -->
        <section id="teachings" class="content-section container">
            <h2 class="section-title">
                <span class="bengali">শ্রীকৃষ্ণের শিক্ষা</span>
                <span class="english">Teachings of Sri Krishna</span>
            </h2>
            
            <div class="content-text">
                <p class="bengali">
                    ভগবান শ্রীকৃষ্ণ তাঁর জীবন ও কর্মের মাধ্যমে আমাদের অনেক মূল্যবান শিক্ষা দিয়েছেন। 
                    ভগবদ গীতায় তিনি অর্জুনকে যে উপদেশ দিয়েছেন, তা আজও আমাদের জীবনের পথপ্রদর্শক।
                </p>
                <p class="english">
                    Lord Sri Krishna has given us many valuable teachings through his life and works. 
                    The advice he gave to Arjuna in the Bhagavad Gita still guides our lives today.
                </p>
            </div>

            <blockquote class="krishna-quote">
                <p class="bengali">কর্মণ্যেবাধিকারস্তে মা ফলেষু কদাচন।
                মা কর্মফলহেতুর্ভূর্মা তে সঙ্গোঽস্ত্বকর্মণি।।</p>
                <p class="english">You have a right to perform your prescribed duty, but you are not entitled to the fruits of action. 
                Never consider yourself the cause of the results of your activities, and never be attached to not doing your duty.</p>
                <cite>- ভগবদ গীতা ২.৪৭ (Bhagavad Gita 2.47)</cite>
            </blockquote>

            <ul class="feature-list">
                <li>
                    <span class="bengali">নিষ্কাম কর্ম - ফলের আশা ছাড়া কাজ করা</span>
                    <span class="english">Nishkam Karma - Working without expectation of results</span>
                </li>
                <li>
                    <span class="bengali">ধর্ম পালন - সর্বদা সত্য ও ন্যায়ের পথে চলা</span>
                    <span class="english">Following Dharma - Always walking on the path of truth and justice</span>
                </li>
                <li>
                    <span class="bengali">ভক্তি যোগ - ভগবানের প্রতি একনিষ্ঠ ভক্তি</span>
                    <span class="english">Bhakti Yoga - Devoted devotion to the Lord</span>
                </li>
                <li>
                    <span class="bengali">সবার সাথে প্রেম - সকল জীবের প্রতি করুণা</span>
                    <span class="english">Love for All - Compassion for all living beings</span>
                </li>
            </ul>
            
            <div class="content-text">
                <p class="bengali">
                    আজকের এই পবিত্র দিনে আমরা শ্রীকৃষ্ণের আদর্শ অনুসরণ করে আমাদের জীবনকে আরও সুন্দর ও অর্থবহ করে তোলার প্রতিজ্ঞা করি।
                </p>
                <p class="english">
                    On this sacred day, we pledge to follow Sri Krishna's ideals and make our lives more beautiful and meaningful.
                </p>
            </div>
        </section>

        <!-- Final Blessing Section -->
        <section class="content-section container">
            <h2 class="section-title">
                <span class="bengali">আশীর্বাদ বার্তা</span>
                <span class="english">Blessing Message</span>
            </h2>
            
            <div class="content-text" style="text-align: center; font-size: 1.2rem;">
                <p class="bengali" style="margin-bottom: 1rem; color: #1E3A8A; font-weight: 600;">
                    হে ভগবান কৃষ্ণ, তুমি আমাদের সকলের মঙ্গল করো।<br>
                    তোমার কৃপায় আমরা যেন সঠিক পথে চলতে পারি।<br>
                    সকলের জীবনে শান্তি, সমৃদ্ধি ও আনন্দ আসুক।
                </p>
                <p class="english" style="color: #6B7280;">
                    O Lord Krishna, bless us all.<br>
                    By your grace, may we walk on the right path.<br>
                    May peace, prosperity and happiness come to everyone's life.
                </p>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <div style="font-size: 2rem; color: #F59E0B; margin-bottom: 1rem;">
                    🕉️ হরে কৃষ্ণ হরে কৃষ্ণ কৃষ্ণ কৃষ্ণ হরে হরে 🕉️<br>
                    🕉️ হরে রাম হরে রাম রাম রাম হরে হরে 🕉️
                </div>
                <div style="font-size: 1.5rem; color: #1E3A8A; font-weight: 600;">
                    শুভ জন্মাষ্টমী ২০২৫! 🎉<br>
                    Happy Janmashtami 2025! 🎉
                </div>
            </div>
        </section>

<?php
// Include footer
include 'components/footer.php';
?>