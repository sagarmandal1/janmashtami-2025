<?php
// Include header component
include 'components/header.php';
?>

<!-- Main Content -->
<main class="main-content">
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">জন্মাষ্টমী ২০২৫</h1>
            <p class="hero-subtitle">শ্রীকৃষ্ণের পবিত্র জন্মদিন</p>
            
            <div class="hero-greeting">
                <div class="greeting-bengali"><?php echo $janmashtamiGreeting['bengali']; ?></div>
                <div class="greeting-english"><?php echo $janmashtamiGreeting['english']; ?></div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Significance Section -->
        <section id="significance" class="content-section">
            <h2 class="section-title">জন্মাষ্টমীর তাৎপর্য | Significance of Janmashtami</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <i class="fas fa-star-and-crescent card-icon"></i>
                    <h3 class="card-title">শ্রী কৃষ্ণের জন্ম</h3>
                    <div class="card-content">
                        <p>শ্রী কৃষ্ণ মথুরার কারাগারে রাজা কংসের হাত থেকে পৃথিবীকে রক্ষা করার জন্য জন্মগ্রহণ করেন। তিনি বিষ্ণুর অষ্টম অবতার হিসেবে পরিচিত।</p>
                        <p><strong>Birth of Lord Krishna:</strong> Krishna was born in a prison cell in Mathura to save the earth from the tyranny of King Kansa. He is the eighth avatar of Lord Vishnu.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-om card-icon"></i>
                    <h3 class="card-title">আধ্যাত্মিক তাৎপর্য</h3>
                    <div class="card-content">
                        <p>জন্মাষ্টমী আমাদের অন্তরের অন্ধকার দূর করে আলোর পথ দেখায়। এটি ধর্মের জয় এবং অধর্মের পরাজয়ের প্রতীক।</p>
                        <p><strong>Spiritual Significance:</strong> Janmashtami removes the darkness from our hearts and shows us the path of light. It symbolizes the victory of dharma over adharma.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-heart card-icon"></i>
                    <h3 class="card-title">ভক্তি ও প্রেম</h3>
                    <div class="card-content">
                        <p>কৃষ্ণ প্রেমের দেবতা। তিনি গোপীদের সাথে রাসলীলা করে প্রেমের মাহাত্ম্য প্রকাশ করেছেন। তাঁর ভক্তি মানুষের হৃদয়কে পবিত্র করে।</p>
                        <p><strong>Devotion & Love:</strong> Krishna is the deity of love. His divine play (Leela) with the Gopis represents the glory of pure love and devotion.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Traditions Section -->
        <section id="traditions" class="content-section">
            <h2 class="section-title">ঐতিহ্যবাহী আচার-অনুষ্ঠান | Traditional Celebrations</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <i class="fas fa-clock card-icon"></i>
                    <h3 class="card-title">অর্ধরাত্রি উৎসব</h3>
                    <div class="card-content">
                        <p>কৃষ্ণ মধ্যরাত্রে জন্মগ্রহণ করেছিলেন, তাই এই সময়ে বিশেষ পূজা ও আরতি করা হয়। ভক্তরা রাত জেগে কীর্তন ও ভজন করেন।</p>
                        <p><strong>Midnight Celebration:</strong> Krishna was born at midnight, so special prayers and aarti are performed at this time. Devotees stay awake singing bhajans and kirtans.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-baby card-icon"></i>
                    <h3 class="card-title">কৃষ্ণের দোলনা</h3>
                    <div class="card-content">
                        <p>শিশু কৃষ্ণের মূর্তি সুন্দর দোলনায় রাখা হয় এবং ভক্তরা তাঁকে দোলা দিয়ে স্তুতি করেন। এটি মাতৃত্বের ভাবনা জাগায়।</p>
                        <p><strong>Krishna's Cradle:</strong> Baby Krishna's idol is placed in a beautiful cradle and devotees rock it while singing lullabies, evoking maternal feelings.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-utensils card-icon"></i>
                    <h3 class="card-title">উপবাস ও ভোগ</h3>
                    <div class="card-content">
                        <p>ভক্তরা সারাদিন উপবাস রেখে মধ্যরাত্রির পর প্রসাদ গ্রহণ করেন। বিশেষ খাবার যেমন পায়েস, মাখন, মিষ্টি প্রস্তুত করা হয়।</p>
                        <p><strong>Fasting & Prasad:</strong> Devotees fast all day and break their fast after midnight with prasad. Special dishes like payesh, butter, and sweets are prepared.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-users card-icon"></i>
                    <h3 class="card-title">দহি হাণ্ডি</h3>
                    <div class="card-content">
                        <p>মহারাষ্ট্র ও গুজরাটে দহি হাণ্ডি প্রথা পালন করা হয়। এতে উঁচুতে টাঙানো মাটির পাত্র ভেঙে মাখন বের করা হয়।</p>
                        <p><strong>Dahi Handi:</strong> In Maharashtra and Gujarat, the tradition of breaking earthen pots filled with curd and butter hung high up is celebrated.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quotes Section -->
        <section id="quotes" class="content-section">
            <h2 class="section-title">পবিত্র শ্লোক ও বাণী | Sacred Verses & Teachings</h2>
            
            <div class="cards-grid">
                <?php foreach($krishnaQuotes as $quote): ?>
                <div class="card quote-card">
                    <i class="fas fa-quote-left card-icon"></i>
                    <div class="card-content">
                        <p class="quote-sanskrit"><?php echo $quote['sanskrit']; ?></p>
                        <p class="quote-bengali"><?php echo $quote['bengali']; ?></p>
                        <p class="quote-english"><?php echo $quote['english']; ?></p>
                        <p class="quote-source">- <?php echo $quote['source']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="card quote-card">
                    <i class="fas fa-praying-hands card-icon"></i>
                    <div class="card-content">
                        <p class="quote-sanskrit">हरे कृष्ण हरे कृष्ण कृष्ण कृष्ण हरे हरे</p>
                        <p class="quote-bengali">হরে কৃষ্ণ হরে কৃষ্ণ কৃষ্ণ কৃষ্ণ হরে হরে</p>
                        <p class="quote-english">Hare Krishna Hare Krishna Krishna Krishna Hare Hare</p>
                        <p class="quote-source">- মহামন্ত্র | Maha Mantra</p>
                    </div>
                </div>

                <div class="card quote-card">
                    <i class="fas fa-lotus card-icon"></i>
                    <div class="card-content">
                        <p class="quote-sanskrit">हरे राम हरे राम राम राम हरे हरे</p>
                        <p class="quote-bengali">হরে রাম হরে রাম রাম রাম হরে হরে</p>
                        <p class="quote-english">Hare Rama Hare Rama Rama Rama Hare Hare</p>
                        <p class="quote-source">- মহামন্ত্র | Maha Mantra</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Story Section -->
        <section class="content-section">
            <h2 class="section-title">কৃষ্ণের জন্ম কাহিনী | Birth Story of Krishna</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <i class="fas fa-crown card-icon"></i>
                    <h3 class="card-title">কংসের অত্যাচার</h3>
                    <div class="card-content">
                        <p>মথুরার রাজা কংস তার বোন দেবকীর অষ্টম সন্তান তাকে বধ করবে এই ভবিষ্যৎবাণী শুনে দেবকী ও বাসুদেবকে কারাগারে বন্দী করে রাখেন।</p>
                        <p><strong>Kansa's Tyranny:</strong> King Kansa imprisoned Devaki and Vasudeva after hearing the prophecy that her eighth child would kill him.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-baby card-icon"></i>
                    <h3 class="card-title">অলৌকিক জন্ম</h3>
                    <div class="card-content">
                        <p>কৃষ্ণ জন্মের সময় কারাগারের দরজা খুলে গেল, প্রহরীরা ঘুমিয়ে পড়ল। বাসুদেব কৃষ্ণকে গোকুলে নন্দের কাছে নিয়ে গেলেন।</p>
                        <p><strong>Miraculous Birth:</strong> When Krishna was born, the prison doors opened automatically, guards fell asleep, and Vasudeva carried him to Gokul to Nanda.</p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-water card-icon"></i>
                    <h3 class="card-title">যমুনা পারাপার</h3>
                    <div class="card-content">
                        <p>বাসুদেব যখন যমুনা নদী পার হচ্ছিলেন, শেষনাগ তার মাথার উপর ছাতার মতো হয়ে কৃষ্ণকে বৃষ্টি থেকে রক্ষা করল।</p>
                        <p><strong>Crossing Yamuna:</strong> When Vasudeva was crossing the Yamuna river, Shesha Naga protected baby Krishna from rain by forming an umbrella over him.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Animations Container -->
    <div class="animations">
        <div class="peacock-feathers"></div>
        <div class="confetti"></div>
    </div>
</main>

<?php
// Include footer component
include 'components/footer.php';
?>