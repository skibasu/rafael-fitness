<?php 
$image = get_the_post_thumbnail(null, 'hero-picture', array( 'id' => 'background-image' ));
if($image) :
?>
<section class="section-hero position-relative overflow-hidden" id="hero-section">
  
   <div class="d-none d-lg-block"><?php get_template_part('parts/components/page-logo'); ?></div>
   <div class="gsap-background section-hero__full-container position-absolute w-100 h-100">
      <?php echo $image;?>
   </div>
</section>
<?php endif;
