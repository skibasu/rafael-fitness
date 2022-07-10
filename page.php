<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Art & Dance Lab
 * @since 1.0.0
 */

get_header();
the_post();
?>
	<main class="page-content">
      <?php get_template_part( 'parts/components/hero' );?>
      <?php the_content(); ?>
	</main>
<?php
get_footer();
