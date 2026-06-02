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

$image = get_field('right_side_image');
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

<section class="pt-16 pb-24 lg:pb-36 ms-reveal">
	<div class="container grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div <?php mayasarji_content_class( 'entry-content text-[15px] text-white/60' ); ?>>
				<?php the_content();?>
			</div>
		</article>
		<div class="space-y-8">

			<?php if( !empty( $image ) ): ?>
				<div class="relative w-full h-100 rounded-lg overflow-hidden shadow-2xl">
					<img 
						src="<?php echo esc_url($image['url']); ?>" 
						alt="<?php echo esc_attr($image['alt']); ?>" 
						class="absolute inset-0 w-full h-full object-cover"
					/>
					<div class="absolute inset-0 bg-linear-to-t from-background/80 to-transparent"></div>
				</div>
			<?php endif; ?>

			<!-- BOXES -->
			<div class="grid sm:grid-cols-2 gap-4">
				<div class="p-4 bg-card rounded-lg border border-white/6 hover:border-primary/30 transition-colors duration-200">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mic w-8 h-8 text-primary mb-3" aria-hidden="true">
						<path d="M12 19v3"></path>
						<path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
						<rect x="9" y="2" width="6" height="13" rx="3"></rect>
					</svg>
					<h3 class="font-medium text-foreground mb-1">20+ Years Experience</h3>
					<p class="text-sm text-white/60">Celebrity voice actor and the most well-known voice in the Arab world</p>
				</div>
				<div class="p-4 bg-card rounded-lg border border-white/6 hover:border-primary/30 transition-colors duration-200">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-music w-8 h-8 text-primary mb-3" aria-hidden="true">
						<path d="M9 18V5l12-2v13"></path>
						<circle cx="6" cy="18" r="3"></circle>
						<circle cx="18" cy="16" r="3"></circle>
					</svg>
					<h3 class="font-medium text-foreground mb-1">Musical Background</h3>
					<p class="text-sm text-white/60">Classical piano training with the Royal British Schools of Music</p>
				</div>
				<div class="p-4 bg-card rounded-lg border border-white/6 hover:border-primary/30 transition-colors duration-200">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-8 h-8 text-primary mb-3" aria-hidden="true">
						<circle cx="12" cy="12" r="10"></circle>
						<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
						<path d="M2 12h20"></path>
					</svg>
					<h3 class="font-medium text-foreground mb-1">Multilingual</h3>
					<p class="text-sm text-white/60">Fluent in Arabic, English, French with multiple regional dialects</p>
				</div>
				<div class="p-4 bg-card rounded-lg border border-white/6 hover:border-primary/30 transition-colors duration-200">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-8 h-8 text-primary mb-3" aria-hidden="true">
						<path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
						<circle cx="12" cy="8" r="6"></circle>
					</svg>
					<h3 class="font-medium text-foreground mb-1">Brand Voice Expert</h3>
					<p class="text-sm text-white/60">Official voice for hundreds of multinational and local brands</p>
				</div>
			</div>
		</div>
	</div>
</section>