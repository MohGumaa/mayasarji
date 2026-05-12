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

defined( 'ABSPATH' ) || exit;

get_header();

$banner      = get_theme_file_uri( 'assets/images/banner.webp' );
$site_name   = get_bloginfo('name');
$tagline     = get_bloginfo('description');
$is_front    = is_front_page();
?>

	<main id="main" class="flex flex-col grow">

		<header 
			class="section-banner shadow-section pt-32 pb-16 md:pt-40 md:pb-20"
			style="background-image: url(<?php echo esc_url($banner); ?>)"
		>
			<div class="container text-center relative z-50">

				<?php if ( $is_front ) : ?>

					<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
						<?php echo esc_html($tagline); ?>
					</p>

					<h1 class="page-title page-title-xl">
						<?php echo esc_html($site_name); ?>
					</h1>

				<?php else : ?>

					<p class="text-sky-400 text-lg tracking-[0.3em] uppercase mb-1">
						<?php echo esc_html($site_name); ?>
					</p>

					<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
						<?php echo esc_html($tagline); ?>
					</p>

					<h1 class="page-title page-title-xl">
						<?php single_post_title(); ?>
					</h1>

				<?php endif; ?>

			</div>
		</header>

		<section class="py-16">
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
