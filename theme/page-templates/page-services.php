<?php
/**
 * Template Name: Services Page
 * 
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

?>

	<main id="main" class="flex flex-col grow">
		<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'services' );
			endwhile;
		?>
	</main>

<?php
get_footer();
