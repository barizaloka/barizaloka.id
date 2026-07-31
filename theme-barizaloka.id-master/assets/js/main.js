/**
 * Barizaloka Theme - Main JavaScript
 * @package Barizaloka
 */

(function () {
    'use strict';

    // =============================================
    // MOBILE NAV TOGGLE
    // =============================================
    const navToggle = document.getElementById('bzk-nav-toggle');
    const nav = document.getElementById('bzk-nav');

    if (navToggle && nav) {
        navToggle.addEventListener('click', function () {
            const isOpen = nav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', isOpen);
            navToggle.textContent = isOpen ? '✕' : '☰';
        });

        // Tutup nav saat klik di luar
        document.addEventListener('click', function (e) {
            if (!nav.contains(e.target) && !navToggle.contains(e.target)) {
                nav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.textContent = '☰';
            }
        });
    }

    // =============================================
    // SMOOTH SCROLL untuk anchor links
    // =============================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerHeight = document.querySelector('.bzk-header') ?
                    document.querySelector('.bzk-header').offsetHeight : 0;
                const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                window.scrollTo({ top: top, behavior: 'smooth' });

                // Tutup mobile nav jika terbuka
                if (nav) {
                    nav.classList.remove('is-open');
                    if (navToggle) {
                        navToggle.setAttribute('aria-expanded', 'false');
                        navToggle.textContent = '☰';
                    }
                }
            }
        });
    });

    // =============================================
    // HEADER SCROLL EFFECT
    // =============================================
    const header = document.getElementById('bzk-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.25)';
            } else {
                header.style.boxShadow = 'none';
            }
        }, { passive: true });
    }

    // =============================================
    // INTERSECTION OBSERVER - Animasi masuk
    // =============================================
    if ('IntersectionObserver' in window) {
        const style = document.createElement('style');
        style.textContent = `
            .bzk-animate {
                opacity: 0;
                transform: translateY(24px);
                transition: opacity 0.5s ease, transform 0.5s ease;
            }
            .bzk-animate.is-visible {
                opacity: 1;
                transform: translateY(0);
            }
        `;
        document.head.appendChild(style);

        const animTargets = document.querySelectorAll(
            '.bzk-card, .bzk-nilai-card, .bzk-stat, .bzk-mitra__item'
        );

        animTargets.forEach(function (el, i) {
            el.classList.add('bzk-animate');
            el.style.transitionDelay = (i % 4) * 80 + 'ms';
        });

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        animTargets.forEach(function (el) {
            observer.observe(el);
        });
    }

    // =============================================
    // STATS COUNTER ANIMATION
    // =============================================
    function animateCounter(el, target, duration) {
        const isInfinity = target === Infinity;
        if (isInfinity) return;

        let start = 0;
        const step = target / (duration / 16);
        const plus = el.textContent.includes('+');

        const timer = setInterval(function () {
            start += step;
            if (start >= target) {
                el.textContent = target.toLocaleString() + (plus ? '+' : '');
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(start).toLocaleString() + (plus ? '+' : '');
            }
        }, 16);
    }

    if ('IntersectionObserver' in window) {
        const statsSection = document.querySelector('.bzk-stats');
        if (statsSection) {
            const statsObserver = new IntersectionObserver(function (entries) {
                if (entries[0].isIntersecting) {
                    document.querySelectorAll('.bzk-stat__num').forEach(function (el) {
                        const raw = el.textContent.trim();
                        if (raw === '∞') return;
                        const num = parseInt(raw.replace(/\D/g, ''), 10);
                        if (!isNaN(num)) animateCounter(el, num, 1200);
                    });
                    statsObserver.disconnect();
                }
            }, { threshold: 0.5 });
            statsObserver.observe(statsSection);
        }
    }

})();
