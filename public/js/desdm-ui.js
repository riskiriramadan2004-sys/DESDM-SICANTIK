(() => {
  const navToggle = document.querySelector('[data-nav-toggle]');
  const navMenu = document.querySelector('[data-nav-menu]');
  if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
      const open = navMenu.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', String(open));
    });
    navMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      navMenu.classList.remove('is-open'); navToggle.setAttribute('aria-expanded', 'false');
    }));
  }
  const passwordToggle = document.querySelector('[data-password-toggle]');
  const password = document.querySelector('#password');
  if (passwordToggle && password) passwordToggle.addEventListener('click', () => {
    const show = password.type === 'password'; password.type = show ? 'text' : 'password'; passwordToggle.textContent = show ? 'Sembunyikan' : 'Lihat'; passwordToggle.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
  });
  const sidebarToggle = document.querySelector('[data-sidebar-toggle]');
  const sidebar = document.querySelector('[data-admin-sidebar]');
  if (sidebarToggle && sidebar) sidebarToggle.addEventListener('click', () => sidebar.classList.toggle('is-open'));
  const hero = document.querySelector('[data-hero-photo]');
  if (hero && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    let ticking = false;
    const updateBlur = () => {
      const max = Math.max(1, window.innerHeight * 0.9);
      const progress = Math.min(1, Math.max(0, window.scrollY / max));
      hero.style.setProperty('--hero-blur', `${(progress * 10).toFixed(1)}px`);
      ticking = false;
    };
    window.addEventListener('scroll', () => { if (!ticking) { window.requestAnimationFrame(updateBlur); ticking = true; } }, { passive: true });
    updateBlur();
  }
    // Slideshow foto hero DESDM-SICANTIK
  const heroSlides = document.querySelectorAll('.hero-slide');

  if (
    heroSlides.length > 1 &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches
  ) {
    let currentSlide = 0;

    window.setInterval(() => {
      heroSlides[currentSlide].classList.remove('active');

      currentSlide = (currentSlide + 1) % heroSlides.length;

      heroSlides[currentSlide].classList.add('active');
    }, 5000);
  }

  // Efek blur pada foto hero saat halaman di-scroll
  const heroSection = document.querySelector('.hero-section');

  if (
    heroSection &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches
  ) {
    let ticking = false;

    const updateHeroBlur = () => {
      const rect = heroSection.getBoundingClientRect();
      const progress = Math.min(
        1,
        Math.max(0, -rect.top / Math.max(1, heroSection.offsetHeight))
      );

      heroSlides.forEach(slide => {
        slide.style.setProperty(
          '--hero-blur',
          `${(progress * 10).toFixed(1)}px`
        );
      });

      ticking = false;
    };

    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(updateHeroBlur);
        ticking = true;
      }
    }, { passive: true });

    updateHeroBlur();
  }
})();
