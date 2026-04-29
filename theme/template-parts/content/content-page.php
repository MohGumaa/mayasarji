<?php
/**
 * Template part for displaying pages
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

<section 
	class="section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
	style="background-image: url(<?php echo $featured_img_url; ?>)"
	>
	<div class="container text-center relative z-50">
		<h1 class="page-title page-title-xl m-0!">
			<?php the_title();?>
		</h1>
	</div>
</section>


<article id="post-<?php the_ID(); ?>" <?php post_class('py-16 md:py-24'); ?>>
	<div <?php mayasarji_content_class( 'entry-content container' ); ?>>
		<?php the_content();?>
	</div>
</article>
