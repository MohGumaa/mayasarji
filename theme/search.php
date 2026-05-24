<?php
/**
 * The template for displaying search results pages
 *
 * @package mayasarji
 */

defined( 'ABSPATH' ) || exit;

get_header();

$banner = get_theme_file_uri( 'assets/images/banner-2.webp' );
$search_query = get_search_query();
?>

	<main id="main" class="flex flex-col grow">

		<header 
			class="section-banner shadow-section section-hero py-16 lg:py-40 flexCenter flex-col"
			style="background-image: url(<?php echo esc_url($banner); ?>)"
		>
			<div class="container text-center relative z-50">

				<h1 class="page-title page-title-md m-0!">
					<?php
					printf(
						/* translators: %s: search query */
						esc_html__( 'Search results for: %s', 'mayasarji' ),
						'<span class="text-sky-400">' . esc_html( $search_query ) . '</span>'
					);
					?>
				</h1>

			</div>
		</header>

		<section class="py-16 ms-reveal">
			<div class="container">

				<?php if ( have_posts() ) : ?>

					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content/content', 'excerpt' ); ?>
						<?php endwhile; ?>
					</div>

					<nav class="flexCenter md:justify-between mt-10" aria-label="Pagination">
						<?php mayasarji_the_posts_navigation(); ?>
					</nav>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

				<?php endif; ?>

			</div>
		</section>

	</main>

<?php
get_footer();
