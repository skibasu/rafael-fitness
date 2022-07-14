
<?php
if( have_rows('instructors') ): 
$title = get_field('title');
?>
<section class="section-instructors" id="instruktorzy">
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
         <?php
            while( have_rows('instructors') ) : the_row();
               $name = get_sub_field('name');
               $description = get_sub_field('description');
               $image_id = get_sub_field('picture');
               $image = wp_get_attachment_image( $image_id, 'portrait' );
         ?>
            <div class="section-instructors__card row mx-0">
               <div class="col  d-none d-md-block section-instructors__picture-col p-0">
                  <figure class="section-instructors__card-picture">
                     <?php echo $image;?>
                  </figure>
               </div>
               <div class="col section-instructors__description-col">
                  <figure class="section-instructors__card-picture-mobile d-md-none">
                     <?php echo $image;?>
                  </figure>
                  <h3 class="section-instructors__card-title"><?php echo $name;?></h3>
                  <?php if($description) : ?>
                  <p class="section-instructors__card-description"><?php echo $description;?></p>
                  <?php endif;?>
               </div>
            </div>
         <?php endwhile;?>  
      </div>
   </div>
</section>
<?php endif;