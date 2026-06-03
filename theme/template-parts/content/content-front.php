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
    <div class="ms-section-label ms-reveal">
      <div class="ms-section-label-line"></div>
      <span class="ms-section-label-text"><?php esc_html_e( 'About Maya', 'mayasarji' ); ?></span>
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
            <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-5.webp" alt="<?php esc_html_e( 'Maya Sarji', 'mayasarji' );?>" class="w-full h-full object-cover">
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
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-24 py-12 border-t border-b border-white/6">
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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 overflow-hidden ms-reveal ms-reveal-d3">
      <div class="relative shrink-0 group overflow-hidden rounded-2xl ms-reveal">
        <div class="h-72 lg:h-80">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/img-0.webp')); ?>" alt="<?php esc_html_e( 'Maya Sarji', 'mayasarji' );?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-background/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Studio Recording', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl ms-reveal ms-reveal-d1">
        <div class="h-72 lg:h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-6-1.webp" alt="<?php esc_html_e( 'Live Hosting', 'mayasarji' );?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Live Hosting', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl ms-reveal ms-reveal-d2">
        <div class="h-72 lg:h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-2.webp" alt="<?php esc_html_e( 'Coaching Sessions', 'mayasarji' );?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Coaching Sessions', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl ms-reveal ms-reveal-d3">
        <div class="h-72 lg:h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-9.webp" alt="<?php esc_html_e( 'Podcast Production', 'mayasarji' );?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute inset-0 bg-linear-to-t from-[#0d0d0d]/80 via-transparent to-transparent"></div>
          <div class="absolute bottom-4 left-4">
            <span class="text-xs text-foreground/60 tracking-widest uppercase"><?php esc_html_e( 'Podcast Production', 'mayasarji' ); ?></span>
          </div>
          <div class="absolute inset-0 bg-sky-400/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
      </div>
      <div class="relative shrink-0 group overflow-hidden rounded-2xl ms-reveal ms-reveal-d4">
        <div class="h-72 lg:h-80">
          <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-7-1.webp" alt="<?php esc_html_e( 'Work Voice', 'mayasarji' );?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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

<!-- ══════ SERVICES ══════ -->
<section id="services" class="relative py-24 lg:py-32 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
      <div class="ms-reveal">
        <div class="ms-section-label">
          <div class="ms-section-label-line"></div>
          <span class="ms-section-label-text">
            <?php esc_html_e( 'Services', 'mayasarji' ); ?>
          </span>
        </div>
        <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold leading-none tracking-tight text-foreground">
          <?php esc_html_e( 'What I', 'mayasarji' ); ?><br><span class="text-gradient-accent"><?php esc_html_e( 'Create', 'mayasarji' ); ?></span>
        </h2>
      </div>
      <div class="lg:self-end ms-reveal ms-reveal-d1">
        <p class="text-foreground/50 text-base leading-relaxed max-w-md">
          <?php esc_html_e( 'From a single commercial to a full brand voice strategy every engagement is approached with the same standard of cinematic excellence and emotional precision.', 'mayasarji' ); ?>
        </p>
      </div>
    </div>
    <div class="ms-offering-grid ms-reveal ms-reveal-d2">
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#advertising' ); ?>" class="group ms-offering-card">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mic ms-offering-icon-svg" aria-hidden="true">
                  <path d="M12 19v3"></path>
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                  <rect x="9" y="2" width="6" height="13" rx="3"></rect>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Advertising', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Commercial Voice Over', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Captivating commercial recordings that cut through noise and connect with audiences on an emotional level. Every word, every breath intentional.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#enterprise' ); ?>" class="group ms-offering-card">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 ms-offering-icon-svg" aria-hidden="true">
                  <path d="M10 12h4"></path>
                  <path d="M10 8h4"></path>
                  <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                  <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                  <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Enterprise', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Corporate Narration', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Premium corporate audio content that elevates your brand\'s authority. E-learning, documentaries, presentations delivered with precision.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#events' ); ?>" class="group ms-offering-card">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tv ms-offering-icon-svg" aria-hidden="true">
                  <path d="m17 2-5 5-5-5"></path>
                  <rect width="20" height="15" x="2" y="7" rx="2"></rect>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Events', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Live Hosting', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Commanding stage presence and magnetic energy for live events, award ceremonies, product launches, and media appearances.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#media' ); ?>" class="group ms-offering-card ms-offering-featured">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-badge-wrapper">
          <span class="ms-offering-badge">
            <?php esc_html_e( 'Popular', 'mayasarji' );?>
          </span>
        </div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap ms-offering-icon-svg" aria-hidden="true">
                  <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                  <path d="M22 10v6"></path>
                  <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Coaching', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Communication Coaching', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Transformative one-on-one coaching that unlocks authentic vocal power, eliminates limiting habits, and builds unshakeable executive presence.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#media' ); ?>" class="group ms-offering-card">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star ms-offering-icon-svg" aria-hidden="true">
                  <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Media', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Media Training', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'High-pressure media preparation for executives and public figures. Camera confidence, message clarity, crisis communication.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#podcasting' ); ?>" class="group ms-offering-card">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-podcast ms-offering-icon-svg" aria-hidden="true">
                  <path d="M13 17a1 1 0 1 0-2 0l.5 4.5a0.5 0.5 0 0 0 1 0z" fill="currentColor"></path>
                  <path d="M16.85 18.58a9 9 0 1 0-9.7 0"></path>
                  <path d="M8 14a5 5 0 1 1 8 0"></path>
                  <circle cx="12" cy="11" r="1" fill="currentColor"></circle>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Podcasting', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Podcast Voice', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Professional podcast intros, narration, and co-hosting that elevate your show\'s production value and listener retention.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) . '#strategy' ); ?>" class="group ms-offering-card ms-offering-wide">
        <div class="ms-offering-bg"></div>
        <div class="ms-offering-content">
          <div class="ms-offering-header">
            <div class="ms-offering-icon">
              <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radio ms-offering-icon-svg" aria-hidden="true">
                  <path d="M16.247 7.761a6 6 0 0 1 0 8.478"></path>
                  <path d="M19.075 4.933a10 10 0 0 1 0 14.134"></path>
                  <path d="M4.925 19.067a10 10 0 0 1 0-14.134"></path>
                  <path d="M7.753 16.239a6 6 0 0 1 0-8.478"></path>
                  <circle cx="12" cy="12" r="2"></circle>
              </svg>
            </div>
            <span class="ms-offering-category">
              <?php esc_html_e( 'Strategy', 'mayasarji' ); ?>
            </span>
          </div>
          <h3 class="ms-offering-title">
            <?php esc_html_e( 'Brand Voice Strategy', 'mayasarji' );?>
          </h3>
          <p class="ms-offering-description">
            <?php esc_html_e( 'Full-spectrum brand voice architecture defining the sonic identity, tone guidelines, and voice casting for your brand\'s audio ecosystem.', 'mayasarji' );?>
          </p>
          <div class="ms-offering-link">
            <?php esc_html_e( 'Explore', 'mayasarji' );?>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="12" 
              height="12" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"
              >
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
          </div>
          <div class="ms-offering-divider"></div>
        </div>
      </a>
    </div>
    <div class="mt-16 pt-12 border-t border-white/6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 ms-reveal ms-reveal-d3">
      <p class="text-foreground/40 text-sm max-w-md">
        <?php esc_html_e( 'Custom packages available for ongoing brand partnerships
         and enterprise agreements.', 'mayasarji' );?>
      </p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="ms-action-btn group">
        <?php esc_html_e( 'Discuss Your Project', 'mayasarji' );?>
        <svg xmlns="http://www.w3.org/2000/svg" width="14"
          height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-arrow-right group-hover:translate-x-1 transition-transform duration-300"
          aria-hidden="true">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
  <div class="absolute top-0 left-1/3 w-150 h-100 bg-sky-400/4 rounded-full blur-[150px] pointer-events-none"></div>
</section>

<!-- ══════ PROJECTS ══════ -->
<section id="projects" class="relative py-24 lg:py-32 overflow-hidden">
  <div class="absolute inset-0 bg-linear-to-b from-transparent via-sky-400/3 to-transparent pointer-events-none"></div>
  <div class="absolute bottom-0 right-0 w-125 h-125 bg-sky-400/5 rounded-full blur-[150px] pointer-events-none"></div>
  <div class="container">
    <div class="ms-section-label">
      <div class="ms-section-label-line"></div>
      <span class="ms-section-label-text">
        <?php esc_html_e( 'Featured Work', 'mayasarji' );?>
      </span>
    </div>

    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'our-services' ) ) ); ?>" class="ms-action-link group">
      <?php esc_html_e( 'View All Projects', 'mayasarji' );?>
      <svg 
        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true">
        <path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path>
      </svg>
    </a>
  </div>
