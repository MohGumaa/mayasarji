<?php
/**
 * Template part for displaying front page content
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$default_img  = get_theme_file_uri( 'assets/images/banner-1.webp' );
?>

<!-- ══════════════════════════════════════
  HERO
══════════════════════════════════════ -->
<section 
  id="hero" 
  class="stripe-texture w-full h-[90svh] min-h-150 relative overflow-hidden"
>
  <div class="container h-full">
    <img src="https://mayasarji.test/wp-content/uploads/2026/05/img-1.webp" alt="Flag">
  </div>
</section>

<!-- ══════════════════════════════════════
  ABOUT
══════════════════════════════════════ -->
<section id="section" class="shadow-section-sm py-24 md:py-32 overflow-hidden">
  <div class="container reveal">
    <h2 class="page-title font-bold mb-6 md:mb-8 reveal reveal-d1">Meet Maya</h2>

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 text-foreground leading-6 text-sm">
      <div class="space-y-6 reveal reveal-d2">
        <p>
          Maya Sarji is the iconic voice that resonates with millions around the world. A celebrity multilingual Arabic voice artist in the Middle East, with over 20 years of experience, her voice is synonymous with hundreds of prestigious international and local brands, including L'Oreal, Nestlé, Emirates Airline, Dubai Tourism, Pampers, Ferrero, Hermes, Mercedes and OSN, to name just a few.
        </p>
        <p>
          Maya's linguistic prowess spans four languages and several regional dialects, enabling her to deliver captivating performances across a wide array of voice work. Her extensive repertoire includes TV and radio commercials, IVRs, documentaries, corporate videos, announcements, movie trailers, cartoons, storybooks, jingles and much more.Not just a voice artist, Maya is a professional pianist and singer-songwriter. 
        </p>
        <p>
          With her remarkable versatility and extensive career in voice acting and performance, she has carved out a distinct niche as a communication expert, voice director, and public speaking and voice performance coach, further expanding her influence and expertise in the world of voice.
        </p>
      </div>
      <div class="space-y-6 reveal reveal-d3">
        <p>
          Maya specializes in helping both business and non-business professionals elevate their vocal performance, presentation, and speaking skills. She emphasizes the importance of human connection, paralinguistics and versatility in communication.
        </p>
        <p>
          Her teachings, backed by her experience and musical background, focus on the correct application of tone, voice, and emotion, coupled with impactful content, and physical presence to influence, engage, and captivate audiences. This multifaceted talent has earned her a spot among Yahoo News’ Top 10 Speaking Coaches.
        </p>
        <p>
          Maya’s influence extends beyond individual coaching and prestigious voiceover work for renowned brands. She is a regular speaker at universities and is frequently featured in newspapers, magazines, and on television.
        </p>
        <p>
          Maya is also an Emcee, panel moderator and speaker who has graced many prestigious stages and events.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════
  BRANDS
══════════════════════════════════════ -->
<section id="brands" class="stripe-texture py-24 overflow-hidden">
  <div class="container text-center reveal mb-16">
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

  <div class="space-y-3 reveal">
    
    <!-- Row 1: left -->
    <div class="relative flex overflow-hidden py-2 group">

      <div class="absolute left-0 top-0 bottom-0 w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none"></div>
      <div class="absolute right-0 top-0 bottom-0 w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none"></div>
      
      <div class="flex gap-4 animate-marquee animate-marquee-left">
        <!-- duplicated for seamless loop -->
        <div id="row1"></div>
      </div>

    </div>

    <!-- Row 2: right -->
    <div class="relative flex overflow-hidden py-2 group">
      <div class="absolute left-0 top-0 bottom-0 w-40 bg-linear-to-r from-background to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-40 bg-linear-to-l from-background to-transparent z-10 pointer-events-none"></div>  

      <div class="flex gap-4 animate-marquee animate-marquee-right">
        <div id="row2"></div>
      </div>
    </div>

  </div>

  <p class="text-center text-white-60 mt-16 text-sm tracking-wide px-3.5">
    <?php esc_html_e( '...and hundreds more prestigious international and local brands', 'mayasarji' ); ?>
  </p>
</section>

