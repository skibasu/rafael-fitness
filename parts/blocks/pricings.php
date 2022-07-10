<?php
$title = get_field('title');
if(have_rows('pricings')):
?>
<section class="section-pricings">
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

      <?php while (have_rows('pricings')): the_row(); 
         $name = get_sub_field('name');
        $price = get_sub_field('price');
      ?>
      <div class="section-pricings__row row">

            <div class="col col-8 section-pricings__col-info">
               <div class="section-pricings__col-inner section-pricings__col-info-inner">
                  <?php echo $name;?>
               </div>
            </div>
            <div class="col col-4 section-pricings__col-price">
               <div class="section-pricings__col-inner section-pricings__col-price-inner">
                  <?php echo $price;?>zł
               </div>
            </div>
      </div>
      <?php endwhile;?>

   </div>
</section>
<?php endif;