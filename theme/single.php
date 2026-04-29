<?php
/**
 * The template for displaying all single posts
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
				get_template_part( 'template-parts/content/content', 'single' );
			endwhile;
		?>
	</main>

<?php
get_footer();
