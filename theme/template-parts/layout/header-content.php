<?php
/**
 * Template part for displaying the header content
 *
 * @package mayasarji
 */
?>

<header id="site-header" class="fixed top-0 left-0 right-0 z-50 h-18 transition-all duration-400">
	<div class="container flex items-center justify-between h-full">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="font-bold text-[1.35rem] tracking-[0.12em] uppercase text-white">
			<?php bloginfo( 'name' ); ?><span class="text-primary">.</span>
		</a>
		<nav id="site-navigation" class="hidden md:block" aria-label="<?php esc_attr_e( 'Main Navigation', 'mayasarji' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'flex items-center gap-10 nav-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>
		<button id="hamburger" class="md:hidden flex flex-col gap-1.25 cursor-pointer p-1 bg-transparent border-0" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mayasarji' ); ?></button>
	</div>
</header>
