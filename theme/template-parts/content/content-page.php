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

// Get ACF fields
$page_eyebrow  = get_field('page_eyebrow');
$page_subtitle = get_field('page_subtitle');
?>

<header 
	class="section-banner shadow-section pt-32 pb-16 md:pt-40 md:pb-20"
	style="background-image: url(<?php echo esc_url($featured_img_url); ?>)"
>
	<div class="container text-center relative z-50">
		
		<?php if ( $page_eyebrow ) : ?>
			<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
				<?php echo esc_html( $page_eyebrow ); ?>
			</p>
		<?php endif; ?>

		<h1 class="page-title page-title-xl">
			<?php the_title();?>
		</h1>
		
		<?php if ( $page_subtitle ) : ?>
			<p class="text-sm md:text-base lg:text-xl max-w-2xl mx-auto text-foreground">
				<?php echo esc_html( $page_subtitle ); ?>
			</p>
		<?php endif; ?>

	</div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class('py-16 ms-reveal'); ?>>
	<div class="container">
		<div <?php mayasarji_content_class( 'entry-content' ); ?>>
			<?php the_content();?>
		</div>
	</div>
</article>
