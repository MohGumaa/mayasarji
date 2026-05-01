<?php
/**
 * Template part for displaying single posts
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Get featured image or fallback
$featured_img_url = has_post_thumbnail()
	? get_the_post_thumbnail_url(get_the_ID(), 'large')
	: get_theme_file_uri( 'assets/images/banner-1.webp' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header 
		class="entry-header section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
		style="background-image: url(<?php echo esc_url($featured_img_url); ?>)"
	>
		<div class="container text-center relative z-50">
			
			<?php the_title( '<h1 class="page-title page-title-md m-0!">', '</h1>' ); ?>

			<div class="flexCenter flex-wrap gap-3 text-sm text-white/60 entry-meta mt-4">
				<?php mayasarji_entry_meta(); ?>
			</div>

		</div>
	</header>

	<div <?php mayasarji_content_class( 'entry-content py-12' ); ?>>
		<div class="container">

			<?php the_content();?>

			<footer class="flex flex-wrap gap-2 entry-footer article-footer-meta text-sm mt-5">
				<?php mayasarji_entry_footer(); ?>
			</footer>

		</div>
	</div>

</article>
