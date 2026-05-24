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

<section class="py-16 mb-10 lg:mb-16 ms-reveal">
	<div class="container space-y-2">

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper lg:order-last">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-5.webp" 
						alt="<?php esc_html_e( 'Commercial Voice Over', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg"
									width="18"
									height="18"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="ms-service-icon-svg">
									<path d="M12 19v3"></path>
									<path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
									<rect x="9" y="2" width="6" height="13" rx="3"></rect>
								</svg>
							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Advertising', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Commercial Voice Over', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'From luxury brands to major campaigns, Maya\'s commercial voice work has been heard by millions across television, radio, digital, and cinema. Every word is delivered with precision, warmth, and the emotional intelligence that brands trust.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'TV & Radio Commercials', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Brand Campaigns', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Digital Campaigns', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Cinema Advertising', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Promotional Content', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-7-1.webp" 
						alt="<?php esc_html_e( 'Corporate Narration', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" 
									width="18" 
									height="18" 
									viewBox="0 0 24 24" 
									fill="none" 
									stroke="currentColor" 
									stroke-width="2" 
									stroke-linecap="round" 
									stroke-linejoin="round" 
									class="lucide lucide-building2 lucide-building-2 ms-service-icon-svg" 
									aria-hidden="true">
									<path d="M10 12h4"></path>
									<path d="M10 8h4"></path>
									<path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
									<path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
									<path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
								</svg>

							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Enterprise', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Corporate Narration', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'Premium corporate audio content that communicates authority, clarity, and credibility. Maya\'s corporate narration expertise spans e-learning, internal communications, documentaries, and corporate films.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'E-learning & Training', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Corporate Films', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Annual Reports', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Internal Communications', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper lg:order-last">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-6-1.webp" 
						alt="<?php esc_html_e( 'Live Hosting', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" 
									width="18" 
									height="18" 
									viewBox="0 0 24 24" 
									fill="none" 
									stroke="currentColor" 
									stroke-width="2" 
									stroke-linecap="round" 
									stroke-linejoin="round" 
									class="lucide lucide-tv service-icon-svg" aria-hidden="true"
									>
									<path d="m17 2-5 5-5-5"></path>
									<rect width="20" height="15" x="2" y="7" rx="2"></rect>
								</svg>
							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Events', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Live Hosting', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'An electrifying live presence that transforms any event into a memorable experience. From international award ceremonies to intimate product launches, Maya commands the stage with grace and authority.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'Award Ceremonies', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Product Launches', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Corporate Galas', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Conference Hosting', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-8.webp" 
						alt="<?php esc_html_e( 'Media Training', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" 
									width="18" 
									height="18" 
									viewBox="0 0 24 24" 
									fill="none" 
									stroke="currentColor" 
									stroke-width="2" 
									stroke-linecap="round" 
									stroke-linejoin="round" 
									class="lucide lucide-star ms-service-icon-svg" aria-hidden="true"
									>
										<path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
								</svg>
							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Media', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Media Training', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'Comprehensive media preparation for executives and public figures facing cameras, microphones, and press. Maya\'s training covers interview technique, key message development, and crisis communication.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'TV Interview Prep', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Press Conference Training', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Social Media Content', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Crisis Communications', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper lg:order-last">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-9.webp" 
						alt="<?php esc_html_e( 'Podcasting Voice', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" 
									width="18" 
									height="18" 
									viewBox="0 0 24 24" 
									fill="none" 
									stroke="currentColor" 
									stroke-width="2" 
									stroke-linecap="round" 
									stroke-linejoin="round"
									class="lucide lucide-podcast ms-service-icon-svg"
									aria-hidden="true"
									>
										<path d="M13 17a1 1 0 1 0-2 0l.5 4.5a0.5 0.5 0 0 0 1 0z" fill="currentColor"></path>
										<path d="M16.85 18.58a9 9 0 1 0-9.7 0"></path>
										<path d="M8 14a5 5 0 1 1 8 0"></path>
										<circle cx="12" cy="11" r="1" fill="currentColor"></circle>
								</svg>
							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Podcasting', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Podcast Voice', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'Professional podcast intros, ads, narration, and co-hosting. Elevate your podcast\'s production value with a voice that keeps listeners coming back.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'Podcast Intros & Outros', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Ad Reads & Sponsorships', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Episode Narration', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Guest Co-hosting', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

		<div class="ms-service-card group ms-reveal">
			<div class="ms-service-grid">

				<div class="ms-service-image-wrapper">
					<img 
						src="https://mayasarji.com/wp-content/uploads/2026/05/img-2.webp" 
						alt="<?php esc_html_e( 'Brand Voice Strategy', 'mayasarji' );?>" 
						class="ms-service-image wp-post-image"
					>
					<div class="ms-service-overlay"></div>
				</div>

				<div class="ms-service-content">

					<div class="ms-service-header">
						<div class="ms-service-category">
							<div class="ms-service-icon">
								<svg xmlns="http://www.w3.org/2000/svg" 
									width="18" 
									height="18" 
									viewBox="0 0 24 24" 
									fill="none" 
									stroke="currentColor" 
									stroke-width="2" 
									stroke-linecap="round" 
									stroke-linejoin="round" 
									class="lucide lucide-radio ms-service-icon-svg"
									aria-hidden="true"
								>
									<path d="M16.247 7.761a6 6 0 0 1 0 8.478"></path>
									<path d="M19.075 4.933a10 10 0 0 1 0 14.134"></path>
									<path d="M4.925 19.067a10 10 0 0 1 0-14.134"></path>
									<path d="M7.753 16.239a6 6 0 0 1 0-8.478"></path>
									<circle cx="12" cy="12" r="2"></circle>
								</svg>
							</div>
							<span class="ms-service-label"><?php esc_html_e( 'Strategy', 'mayasarji' );?></span>
						</div>
					</div>

					<h2 class="ms-service-title">
						<?php esc_html_e( 'Brand Voice Strategy', 'mayasarji' );?>
					</h2>

					<p class="ms-service-description">
						<?php esc_html_e( 'A comprehensive sonic identity system for your brand. Maya develops the full architecture of how your brand sounds — from tone guidelines to talent casting and ongoing audio direction.', 'mayasarji' );?>
					</p>

					<div class="ms-service-tags">
						<span class="ms-service-tag"><?php esc_html_e( 'Sonic Identity Development', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Voice Casting & Direction', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Audio Brand Guidelines', 'mayasarji' );?></span>
						<span class="ms-service-tag"><?php esc_html_e( 'Long-term Partnership', 'mayasarji' );?></span>
					</div>

				</div>
			</div>
		</div>

	</div>
</section>

