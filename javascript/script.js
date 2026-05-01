document.addEventListener('DOMContentLoaded', () => {
  const html        = document.documentElement;
  const header      = document.getElementById('site-header');
  const nav         = document.getElementById('site-navigation');
  const hamburger   = document.getElementById('hamburger');

  // --- Scroll: glass effect (independent of menu state) ---
  const onScroll = () => {
    header.classList.toggle('header-scrolled', window.scrollY > 40);
  };
  window.addEventListener('scroll', onScroll, { passive: true });

  // --- Menu open/close ---
  const isOpen = () => hamburger.getAttribute('aria-expanded') === 'true';

  const openMenu = () => {
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.classList.add('nav-open');
    nav.classList.remove('max-lg:-translate-x-full');
    html.classList.add('overflow-hidden');
    header.classList.add('header-scrolled');           // always add on open
  };

  const closeMenu = () => {
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.classList.remove('nav-open');
    nav.classList.add('max-lg:-translate-x-full');
    html.classList.remove('overflow-hidden');
    if (window.scrollY <= 40) {
      header.classList.remove('header-scrolled');      // only remove if scroll hasn't earned it
    }
  };

  hamburger.addEventListener('click', () => (isOpen() ? closeMenu() : openMenu()));

  // Close on outside click
  document.addEventListener('click', (e) => {
    if (isOpen() && !nav.contains(e.target) && !hamburger.contains(e.target)) {
      closeMenu();
    }
  });

  // Close when resizing to desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024 && isOpen()) closeMenu();
  }, { passive: true });
});