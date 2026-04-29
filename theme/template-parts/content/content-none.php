<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @package mayasarji
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="none-page">

	<div class="container">

		<?php if ( is_search() ) : ?>
			<h1 class="page-title">
				<?php
				printf(
					/* translators: 1: search result title. 2: search term. */
					'<h1 class="page-title">%1$s <span>%2$s</span></h1>',
					esc_html__( 'Search results for:', 'mayasarji' ),
					get_search_query()
				);
				?>
			</h1>
		<?php else :?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'mayasarji' ); ?></h1>
		<?php endif; ?>

		<div <?php mayasarji_content_class( 'page-content' ); ?>>
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :
				?>

				<p>
					<?php esc_html_e( 'Your site is set to show the most recent posts on your homepage, but you haven&rsquo;t published any posts.', 'mayasarji' ); ?>
				</p>

				<p>
					<a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">
						<?php
						/* translators: 1: link to WP admin new post page. */
						esc_html_e( 'Add or publish posts', 'mayasarji' );
						?>
					</a>
				</p>

				<?php
			elseif ( is_search() ) :
				?>

				<p>
					<?php esc_html_e( 'Your search generated no results. Please try a different search.', 'mayasarji' ); ?>
				</p>

				<?php
				get_search_form();
			else :
				?>

				<p>
					<?php esc_html_e( 'No content matched your request.', 'mayasarji' ); ?>
				</p>

				<?php
				get_search_form();
			endif;
			?>
		</div>

	</div>

</section>
