document.addEventListener('DOMContentLoaded', () => {
  const html        = document.documentElement;
  const header      = document.getElementById('site-header');
  const nav         = document.getElementById('site-navigation');
  const hamburger   = document.getElementById('hamburger');

  // Brand marquee with icons
  const row1Brands = [
    { name: "L'Oreal", icon: "icon-0" },
    { name: "Nestlé", icon: "icon-1" },
    { name: "Emirates Airline", icon: "icon-2" },
    { name: "Dubai Tourism", icon: "icon-3" },
    { name: "Pampers", icon: "icon-4" },
    { name: "Ferrero", icon: "icon-5" },
    { name: "Hermès", icon: "icon-6" },
    { name: "Mercedes-Benz", icon: "icon-7" }
  ];

  const row2Brands = [
    { name: "OSN", icon: "icon-8" },
    { name: "LUX", icon: "icon-9" },
    { name: "P&G", icon: "icon-10" },
    { name: "Unilever", icon: "icon-11" },
    { name: "Cartier", icon: "icon-12" },
    { name: "Visa", icon: "icon-13" },
    { name: "Mastercard", icon: "icon-14" },
    { name: "Samsung", icon: "icon-15" }
  ];

  function brandCard(brand) {    
    const iconPath = `${THEME_CONFIG.assetsUrl}/assets/icon/${brand.icon}.webp`;

    // invert brightness-0
    return `<div class="shrink-0 bg-white/3 border border-white/8 rounded-xl px-8 py-4 flex items-center justify-center min-w-32 sm:min-w-40 md:min-w-50 hover:border-sky-400/15 hover:bg-white/6 transition-all duration-300 group/item cursor-default">
      <img src="${iconPath}" alt="${brand.name}" class="h-6 sm:h-8 w-auto object-contain" loading="lazy" />
    </div>`;
  }

  function buildRow(id, brands) {
    const el = document.getElementById(id);
    // 4× duplicate for seamless infinite scroll
    const html = [...brands, ...brands, ...brands, ...brands].map(brandCard).join('');
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