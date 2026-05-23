<?php
/**
 * Template Name: About Page
 * 
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$banner_image = get_theme_file_uri( 'assets/images/maya-stage.webp' );
?>

	<main id="main" class="flex flex-col grow">
		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'about' );
			endwhile;
		?>
	</main>

<?php
get_footer();
