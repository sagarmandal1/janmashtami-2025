    </main>

    <footer class="main-footer" role="contentinfo">
        <div class="footer-background"></div>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>শ্রীকৃষ্ণের শিক্ষা <span>Krishna's Teachings</span></h3>
                    <blockquote class="krishna-quote">
                        <p class="bengali">"যদা যদা হি ধর্মস্য গ্লানির্ভবতি ভারত"</p>
                        <p class="english">"Whenever righteousness declines and unrighteousness increases"</p>
                        <cite>- ভগবদ গীতা ৪.৭ (Bhagavad Gita 4.7)</cite>
                    </blockquote>
                </div>
                
                <div class="footer-section">
                    <h3>উৎসবের শুভেচ্ছা <span>Festival Wishes</span></h3>
                    <p class="blessing-text">
                        <span class="bengali"><?php echo $bengali_greetings['blessing']; ?></span>
                        <span class="english"><?php echo $english_greetings['blessing']; ?></span>
                    </p>
                    <div class="social-sharing">
                        <p>শেয়ার করুন Share:</p>
                        <button onclick="shareOnFacebook()" class="share-btn facebook">📘 Facebook</button>
                        <button onclick="shareOnTwitter()" class="share-btn twitter">🐦 Twitter</button>
                        <button onclick="shareOnWhatsApp()" class="share-btn whatsapp">💚 WhatsApp</button>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>যোগাযোগ <span>Contact</span></h3>
                    <div class="contact-info">
                        <p>📧 janmashtami2025@example.com</p>
                        <p>📞 +৮৮০ ১২৩৪৫৬১৮৯০</p>
                        <p>🌐 www.janmashtami2025.com</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    <p>
                        <span class="bengali">© <?php echo date('Y'); ?> জন্মাষ্টমী ২০২৫ | সমস্ত অধিকার সংরক্ষিত</span>
                        <span class="english">© <?php echo date('Y'); ?> Janmashtami 2025 | All Rights Reserved</span>
                    </p>
                </div>
                
                <div class="developer-credit">
                    <p>
                        <span class="bengali">💻 উন্নয়ন: জন্মাষ্টমী ২০২৫ টিম</span>
                        <span class="english">💻 Developed by: Janmashtami 2025 Team</span>
                    </p>
                    <p class="tech-stack">
                        <span>⚡ PHP • HTML5 • CSS3 • JavaScript</span>
                    </p>
                </div>
            </div>
            
            <div class="footer-decorations">
                <div class="decoration-line"></div>
                <div class="krishna-footer-symbol">
                    <span>🕉️</span>
                    <span>হরে কৃষ্ণ</span>
                    <span>🕉️</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <span>⬆️</span>
        <span class="btn-text">উপরে যান</span>
    </button>

    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
    
    <!-- Performance Monitoring -->
    <script>
        window.addEventListener('load', function() {
            const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
            console.log('Page load time:', loadTime + 'ms');
            
            // Hide page loader
            const loader = document.getElementById('pageLoader');
            if (loader) {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        });
    </script>
</body>
</html>