<?php
/**
 * Hero Slider — PHP SLIDES array → ms-slide markup
 * Drop this into your theme template (page.php, front-page.php, etc.)
 *
 * @package mayasarji
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$slides = [
  [
    'img'   => 'https://mayasarji.com/wp-content/uploads/2026/05/img-5.webp',
    'label' => __( 'Voice Artist', 'mayasarji' ),
    'lines' => [
      'plain'  => __( 'Your Voice.',  'mayasarji' ),
      'accent' => __( 'Your Power.',  'mayasarji' ),
      'muted'  => __( 'Your Story.',  'mayasarji' ),
    ],
    'desc'  => __( "Award-winning voice artist, media personality, and communication coach crafting unforgettable audio experiences for the world's most discerning brands.", 'mayasarji' ),
    'cta'   => [
      'primary'   => [ 'text' => __( 'Book a Session', 'mayasarji' ), 'href' => get_permalink( get_page_by_path( 'contact' ) ) ],
      'secondary' => [ 'text' => __( 'Explore Work',   'mayasarji' ), 'href' => get_permalink( get_page_by_path( 'our-services' ) ) ],
    ],
    'stats' => [
      [ 'value' => __( '500+', 'mayasarji' ), 'label' => __( 'Brands Voiced',    'mayasarji' ) ],
      [ 'value' => __( '15+',  'mayasarji' ), 'label' => __( 'Years Experience', 'mayasarji' ) ],
      [ 'value' => __( '50+',  'mayasarji' ), 'label' => __( 'Awards',           'mayasarji' ) ],
    ],
  ],
  [
    'img'   => 'https://mayasarji.com/wp-content/uploads/2026/05/img-6-1.webp',
    'label' => __( 'Live Presenter', 'mayasarji' ),
    'lines' => [
      'plain'  => __( 'On Stage.',   'mayasarji' ),
      'accent' => __( 'In Command.',       'mayasarji' ),
      'muted'  => __( 'Unforgettable.',  'mayasarji' ),
    ],
    'desc'  => __( 'From global award ceremonies to high-profile corporate events commanding every stage with confidence, charisma, and unmatched presence.', 'mayasarji' ),
    'cta'   => [
      'primary'   => [ 'text' => __( 'Book a Session', 'mayasarji' ), 'href' => get_permalink( get_page_by_path( 'contact' ) ) ],
      'secondary' => [ 'text' => __( 'Explore Work',   'mayasarji' ), 'href' => get_permalink( get_page_by_path( 'our-services' ) ) ],
    ],
    'stats' => [
      [ 'value' => __( '200+', 'mayasarji' ), 'label' => __( 'Events Hosted',  'mayasarji' ) ],
      [ 'value' => __( '30+', 'mayasarji' ), 'label' => __( 'Countries', 'mayasarji' ) ],
      [ 'value' => __( '1M+',    'mayasarji' ), 'label' => __( 'Audience Reached',  'mayasarji' ) ],
    ],
  ],
];

$total = count( $slides );
?>

<section id="hero" class="relative w-full bg-black/30 h-svh overflow-hidden">

<!-- ── Background Slides ── -->
  <div id="ms-slides">
		<?php foreach ( $slides as $i => $slide ) :
      $is_active = ( 0 !== $i ) ? ' active' : '';
    ?>
			<div class="ms-slide<?php echo esc_attr( $is_active ); ?>">

				<div class="ms-slide-img">
					<img
						src="<?php echo esc_url( $slide['img'] ); ?>"
						alt="<?php echo esc_attr( $slide['label'] ); ?>"
					>
				</div>

				<div class="ms-blob"></div>

				<div class="container h-full">
					<div class="ms-hero-content">

						<!-- Label -->
						<div class="ms-section-label ms-reveal mb-8!">
							<div class="ms-section-label-line"></div>
							<span class="ms-section-label-text">
								<?php echo esc_html( $slide['label'] ); ?>
							</span>
						</div>

						<!-- Headline -->
						<h1 class="ms-hero-title ms-reveal ms-reveal-d1">
							<span class="block">
								<?php echo esc_html( $slide['lines']['plain'] ); ?>
							</span>
							<span class="text-gradient-accent block">
								<?php echo esc_html( $slide['lines']['accent'] ); ?>
							</span>
							<span class="text-foreground/30 block">
								<?php echo esc_html( $slide['lines']['muted'] ); ?>
							</span>
						</h1>

						<!-- Description -->
						<p class="ms-hero-description ms-reveal ms-reveal-d2">
							<?php echo esc_html( $slide['desc'] ); ?>
						</p>

						<!-- CTAs -->
						<div class="ms-hero-buttons ms-reveal ms-reveal-d3">
							<a href="<?php echo esc_url( $slide['cta']['primary']['href'] ); ?>" class="group ms-btn ms-btn-primary">
								<?php echo esc_html( $slide['cta']['primary']['text'] ); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true">
									<path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path>
								</svg>
							</a>
							<a href="<?php echo esc_url( $slide['cta']['secondary']['href'] ); ?>" class="group ms-btn ms-btn-secondary">
								<?php echo esc_html( $slide['cta']['secondary']['text'] ); ?>
								<div class="flexCenter rounded-full border border-white/20 group-hover:border-sky-400/40 transition-colors duration-300 size-6">
									<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play ml-0.5" aria-hidden="true">
										<path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"></path>
									</svg>
								</div>
							</a>
						</div>

						<!-- Stats -->
						<div class="ms-stats ms-reveal ms-reveal-d4">
							<?php foreach ( $slide['stats'] as $stat ) : ?>
							<div class="ms-stats-item">
								<span class="ms-stats-value">
									<?php echo esc_html( $stat['value'] ); ?>
								</span>
								<span class="ms-stats-label">
									<?php echo esc_html( $stat['label'] ); ?>
								</span>
							</div>
							<?php endforeach; ?>
						</div>

					</div>
				</div>
				
			</div>
		<?php endforeach; ?>
  </div>

	<!-- ── Progress bar ── -->
  <div class="ms-progress-track">
    <div class="ms-progress-fill" id="ms-progress"></div>
  </div>

	<!-- ── Dot controls ── -->
  <div class="absolute bottom-6 left-0 right-0 z-20 container">
    <div id="ms-dots" class="flex items-center gap-2.5">
			<?php for ( $i = 0; $i < $total; $i++ ) :
				$active_class = ( 0 === $i ) ? ' active' : '';
			?>
				<button 
					class="ms-dot<?php echo esc_attr( $active_class ); ?>"
					data-index="<?php echo esc_attr( $i ); ?>"
					aria-label="<?php printf( esc_attr__( 'Slide %d', 'mayasarji' ), $i + 1 ); ?>"
				>
				</button>
			<?php endfor;?>
    </div>
  </div>
</section>