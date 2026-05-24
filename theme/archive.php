<?php
/**
 * The template for displaying archive pages
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$tagline     = get_bloginfo('description');
$banner = get_theme_file_uri( 'assets/images/banner-1.webp' );
?>

<main id="main" class="flex flex-col grow">

	<header 
		class="section-banner shadow-section pt-32 pb-16 md:pt-40 md:pb-20"
		style="background-image: url(<?php echo esc_url($banner); ?>)"
	>
		<div class="container text-center relative z-50">
			
			<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
				<?php echo esc_html($tagline); ?>
			</p>

			<h1 class="page-title page-title-xl">
				<?php echo single_term_title('', false); ?>
			</h1>
			
			<?php if ( get_the_archive_description() ) : ?>
				<div class="text-sm md:text-base lg:text-xl max-w-2xl mx-auto text-foreground">
					<?php the_archive_description(); ?>
				</div>
			<?php endif; ?>

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
