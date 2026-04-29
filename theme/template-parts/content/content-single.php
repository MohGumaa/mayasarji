<?php
/**
 * Template part for displaying single posts
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (has_post_thumbnail()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
} else {
	$featured_img_url = get_theme_file_uri( 'assets/images/banner-1.webp' );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header 
		class="entry-header section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
		style="background-image: url(<?php echo esc_url($featured_img_url); ?>)"
	>
		<div class="container text-center relative z-50">
			
			<?php the_title( '<h1 class="page-title page-title-md m-0!">', '</h1>' ); ?>

			<div class="entry-meta mt-4">
				<?php mayasarji_entry_meta(); ?>
			</div>

		</div>
	</header>

	<div <?php mayasarji_content_class( 'entry-content py-12' ); ?>>
		<div class="container">

			<?php the_content();?>

			<footer class="entry-footer">
				<?php mayasarji_entry_footer(); ?>
			</footer>

		</div>
	</div>

</article>
