<?php
/**
 * The header for our Art & Dance Lab
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Art & Dance Lab
 * @since 1.0.0
 */

get_template_part('parts/global/html-head');
?>
<body <?php body_class(); ?> >

<div id="page position-relative">
	<header id="header" class="header">
           <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => "page-menu" ) ); ?>
	</header>


	
