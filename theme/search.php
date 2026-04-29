<?php
/**
 * The template for displaying search results pages
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$banner = get_theme_file_uri( 'assets/images/banner-2.webp' );
?>

	<main id="main" class="flex flex-col grow">

		<section 
			class="section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
			style="background-image: url(<?php echo $banner; ?>)"
			>
			<div class="container text-center relative z-50">
				<?php
					printf(
						/* translators: 1: search result title. 2: search term. */
						'<h1 class="page-title page-title-md m-0!">%1$s <span class="text-sky-400">%2$s</span></h1>',
						esc_html__( 'Search results for:', 'mayasarji' ),
						get_search_query()
					);
				?>
			</div>
		</section>

		<section class="py-16">
			<div class="container">
				<?php if ( have_posts() ) :?>
					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6 mb-10">
						<?php 
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content/content', 'excerpt' );
							}
						?>
					</div>
					<div class="flexCenter flex-1 md:justify-between mt-10">
						<?php mayasarji_the_posts_navigation(); ?>
					</div>
				<?php 
					else :
					get_template_part( 'template-parts/content/content', 'none' );
				endif;
				?>
			</div>
		</section>

	</main>

<?php
get_footer();
