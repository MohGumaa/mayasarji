<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @package mayasarji
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0d0d0d">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script>
		// Global theme configuration
		const THEME_CONFIG = {
			url: '<?php echo get_template_directory_uri(); ?>',
			assetsUrl: '<?php echo get_template_directory_uri(); ?>'
		};
	</script>
	  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="max-w-screen min-h-svh flex flex-col">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'mayasarji' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content" class="page-body w-full">
