<?php 
$logo_id = get_field('page_logo', 'options');
$logo = f_img($logo_id);

if( $logo ): 
?>

<div class="page-logo position-absolute" style="width:180px">
    <a class="page-logo__link d-block" href="<?php echo get_home_url(); ?>">
    <?php echo $logo; ?>
    </a>
</div>
<?php endif;