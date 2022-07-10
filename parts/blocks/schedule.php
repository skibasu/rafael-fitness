<?php
if( have_rows('schedule') ): 
$title = get_field('title');
?>
<section class="section-schedule">
   <div class="container">
   <?php if ($title): ?> 

      <div class="page-title">
         <div class="page-title__wrapper d-flex">
               <div class="page-title__left-gradient"></div>
               <h2 class="page-title__text"><?php echo $title;?></h2>
               <div class="page-title__right-gradient"></div>
          </div>
      </div>  
   <?php endif;?>
   <?php while( have_rows('schedule')):  the_row();
   $day_title = get_sub_field('day_title');?>
      <div class="section-schedule__day">
         <div class="section-schedule__day-title">
            <h3><?php echo $day_title;?></h3>
         </div>
            <?php if(have_rows('hours_row')):?>
               <div class="section-shedule__row row mx-0">
                  <?php while(have_rows('hours_row')): the_row();
                     $hours_from = get_sub_field('hours_from');
                     $hours_to = get_sub_field('hours_to');
                     $dance = get_sub_field('dance');
                  ?>
                  <div class="col col-4 section-schedule__hours-col  section-schedule__hours-col">
                     <div class="section-schedule__hours">
                        <span><?php echo $hours_from;?></span> : <span><?php echo $hours_to;?></span>
                     </div>
                  </div>
                  <div class="col col-8 section-schedule__dance-col">
                     <div class="section-schedule__dance">
                        <?php echo $dance;?>
                     </div>
                  </div>
                  <?php endwhile; ?>
               </div>
            <? endif;?>
       </div>
   <?php endwhile;?>
   </div>
</section>
<?php endif;