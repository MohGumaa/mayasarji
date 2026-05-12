<?php
/**
 * Template part for displaying the footer content
 *
 * @package mayasarji
 */

defined( 'ABSPATH' ) || exit;
?>

<footer 
	id="colophon" 
	class="stripe-texture overflow-hidden"
>

	<?php if ( is_active_sidebar( 'ms-footer-widget' ) ): ?>
		<div class="py-16 border-t border-white/6">
			<div class="container grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8">
				<?php dynamic_sidebar( 'ms-footer-widget' ); ?>
			</div>
		</div>
	<?php endif;?>

	<div class="border-t border-white/6 py-9">
		<div class="container flex flex-col md:flex-row items-center justify-between gap-2 text-sm text-foreground">
			<p class="text-center md:text-left">
				&copy; <?php echo date('Y');?> 
				<span class="text-sky-400">
					<?php echo esc_html(get_bloginfo('name'));?>
				</span>. 
				<?php esc_html_e('All rights reserved.®', 'mayasarji');?>
			</p>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'flex flex-wrap items-center max-lg:justify-center gap-x-5 gap-y-3 sub-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</div>
	</div>

</footer>
