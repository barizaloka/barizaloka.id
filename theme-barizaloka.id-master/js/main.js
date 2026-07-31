document.addEventListener('DOMContentLoaded', function () {
  // Navbar scroll effect
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', function () {
    header.classList.toggle('scrolled', window.scrollY > 30);
  });

  // Mobile toggle
  const toggle = document.querySelector('.navbar-toggle');
  const nav = document.querySelector('.navbar-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('open');
      toggle.classList.toggle('active');
    });
    // Close on direct link click (not dropdown trigger)
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
        toggle.classList.remove('active');
      });
    });
  }

  // Dropdown menus — click to open/close
  const dropdowns = document.querySelectorAll('.nav-dropdown');
  dropdowns.forEach(function (dropdown) {
    const trigger = dropdown.querySelector('.nav-dropdown-trigger');
    if (!trigger) return;

    trigger.addEventListener('click', function (e) {
      e.stopPropagation();
      const isOpen = dropdown.classList.toggle('open');
      trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      // Close other open dropdowns
      dropdowns.forEach(function (d) {
        if (d !== dropdown) {
          d.classList.remove('open');
          const t = d.querySelector('.nav-dropdown-trigger');
          if (t) t.setAttribute('aria-expanded', 'false');
        }
      });
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-dropdown')) {
      dropdowns.forEach(function (d) {
        d.classList.remove('open');
        const t = d.querySelector('.nav-dropdown-trigger');
        if (t) t.setAttribute('aria-expanded', 'false');
      });
    }
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  // Hero title rotation
  const heroTitle = document.getElementById('hero-rotating-title');
  const heroDots = document.querySelectorAll('.hero-dot');
  if (heroTitle) {
    const heroTexts = [
      'Menghubungkan Komunitas,<br><span>Membangun Solusi</span>',
      'Layanan Digital,<br><span>Inovasi untuk Masa Depan</span>'
    ];
    let heroIdx = 0;

    function setActiveDot(idx) {
      heroDots.forEach(function (d, i) { d.classList.toggle('active', i === idx); });
    }

    setInterval(function () {
      heroTitle.style.opacity = '0';
      heroTitle.style.transform = 'translateY(-16px)';

      setTimeout(function () {
        heroIdx = (heroIdx + 1) % heroTexts.length;
        heroTitle.innerHTML = heroTexts[heroIdx];
        setActiveDot(heroIdx);

        heroTitle.style.transition = 'none';
        heroTitle.style.opacity = '0';
        heroTitle.style.transform = 'translateY(16px)';
        heroTitle.offsetHeight; // force reflow

        heroTitle.style.transition = 'opacity .55s cubic-bezier(.4,0,.2,1), transform .55s cubic-bezier(.4,0,.2,1)';
        heroTitle.style.opacity = '1';
        heroTitle.style.transform = 'translateY(0)';
      }, 480);
    }, 3000);
  }

  // Fade-in on scroll (IntersectionObserver)
  const fadeEls = document.querySelectorAll('.komunitas-card, .nilai-item, .mitra-badge, .stat-item');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    fadeEls.forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity .5s ease, transform .5s ease';
      observer.observe(el);
    });
  }
});
