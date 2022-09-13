<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$na_background_image = get_sub_field( 'na_background_image', $id ); 
$na_title = get_sub_field( 'na_title', $id ); 
$na_short_description = get_sub_field( 'na_short_description', $id ); 
$na_ctas = get_sub_field( 'na_ctas', $id );  



ob_start();

?>
 <!--  -->
 <section class="bg-img-section right-overlay mb-4" style="background-image: url('<?=$na_background_image['url']?>');">
    <div class="container h-100" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <div class="row h-100 align-items-center justify-content-end">
            <div class="col-lg-6 ml-auto">
              <?php if($na_title):?>
                <div class="title white">
                    <h2><?= $na_title ?></h2>
                </div>
                <?php endif; ?>
                <p class="text-white"><?= $na_short_description ?></p>
                <?php if($na_ctas ):?>
                <a href="<?=$na_ctas['url']?>" class="lm-btn"><span><?=$na_ctas['title']?></span> </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
