<?php 
$image = get_the_post_thumbnail(null, 'hero-picture');
if($image) :
?>
<section class="section-hero position-relative">
 <?php get_template_part('parts/components/page-logo'); ?>
   <div class="section-hero__full-container" id="hero-container">
      <?php echo $image;?>
   </div>
</section>
<?php endif;
