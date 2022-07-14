<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Art & Dance Lab
 * @since 1.0.0
 */

$logo_id = get_field('page_logo', 'options');
$logo = f_img($logo_id);
?>
<footer class="footer">
   <div class="container">
      <div class="d-flex justify-content-between">
         <div class="page-logo" style="width:100px">
            <a class="page-logo__link d-block" href="<?php echo get_home_url(); ?>">
            <?php echo $logo; ?>
            </a>
         </div>
         <p>© Copyright Art & Dance Lab <?php echo date('Y')?></p>
      </div>  
   </div>
</footer>
</div> <!-- /#page -->
<?php wp_footer(); ?>
</body>
</html>
