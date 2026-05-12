<?php
/**
 * Template part for displaying the header content
 *
 * @package mayasarji
 */

defined( 'ABSPATH' ) || exit;
?>

<header id="site-header" class="fixed top-0 left-0 right-0 z-50 h-18 transition-all duration-400">
	<div class="container flex items-center justify-between h-full">

		<a 
			href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="font-bold text-[1.35rem] tracking-[0.12em] uppercase text-white"
		>
			<?php bloginfo( 'name' ); ?><span class="text-sky-400">.</span>
		</a>

		<nav 
			id="site-navigation" 
			class="max-lg:fixed max-lg:left-0 max-lg:top-18 max-lg:w-full max-lg:h-[calc(100dvh-72px)] max-lg:bg-black max-lg:z-50 max-lg:overflow-y-auto max-lg:whitespace-nowrap max-lg:transition-all max-lg:duration-700 max-lg:ease-in-out max-lg:px-3 max-lg:pt-4 max-lg:pb-20 max-lg:-translate-x-full" 
			aria-label="<?php esc_attr_e( 'Main Navigation', 'mayasarji' ); ?>"
		>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container'      => false,
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'flex flex-col gap-6 h-full min-lg:flex-row min-lg:items-center min-lg:gap-10 nav-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
			?>
		</nav>

		<button 
			id="hamburger" 
			class="lg:hidden flex flex-col justify-center items-end gap-1.25 w-6 h-6 cursor-pointer bg-transparent border-0 outline-0 group" 
			aria-controls="primary-menu" 
			aria-expanded="false">
			<span class="w-6 h-0.5 bg-white/60 group-hover:bg-white transition-all duration-300"></span>
      <span class="w-5 h-0.5 bg-white/60 group-hover:bg-white transition-all duration-300"></span>
      <span class="w-4 h-0.5 bg-white/60 group-hover:bg-white transition-all duration-300"></span>
		</button>
	</div>
</header>
