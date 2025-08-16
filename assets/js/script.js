/**
 * শুভ জন্মাষ্টমী ২০২৫ - Interactive JavaScript
 * Happy Janmashtami 2025 - Interactive JavaScript
 * Enhanced with smooth animations and dynamic content
 */

// Global variables
let isScrolling = false;
let ticking = false;

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('🕉️ Janmashtami 2025 website initialized');
    
    // Initialize all features
    initScrollToTop();
    initSmoothScrolling();
    initScrollAnimations();
    initDynamicTimeUpdate();
    initSocialSharing();
    initFloatingElements();
    initKeyboardNavigation();
    initPerformanceOptimizations();
    
    // Add fade-in animations to sections
    animateOnScroll();
    
    // Start the experience
    setTimeout(() => {
        hidePageLoader();
    }, 1000);
});

/**
 * Hide page loader with smooth transition
 */
function hidePageLoader() {
    const loader = document.getElementById('pageLoader');
    if (loader) {
        loader.style.opacity = '0';
        loader.style.visibility = 'hidden';
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500);
    }
}

/**
 * Initialize scroll to top functionality
 */
function initScrollToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    if (!backToTopBtn) return;

    // Show/hide button based on scroll position
    function toggleBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    }

    // Smooth scroll to top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Event listeners
    window.addEventListener('scroll', throttle(toggleBackToTop, 100));
    backToTopBtn.addEventListener('click', scrollToTop);
}

/**
 * Initialize smooth scrolling for navigation links
 */
function initSmoothScrolling() {
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.main-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update active navigation
                updateActiveNavigation(this);
            }
        });
    });
}

/**
 * Update active navigation state
 */
function updateActiveNavigation(activeLink) {
    const allNavLinks = document.querySelectorAll('.nav-link');
    allNavLinks.forEach(link => link.classList.remove('active'));
    activeLink.classList.add('active');
}

/**
 * Initialize scroll-triggered animations
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe content sections
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
        observer.observe(section);
    });

    // Observe cards
    const cards = document.querySelectorAll('.info-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            observer.observe(card);
        }, index * 100);
    });
}

/**
 * Animate elements on scroll
 */
function animateOnScroll() {
    const elements = document.querySelectorAll('.content-section, .info-card');
    
    elements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.6s ease-out';
        
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, index * 150 + 500);
    });
}

/**
 * Dynamic time update
 */
function initDynamicTimeUpdate() {
    function updateTime() {
        const bengaliDate = document.querySelector('.bengali-date');
        const englishDate = document.querySelector('.english-date');
        
        if (bengaliDate && englishDate) {
            const now = new Date();
            
            // Bengali months
            const bengaliMonths = [
                'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন',
                'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'
            ];
            
            // Update Bengali date
            const bengaliMonth = bengaliMonths[now.getMonth()];
            const bengaliTime = `${now.getDate()} ${bengaliMonth} ${now.getFullYear()} - ${now.toLocaleTimeString('bn-BD')}`;
            bengaliDate.textContent = bengaliTime;
            
            // Update English date
            const englishTime = now.toLocaleString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            englishDate.textContent = englishTime;
        }
    }

    // Update immediately and then every second
    updateTime();
    setInterval(updateTime, 1000);
}

/**
 * Initialize social sharing functionality
 */
function initSocialSharing() {
    // Facebook sharing
    window.shareOnFacebook = function() {
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent('শুভ জন্মাষ্টমী ২০২৫! Happy Janmashtami 2025!');
        const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${title}`;
        
        openShareWindow(shareUrl, 'Facebook');
    };

    // Twitter sharing
    window.shareOnTwitter = function() {
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent('শুভ জন্মাষ্টমী ২০২৫! Happy Janmashtami 2025! 🕉️ #Janmashtami2025 #HareKrishna');
        const shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
        
        openShareWindow(shareUrl, 'Twitter');
    };

    // WhatsApp sharing
    window.shareOnWhatsApp = function() {
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent('শুভ জন্মাষ্টমী ২০২৫! Happy Janmashtami 2025! 🕉️\n\n');
        const shareUrl = `https://wa.me/?text=${title}${url}`;
        
        // For mobile, open WhatsApp directly
        if (isMobile()) {
            window.location.href = shareUrl;
        } else {
            openShareWindow(shareUrl, 'WhatsApp');
        }
    };
}

/**
 * Open share window
 */
function openShareWindow(url, platform) {
    const width = 600;
    const height = 400;
    const left = (window.innerWidth - width) / 2;
    const top = (window.innerHeight - height) / 2;
    
    window.open(
        url,
        `share${platform}`,
        `width=${width},height=${height},left=${left},top=${top},scrollbars=yes,resizable=yes`
    );
}

/**
 * Initialize floating elements animation
 */
