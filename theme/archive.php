<?php
/**
 * The template for displaying archive pages
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$banner = get_theme_file_uri( 'assets/images/bg-1.webp' );
?>

	<main id="main" class="flex flex-col grow">
		<section class="section-banner shadow-section pt-32 pb-16 md:pt-40 md:pb-20 " style="background-image: url(<?php echo $banner; ?>)">
			<div class="container text-center relative z-50">
				<p class="text-sky-400 text-sm tracking-[0.3em] uppercase mb-3">
					<?php esc_html_e( 'Media Blog', 'mayasarji' ); ?>
				</p>
				<h1 class="page-title page-title-xl"><?php echo single_term_title('', false); ?></h1>
				
				<div class="text-lg md:text-xl max-w-2xl mx-auto text-foreground">
					<?php the_archive_description(); ?>
				</div>
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
