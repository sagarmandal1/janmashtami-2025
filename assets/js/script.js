/**
 * Janmashtami 2025 - Interactive JavaScript
 * শুভ জন্মাষ্টমী ২০২৫
 */

(function() {
    'use strict';

    // DOM Elements
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const currentTimeElement = document.getElementById('current-time');
    const footerTimeElement = document.getElementById('footer-time');

    // ==================== INITIALIZATION ==================== 
    document.addEventListener('DOMContentLoaded', function() {
        initializeComponents();
        startTimeUpdate();
        initializeAnimations();
        initializeScrollEffects();
        initializeParticles();
        setupNavigationEvents();
        setupSmoothScrolling();
    });

    // ==================== NAVIGATION ==================== 
    function setupNavigationEvents() {
        // Mobile navigation toggle
        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                navToggle.classList.toggle('active');
            });
        }

        // Close mobile menu when clicking on links
        const navLinksItems = document.querySelectorAll('.nav-link');
        navLinksItems.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navLinks.contains(e.target)) {
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
            }
        });
    }

    // ==================== SMOOTH SCROLLING ==================== 
    function setupSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ==================== TIME UPDATE ==================== 
    function startTimeUpdate() {
        updateTime();
        setInterval(updateTime, 1000);
    }

    function updateTime() {
        const now = new Date();
        const options = {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true,
            timeZone: 'Asia/Dhaka'
        };
        
        const timeString = now.toLocaleTimeString('en-US', options);
        
        if (currentTimeElement) {
            currentTimeElement.textContent = timeString;
        }
        
        if (footerTimeElement) {
            footerTimeElement.textContent = timeString;
        }
    }

    // ==================== SCROLL EFFECTS ==================== 
    function initializeScrollEffects() {
        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        const elementsToObserve = document.querySelectorAll('.card, .content-section, .hero-section');
        elementsToObserve.forEach(element => {
            observer.observe(element);
        });

        // Header background opacity on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            const scrollY = window.scrollY;
            
            if (header) {
                const opacity = Math.min(0.95, 0.7 + (scrollY / 300) * 0.25);
                header.style.background = `rgba(30, 58, 138, ${opacity})`;
            }
        });
    }

    // ==================== PARTICLES ANIMATION ==================== 
    function initializeParticles() {
        createParticleSystem('.animations', 20);
        createParticleSystem('.footer-particles', 10);
    }

    function createParticleSystem(container, count) {
        const containerElement = document.querySelector(container);
        if (!containerElement) return;

        for (let i = 0; i < count; i++) {
            createParticle(containerElement, i);
        }
    }

    function createParticle(container, index) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random size between 2-8px
        const size = Math.random() * 6 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        
        // Random horizontal position
        particle.style.left = Math.random() * 100 + '%';
        
        // Random animation delay
        particle.style.animationDelay = Math.random() * 6 + 's';
        
        // Random animation duration
        particle.style.animationDuration = (Math.random() * 4 + 4) + 's';
        
        // Random opacity
        particle.style.opacity = Math.random() * 0.7 + 0.3;
        
        container.appendChild(particle);
    }

    // ==================== INTERACTIVE ANIMATIONS ==================== 
    function initializeAnimations() {
        // Lotus icon animation
        const lotusIcon = document.querySelector('.nav-brand i');
        if (lotusIcon) {
            lotusIcon.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2) rotate(360deg)';
                this.style.transition = 'all 0.6s ease';
            });
            
            lotusIcon.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        }

        // Card hover effects
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.2)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
            });
        });

        // Greeting animation
        const greetings = document.querySelectorAll('.greeting-bengali, .greeting-english');
        greetings.forEach((greeting, index) => {
            setTimeout(() => {
                greeting.style.opacity = '0';
                greeting.style.transform = 'translateY(20px)';
                greeting.style.transition = 'all 0.8s ease';
                
                setTimeout(() => {
                    greeting.style.opacity = '1';
                    greeting.style.transform = 'translateY(0)';
                }, 100);
            }, index * 500);
        });
    }

    // ==================== INITIALIZATION HELPER ==================== 
    function initializeComponents() {
        console.log('🕉️ শুভ জন্মাষ্টমী ২০২৫ - Website Initialized');
        console.log('🌟 Happy Janmashtami 2025 - Interactive features loaded');
        
        // Add loading animation
        document.body.classList.add('loaded');
        
        // Initialize tooltips for social links
        const socialLinks = document.querySelectorAll('.social-link');
        socialLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                const title = this.getAttribute('title');
                if (title) {
                    this.style.transform = 'translateY(-3px) scale(1.1)';
                }
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add click effects to cards
        const allCards = document.querySelectorAll('.card');
        allCards.forEach(card => {
            card.addEventListener('click', function() {
                this.style.animation = 'pulse 0.6s ease';
                setTimeout(() => {
                    this.style.animation = '';
                }, 600);
            });
        });
    }

    // ==================== UTILITY FUNCTIONS ==================== 
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

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
        };
    }

    // ==================== KEYBOARD NAVIGATION ==================== 
    document.addEventListener('keydown', function(e) {
        // ESC key to close mobile menu
        if (e.key === 'Escape') {
            if (navLinks && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                navToggle.classList.remove('active');
            }
        }
        
        // Space bar for scroll down
        if (e.key === ' ' && !e.target.matches('input, textarea')) {
            e.preventDefault();
            window.scrollBy({
                top: window.innerHeight * 0.8,
                behavior: 'smooth'
            });
        }
    });

    // ==================== PERFORMANCE OPTIMIZATION ==================== 
    // Optimize scroll events with throttling
    const optimizedScrollHandler = throttle(function() {
        // Header transparency effect
        const header = document.querySelector('.header');
        const scrollY = window.scrollY;
        
        if (header && scrollY > 100) {
            header.classList.add('scrolled');
        } else if (header) {
            header.classList.remove('scrolled');
        }
    }, 16);

    window.addEventListener('scroll', optimizedScrollHandler);

    // ==================== ERROR HANDLING ==================== 
    window.addEventListener('error', function(e) {
        console.error('JavaScript Error:', e.error);
    });

    // ==================== ACCESSIBILITY ENHANCEMENTS ==================== 
    // Focus management
    function manageFocus() {
        const focusableElements = document.querySelectorAll(
            'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])'
        );

        focusableElements.forEach(element => {
            element.addEventListener('focus', function() {
                this.style.outline = '2px solid #FCD34D';
                this.style.outlineOffset = '2px';
            });

            element.addEventListener('blur', function() {
                this.style.outline = '';
                this.style.outlineOffset = '';
            });
        });
    }

    // Initialize accessibility features
    manageFocus();

    // ==================== SHARE FUNCTIONALITY ==================== 
    function setupSocialSharing() {
        const shareButtons = document.querySelectorAll('.social-link');
        
        shareButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const platform = this.href || this.getAttribute('data-platform');
                const title = 'শুভ জন্মাষ্টমী ২০২৫ | Happy Janmashtami 2025';
                const url = window.location.href;
                const text = 'হরে কৃষ্ণ! জন্মাষ্টমী ২০২৫ এর শুভেচ্ছা | Celebrating Janmashtami 2025 with devotion and joy!';
                
                if (platform.includes('facebook')) {
                    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
                } else if (platform.includes('twitter')) {
                    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank');
                } else if (platform.includes('whatsapp')) {
                    window.open(`https://api.whatsapp.com/send?text=${text} ${url}`, '_blank');
                } else if (platform.includes('mailto')) {
                    window.location.href = `mailto:?subject=${title}&body=${text} ${url}`;
                }
            });
        });
    }

    // Initialize social sharing
    setupSocialSharing();

    // ==================== CSS ANIMATION HELPERS ==================== 
    // Add CSS for additional animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .loaded {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .header.scrolled {
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
    `;
    document.head.appendChild(style);

    // ==================== EXPORT FOR TESTING ==================== 
    window.JanmashtamiApp = {
        updateTime,
        initializeParticles,
        setupSmoothScrolling,
        debounce,
        throttle
    };

})();