function initFloatingElements() {
    const floatingElements = document.querySelectorAll('.floating-peacock-feather, .floating-lotus, .floating-om');
    
    floatingElements.forEach((element, index) => {
        // Add content to floating elements
        const symbols = ['🦚', '🪷', '🕉️'];
        element.textContent = symbols[index % symbols.length];
        
        // Random movement
        setInterval(() => {
            const randomX = Math.random() * 20 - 10;
            const randomY = Math.random() * 20 - 10;
            element.style.transform = `translate(${randomX}px, ${randomY}px)`;
        }, 3000 + index * 1000);
    });
}

/**
 * Initialize keyboard navigation
 */
function initKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        switch(e.key) {
            case 'Home':
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
                break;
            case 'End':
                e.preventDefault();
                window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
                break;
            case 'ArrowUp':
                if (e.ctrlKey) {
                    e.preventDefault();
                    window.scrollBy({ top: -100, behavior: 'smooth' });
                }
                break;
            case 'ArrowDown':
                if (e.ctrlKey) {
                    e.preventDefault();
                    window.scrollBy({ top: 100, behavior: 'smooth' });
                }
                break;
        }
    });
}

/**
 * Performance optimizations
 */
function initPerformanceOptimizations() {
    // Lazy loading for images (if any are added later)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Preload critical resources
    preloadCriticalResources();
    
    // Monitor performance
    monitorPerformance();
}

/**
 * Preload critical resources
 */
function preloadCriticalResources() {
    // Preload fonts
    const fontUrls = [
        'https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@400;600;700&display=swap',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap'
    ];

    fontUrls.forEach(url => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.as = 'style';
        link.href = url;
        document.head.appendChild(link);
    });
}

/**
 * Monitor website performance
 */
function monitorPerformance() {
    if ('performance' in window) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                const loadTime = perfData.loadEventEnd - perfData.loadEventStart;
                
                console.log('🚀 Performance Metrics:');
                console.log(`Load Time: ${loadTime}ms`);
                console.log(`DOM Content Loaded: ${perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart}ms`);
                console.log(`Time to First Byte: ${perfData.responseStart - perfData.requestStart}ms`);
                
                // Send to analytics if needed
                if (loadTime > 3000) {
                    console.warn('⚠️ Slow loading detected. Consider optimization.');
                }
            }, 100);
        });
    }
}

/**
 * Create particle effects (optional enhancement)
 */
function createParticleEffect() {
    const particles = [];
    const particleCount = 50;
    
    function Particle(x, y) {
        this.x = x;
        this.y = y;
        this.vx = Math.random() * 2 - 1;
        this.vy = Math.random() * 2 - 1;
        this.life = Math.random() * 100 + 100;
    }
    
    function updateParticles() {
        particles.forEach((particle, index) => {
            particle.x += particle.vx;
            particle.y += particle.vy;
            particle.life--;
            
            if (particle.life <= 0) {
                particles.splice(index, 1);
            }
        });
        
        // Add new particles
        if (particles.length < particleCount && Math.random() < 0.1) {
            particles.push(new Particle(
                Math.random() * window.innerWidth,
                Math.random() * window.innerHeight
            ));
        }
        
        requestAnimationFrame(updateParticles);
    }
    
    // Start particle system (commented out by default for performance)
    // updateParticles();
}

/**
 * Utility Functions
 */

// Throttle function for performance
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// Debounce function for performance
function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction() {
        const context = this;
        const args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Check if device is mobile
function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// Get random number between min and max
function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Format number with Bengali numerals
function toBengaliNumber(num) {
    const bengaliNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return num.toString().replace(/[0-9]/g, (digit) => bengaliNumbers[parseInt(digit)]);
}

// Add smooth reveal animation to elements
function revealElement(element, delay = 0) {
    setTimeout(() => {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
    }, delay);
}

// Handle errors gracefully
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // Don't break the user experience, continue gracefully
});

// Handle unhandled promise rejections
window.addEventListener('unhandledrejection', function(e) {
    console.error('Unhandled Promise Rejection:', e.reason);
    // Prevent default browser handling
    e.preventDefault();
});

// Service Worker registration (for future PWA features)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        // Register service worker when available
        // navigator.serviceWorker.register('/sw.js');
    });
}

// Export functions for potential use by other scripts
window.JanmashtamiApp = {
    hidePageLoader,
    updateActiveNavigation,
    shareOnFacebook: window.shareOnFacebook,
    shareOnTwitter: window.shareOnTwitter,
    shareOnWhatsApp: window.shareOnWhatsApp,
    throttle,
    debounce,
    isMobile,
    toBengaliNumber,
    revealElement
};

// Add some festive console messages
console.log('%c🕉️ হরে কৃষ্ণ হরে কৃষ্ণ কৃষ্ণ কৃষ্ণ হরে হরে! 🕉️', 'color: #1E3A8A; font-size: 16px; font-weight: bold;');
console.log('%c🎉 শুভ জন্মাষ্টমী ২০২৫! Happy Janmashtami 2025! 🎉', 'color: #F59E0B; font-size: 14px; font-weight: bold;');
console.log('%c✨ Website loaded successfully with love and devotion ✨', 'color: #FCD34D; font-size: 12px;');

// Performance timing
console.log('⏱️ JavaScript initialization completed in:', performance.now().toFixed(2), 'ms');