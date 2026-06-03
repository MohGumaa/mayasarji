// Run before DOMContentLoaded to avoid flash
(function () {
  if (window.scrollY > 40) {
    document.getElementById('site-header')?.classList.add('header-scrolled');
  }
})();

document.addEventListener('DOMContentLoaded', () => {
  const html        = document.documentElement;
  const header      = document.getElementById('site-header');
  const nav         = document.getElementById('site-navigation');
  const hamburger   = document.getElementById('hamburger');

  // HERO SLIDES
  // const heroSlides = [
  //   {
  //     image: "/hero-voice-artist.webp",
  //     label: "Voice Artist"
  //   },
  //   {
  //     image: "/speaking-event.webp",
  //     label: "Media Personality"
  //   },
  //   {
  //     image: "/coaching-session.webp",
  //     label: "Communication Coach"
  //   },
  //   {
  //     image: "/podcast-studio.webp",
  //     label: "Podcast Producer"
  //   }
  // ];
  // let currentSlide = 0;
  // const slideLabel = document.getElementById("slideLabel");
  
  // heroSlides.forEach((slide, index) => {

  // })

  // BRAND MARQUEE - ONLY WHERE ELEMENTS EXIST
  // ============================================
  const row1El = document.getElementById('row1');
  const row2El = document.getElementById('row2');

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

  // --- Scroll: glass effect (independent of menu state) ---
  const onScroll = () => {
    header.classList.toggle('header-scrolled', window.scrollY > 40);
  };

  // Check initial scroll position on page load and on scroll
  onScroll(); 
  window.addEventListener('scroll', onScroll, { passive: true });

  // --- Menu open/close ---
  const isOpen = () => hamburger.getAttribute('aria-expanded') === 'true';

  const openMenu = () => {
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.classList.add('nav-open');
    nav.classList.remove('max-lg:-translate-x-full');
    html.classList.add('overflow-hidden');
    header.classList.add('header-scrolled');
  };

  const closeMenu = () => {
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.classList.remove('nav-open');
    nav.classList.add('max-lg:-translate-x-full');
    html.classList.remove('overflow-hidden');
    if (window.scrollY <= 40) {
      header.classList.remove('header-scrolled');
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
  
  document.querySelectorAll('.ms-reveal').forEach(el => observer.observe(el));

  function brandCard(brand) {    
    const iconPath = `${THEME_CONFIG.assetsUrl}/assets/icon/${brand.icon}.webp`;

    return `<div class="shrink-0 bg-white/3 border border-white/8 rounded-xl px-8 py-4 flex items-center justify-center min-w-36 sm:min-w-40 md:min-w-50 hover:border-sky-400/15 hover:bg-white/6 transition-all duration-300 group/item cursor-default">
      <img src="${iconPath}" alt="${brand.name}" class="h-6 sm:h-8 w-auto object-contain" loading="lazy" />
    </div>`;
  }

  function buildRow(el, brands) {
    if (!el) return; // Safety check
    // 4× duplicate for seamless infinite scroll
    const html = [...brands, ...brands, ...brands, ...brands].map(brandCard).join('');

    // Use innerHTML instead of outerHTML
    el.outerHTML = html;
  }

  // Build rows only if elements exist
  if (row1El) {
    console.log("Row1")
    buildRow(row1El, row1Brands);
  }

  if (row2El) {
    console.log("Row2")
    buildRow(row2El, row2Brands);
  }

});