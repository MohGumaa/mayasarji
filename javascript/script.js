document.addEventListener('DOMContentLoaded', () => {
  const html        = document.documentElement;
  const header      = document.getElementById('site-header');
  const nav         = document.getElementById('site-navigation');
  const hamburger   = document.getElementById('hamburger');

  // Brand marquee
  const row1Brands = ["L'Oreal","Nestlé","Emirates Airline","Dubai Tourism","Pampers","Ferrero","Hermès","Mercedes-Benz"];
  const row2Brands = ["OSN","LUX","P&G","Unilever","Cartier","Visa","Mastercard","Samsung"];

  function brandCard(name) {
    return `<div class="shrink-0 bg-white/3 border border-white/8 rounded-xl px-8 py-4 flex items-center justify-center min-w-40 md:min-w-50 hover:border-gold/40 hover:bg-white/6 transition-all duration-300 group/item cursor-default"><span class="font-rajdhani text-[0.88rem] font-medium text-white/40 group-hover/item:text-gold transition-colors duration-300 whitespace-nowrap tracking-wide">${name}</span></div>`;
  }

  function buildRow(id, brands) {
    const el = document.getElementById(id);
    // 4× duplicate for seamless infinite scroll
    const html = [...brands,...brands,...brands,...brands].map(brandCard).join('');
    el.outerHTML = html;
  }

  buildRow('row1', row1Brands);
    buildRow('row2', row2Brands);

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

   // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});