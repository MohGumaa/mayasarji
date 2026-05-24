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
$ms_page_title_wysiwyg = get_field('page_title_wysiwyg');
$ms_page_subtitle = get_field('page_subtitle');
?>

<header 
	class="section-banner shadow-section section-banner-lg py-16 md:py-20"
	style="background-image: url(<?php echo esc_url($featured_img_url); ?>)"
>
	<div class="container relative flex flex-col justify-center section-fullScreen z-50">

		<div class="flex items-center gap-3 mb-8 max-w-xl">
			<span class="w-8 h-px bg-sky-400"></span>
			<span class="text-sky-400 text-xs font-semibold tracking-wider uppercase">
				<?php the_title();?>
			</span>
		</div>

		<?php if ( ! empty( $ms_page_title_wysiwyg ) ) : ?>
			<?php echo wp_kses_post( $ms_page_title_wysiwyg ); ?>
		<?php endif; ?>

		<?php if ( ! empty( $ms_page_subtitle ) ) : ?>
			<p class="text-white/60 text-lg leading-relaxed max-w-xl">
				<?php echo esc_html( $ms_page_subtitle ); ?>
			</p>
		<?php endif; ?>

	</div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class('py-16'); ?>>
  <div class="container">
    <div <?php mayasarji_content_class( 'entry-content' ); ?>>
      <?php the_content();?>
    </div>
  </div>
</article>

