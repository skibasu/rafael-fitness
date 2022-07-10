<?php
$title = get_field('title');
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
if ( $wpb_all_query->have_posts() ) : 
?>
<section class="section-news">
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
   <div class="section-news__post-slider" id="news-slider-slick">
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
      $image = get_the_post_thumbnail( null, 'medium-picture' );
      ?>
      <div class="section-news__post-slide">
         <div class="row h-100">
             <div class="col col-8 section-news__content-col overflow-hiden">
               <div class="section-news__content-col-inner" >
                  <div class="section-news__content-col-inner-content slick-slide-content">
                     <h2 class="section-news__post-title" ><?php the_title()?></h2>
                  <?php the_content();?>
                  </div>
               </div>
            </div>
            <div class="col col-4 section-news__image-col" >
               <?php echo $image;?>
            </div>
           
         </div>
      </div>
      <?php endwhile;?>
   </div>
   <?php wp_reset_postdata(); ?>
      </div>
</section>
<?php endif;