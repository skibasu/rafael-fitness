<?php
$title = get_field('title');
$description = get_field('description');
$image_id = get_field('picture');
$image = wp_get_attachment_image( $image_id, 'medium-picture' );
?>
<section class="section-about" id="o-nas">
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
         <div class="col col-4 section-about__image-col d-none d-lg-block">
            <?php if($image_id) {
               echo $image;
               }?>
         </div>
         <div class="col col-12 col-lg-8 section-about__content-col ">
            
            <div class="section-about__content-col-inner h-100 position-relative">
               <?php if($image_id) : ?> 
                  <div class="section-about__mobile-background w-100 h-100 d-lg-none position-absolute">
                     <?php echo $image; ?>
                  </div>
                   <div class="section-about__overlay w-100 h-100 d-lg-none position-absolute"></div>
               <?php endif; ?>
               <div class="section-about__description  position-relative w-100 h-100">
                  <?php the_field('description');?>
               </div>
            </div>
         </div> 
      </div>
   </div>
</section>