</section>

<!-- ══════ CONTACT ══════ -->
<section id="contact" class="relative py-24 lg:py-32 overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://mayasarji.com/wp-content/uploads/2026/05/img-8.webp" alt="<?php esc_html_e( 'Studio', 'mayasarji' );?>" class="w-full h-full object-cover opacity-25">
    <div class="absolute inset-0 bg-linear-to-b from-background via-background/80 to-background"></div>
    <div class="absolute inset-0 bg-linear-to-r from-background via-transparent to-background"></div>
  </div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-150 h-75 bg-sky-400/8 rounded-full blur-[150px] pointer-events-none"></div>
  <div class="container relative z-10 text-center">
    <div class="flexCenter gap-3 mb-8 ms-reveal">
      <div class="w-8 h-px bg-sky-400"></div>
      <span class="text-sky-400 text-xs font-semibold tracking-[0.3em] uppercase"><?php esc_html_e( 'Work With Maya', 'mayasarji' );?></span>
      <div class="w-8 h-px bg-sky-400"></div>
    </div>
    <h2 
      class="font-heading text-6xl md:text-8xl font-bold leading-[0.95] tracking-tight text-foreground mb-6 ms-reveal ms-reveal-d1">
      <?php esc_html_e( 'Let\'s Create', 'mayasarji' );?><br><span class="text-gradient-accent luxury-glow-text"><?php esc_html_e( 'Something', 'mayasarji' );?></span><br><?php esc_html_e( 'Extraordinary', 'mayasarji' );?>
    </h2>
    <p 
      class="text-foreground/50 text-base md:text-lg max-w-xl mx-auto mb-12 leading-relaxed ms-reveal ms-reveal-d2">
      <?php esc_html_e( 'Whether you need the perfect voice for your brand, live hosting for your event, or transformational coaching the conversation starts here.', 'mayasarji' );?>
    </p>
    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="ms-action-btn ms-action-btn-lg w-fit mx-auto group ms-reveal ms-reveal-d3">
        <?php esc_html_e( 'Begin Your Journey', 'mayasarji' );?>
        <svg xmlns="http://www.w3.org/2000/svg" width="14"
          height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round"
          class="lucide lucide-arrow-right group-hover:translate-x-1 transition-transform duration-300"
          aria-hidden="true">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>
  </div>
</section>