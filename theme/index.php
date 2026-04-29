<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$banner = get_theme_file_uri( 'assets/images/banner.webp' );
?>

	<main id="main" class="flex flex-col grow">
		<section class="section-banner shadow-section pt-32 pb-16 md:pt-40 md:pb-20" style="background-image: url(<?php echo $banner; ?>)">
			<div class="container text-center relative z-50">

				<?php if ( is_front_page() ) : ?>
					<!-- Tagline (Montserrat style) -->
					<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
							<?php echo get_bloginfo('description'); ?>
					</p>

					<!-- Main Name (Playfair Display style) -->
					<h1 class="page-title page-title-xl">
							<?php echo get_bloginfo('name'); ?>
					</h1>

				<?php else : ?>
					<!-- Small label -->
					<p class="text-sky-400 text-lg tracking-[0.3em] uppercase mb-1">
							<?php echo get_bloginfo('name'); ?>
					</p>

					<!-- Subtitle -->
					<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
							<?php echo get_bloginfo('description'); ?>
					</p>

					<!-- Page/Post Title -->
					<h1 class="page-title page-title-xl">
							<?php single_post_title(); ?>
					</h1>
				<?php endif; ?>

			</div>
		</section>

		<section class="py-16 md:py-24">
			<div class="container">
				<?php if ( have_posts() ) :?>
					<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-10">
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
