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

<section 
  id="hero" 
  class="film-grain shadow-hero w-full h-[60svh] min-h-150 overflow-hidden relative"
>
  <div class="container">
    Hero
  </div>
</section>


<!-- ══════ BRANDS ══════ -->
<section id="brands" class="bg-black/70 py-24 overflow-hidden">
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

  <p class="text-center text-white-60 mt-16 text-sm tracking-wide px-3.5">
    <?php esc_html_e( '...and hundreds more prestigious international and local brands', 'mayasarji' ); ?>
  </p>
</section>