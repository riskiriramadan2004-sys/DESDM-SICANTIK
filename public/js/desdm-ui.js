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
})();
