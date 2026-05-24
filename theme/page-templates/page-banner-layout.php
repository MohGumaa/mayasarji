<?php
/**
//  * Template Name: Banner Ending Page
 * 
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$banner_image = get_theme_file_uri( 'assets/images/maya-stage.webp' );
?>

	<main id="main" class="flex flex-col grow">
		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'page' );
			endwhile;
		?>

    <section 
      class="section-banner thanks-banner flexCenter overflow-hidden"
      style="background-image: url(<?php echo esc_url($banner_image); ?>)"
    >
      <div class="container flex flex-col items-center gap-8 h-full relative z-50">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-[0.2em] uppercase">
          <span class="bg-linear-to-r from-sky-400 via-primary to-amber-400 bg-clip-text text-transparent">
            <?php esc_html_e( 'Thank You', 'mayasarji' ); ?>
          </span>
        </h2>

        <div class="flex items-center gap-3">
          <div class="flex items-end gap-0.5 h-8">
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:9px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:15px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:21px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:15px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:24px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:18px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:12px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:18px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:15px"></div>
            <div class="w-0.5 bg-linear-to-t from-primary/50 to-primary rounded-full" style="height:9px"></div>
          </div>
          <div class="text-right">
            <p class="font-serif italic text-2xl text-primary"><?php esc_html_e( 'Maya', 'mayasarji' );?></p>
            <p class="text-xl font-bold tracking-wider uppercase"><?php esc_html_e( 'SARJI', 'mayasarji' );?></p>
            <p class="text-[10px] text-muted-foreground tracking-wider"><?php esc_html_e( 'The Iconic Voice You All Know', 'mayasarji' );?></p>
          </div>
        </div>

      </div>
    </section>
	</main>

<?php
get_footer();
