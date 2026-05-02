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

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
	  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="max-w-screen min-h-svh flex flex-col">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'mayasarji' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content" class="page-body w-full">
