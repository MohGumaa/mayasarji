<?php
/**
 * Template part for displaying pages
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Get featured image or fallback
$featured_img_url = has_post_thumbnail()
	? get_the_post_thumbnail_url(get_the_ID(), 'large')
	: get_theme_file_uri('assets/images/banner-1.webp');
	
?>

<section 
	class="section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
	style="background-image: url(<?php echo esc_url($featured_img_url); ?>)"
	>
	<div class="container text-center relative z-50">
		<h1 class="page-title page-title-xl m-0!">
			<?php the_title();?>
		</h1>
	</div>
</section>


<article id="post-<?php the_ID(); ?>" <?php post_class('py-16'); ?>>
	<div class="container">
		<div <?php mayasarji_content_class( 'entry-content' ); ?>>
			<?php the_content();?>
		</div>
	</div>
</article>
