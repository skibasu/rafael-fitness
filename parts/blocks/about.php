<?php
$title = get_field('title');
$description = get_field('description');
$image_id = get_field('picture');
$image = wp_get_attachment_image( $image_id, 'medium-picture' );
?>
<section class="section-about">
   <div class="container">
   <?php if($title): ?> 
      <div class="page-title">
         <div class="page-title__wrapper d-flex">
               <div class="page-title__left-gradient"></div>
               <h2 class="page-title__text"><?php echo $title;?></h2>
               <div class="page-title__right-gradient"></div>
          </div>
      </div>  
   <?php endif; ?>
   <div class="row">
       <div class="col col-4 section-about__image-col">
         <?php if($image_id) {
            echo $image;
            }?>
       </div>
       <div class="col col-8 section-about__content-col">
      <div class="section-about__content-col-inner">
         <?php the_field('description');?>
      </div>
      </div> 
   </div>
   </div>
</section>
