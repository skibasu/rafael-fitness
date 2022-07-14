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
<body <?php body_class('overflow-hidden, w-100'); ?> >

<div id="page" class="position-relative w-100 overflow-hidden">
   <?php get_template_part( 'parts/components/header-desktop' );?>
   <?php get_template_part( 'parts/components/header-mobile' );?>
   <?php get_template_part( 'parts/components/menu-mobile' );?>
   <?php get_template_part( 'parts/components/overlay' );?>
     



	
