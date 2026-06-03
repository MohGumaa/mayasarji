<?php
/**
 * Template part for displaying front page content
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$banner  = get_theme_file_uri( 'assets/images/banner-2.webp' );
$voice_section = get_theme_file_uri( 'assets/images/img-0.webp' );
?>
<!-- ══════ HERO ══════ -->
<section 
  id="hero" 
  class="film-grain shadow-hero w-full h-[80svh] min-h-150 overflow-hidden relative"
>
  <div class="container">
    Hero
  </div>
</section>

<!-- ══════ ABOUT ══════ -->
<section id="about" class="relative py-24 lg:py-32 overflow-hidden">
  <div class="absolute top-1/3 right-0 w-125 h-125 bg-sky-400/4 rounded-full blur-[150px] pointer-events-none ms-reveal ms-reveal-d2"></div>
  <div class="container">
    <div class="flex items-center gap-3 mb-20 ms-reveal">
      <div class="w-12 h-px bg-sky-400"></div>
      <span class="text-sky-400 text-xs font-semibold tracking-[0.3em] uppercase"><?php esc_html_e( 'About Maya', 'mayasarji' ); ?></span>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 mb-24">
      <div class="lg:col-span-5 lg:self-end ms-reveal ms-reveal-d1">
        <h2 
          class="font-heading text-5xl md:text-6xl xl:text-7xl font-bold leading-none tracking-tight text-foreground mb-8"
        >
          <?php esc_html_e( 'Crafting', 'mayasarji' ); ?><br><span class="text-gradient-accent"><?php esc_html_e( 'Voices', 'mayasarji' ); ?></span><br><?php esc_html_e( 'That Move', 'mayasarji' ); ?><br><?php esc_html_e( 'The World', 'mayasarji' ); ?>
        </h2>
        <div class="flex items-start gap-4 mt-10">
          <div class="w-px h-24 bg-linear-to-b from-sky-400/60 to-transparent mt-1 shrink-0"></div>
          <p class="text-foreground/60 text-sm leading-relaxed tracking-wide">
            <?php esc_html_e( 'Media personality, Voice artist, Communication coach,', 'mayasarji' ); ?><br><?php esc_html_e( 'Three identities, One mission.', 'mayasarji' ); ?>
          </p>
        </div>
      </div>
      <div class="lg:col-span-7 ms-reveal ms-reveal-d2">
        <div class="relative mb-8">
          <div class="aspect-16/10 overflow-hidden rounded-2xl">
            <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-5.webp" alt="Maya" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-linear-to-t from-background/60 to-transparent rounded-2xl"></div>
          </div>
          <div class="absolute bottom-6 left-6 rounded-xl px-4 py-3 bg-black/70 border border-white/6">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Dubai & International', 'mayasarji' ); ?></span>
          </div>
        </div>
        <div class="space-y-5">
          <p class="text-foreground/80 text-base leading-relaxed">
            <?php esc_html_e( 'With over 15 years of experience across broadcast media, commercial production, and executive coaching, Maya has become the defining voice for some of the world\'s most recognized brands. Her work spans continents, cultures, and industries yet every performance carries the same unmistakable quality presence.', 'mayasarji' ); ?>
          </p>
          <a 
            href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>"
            class="group flex items-center gap-2 text-sky-400 text-sm font-semibold tracking-widest uppercase mt-4 hover:gap-3 transition-all duration-300">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition-transform duration-300" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-24 py-12 border-t border-b border-white/6 ms-reveal ms-reveal-d3">
      <div class="flex flex-col items-center text-center gap-2">
        <span class="font-heading text-4xl md:text-5xl font-bold text-sky-400"><?php esc_html_e( '500+', 'mayasarji' ); ?></span>
        <span class="text-foreground/40 text-xs tracking-widest uppercase"><?php esc_html_e( 'Brands Voiced', 'mayasarji' ); ?></span>
      </div>
      <div class="flex flex-col items-center text-center gap-2">
        <span class="font-heading text-4xl md:text-5xl font-bold text-sky-400"><?php esc_html_e( '15+', 'mayasarji' ); ?></span>
        <span class="text-foreground/40 text-xs tracking-widest uppercase"><?php esc_html_e( 'Years in Broadcast', 'mayasarji' ); ?></span>
      </div>
      <div class="flex flex-col items-center text-center gap-2">
        <span class="font-heading text-4xl md:text-5xl font-bold text-sky-400"><?php esc_html_e( '200+', 'mayasarji' ); ?></span>
        <span class="text-foreground/40 text-xs tracking-widest uppercase"><?php esc_html_e( 'Clients Coached', 'mayasarji' ); ?></span>
      </div>
      <div class="flex flex-col items-center text-center gap-2">
        <span class="font-heading text-4xl md:text-5xl font-bold text-sky-400"><?php esc_html_e( '50+', 'mayasarji' ); ?></span>
        <span class="text-foreground/40 text-xs tracking-widest uppercase"><?php esc_html_e( 'Industry Awards', 'mayasarji' ); ?></span>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 overflow-hidden ms-reveal ms-reveal-d4">
      <div class="relative shrink-0 group overflow-hidden rounded-2xl">
        <div class="h-80">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/img-0.webp')); ?>" alt="Maya" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Studio Recording', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl">
        <div class="h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-6-1.webp" alt="Live Hosting" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Live Hosting', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl">
        <div class="h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-2.webp" alt="Coaching Sessions" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Coaching Sessions', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl">
        <div class="h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-9.webp" alt="Podcast Production" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Podcast Production', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl">
        <div class="h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-7-1.webp" alt="Work Voice" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Work Voice', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════ BRANDS ══════ -->
<section id="brands" class="bg-black/70 py-24 lg:py-32 overflow-hidden">
  <div class="container text-center mb-16 ms-reveal">
    <p class="section-label">
      <?php esc_html_e( 'trusted by', 'mayasarji' ); ?>
    </p>
    <h2 class="section-heading">
      <?php esc_html_e( 'brands', 'mayasarji' ); ?>
    </h2>
    <p class="section-sub-heading">
      <?php esc_html_e( 'Some of Maya\'s key global and regional clients', 'mayasarji' ); ?>
    </p>
  </div>

  <div class="space-y-3 ms-reveal ms-reveal-d1">
    
    <!-- Row 1: left -->
    <div class="relative flex overflow-hidden py-2 group">

      <!-- <div class="absolute left-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none"></div>
      <div class="absolute right-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none"></div> -->
      
      <div class="flex gap-4 animate-marquee animate-marquee-left">
        <!-- duplicated for seamless loop -->
        <div id="row1"></div>
      </div>

    </div>

    <!-- Row 2: right -->
    <div class="relative flex overflow-hidden py-2 group">
      <!-- <div class="absolute left-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-32 sm:w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none"></div>   -->

      <div class="flex gap-4 animate-marquee animate-marquee-right">
        <div id="row2"></div>
      </div>
    </div>

  </div>

  <p class="text-center text-white-60 mt-16 text-sm tracking-wide px-3.5 ms-reveal ms-reveal-d2">
    <?php esc_html_e( '...and hundreds more prestigious international and local brands', 'mayasarji' ); ?>
  </p>
</section>