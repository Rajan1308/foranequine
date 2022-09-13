<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$nv_background_image = get_sub_field( 'nv_background_image', $id ); 
$nv_title = get_sub_field( 'nv_title', $id ); 
$nv_short_description = get_sub_field( 'nv_short_description', $id ); 
$nv_ctas = get_sub_field( 'nv_ctas', $id );  



ob_start();

?>
 <!--  -->
 <section class="bg-img-section right-overlay mb-4" style="background-image: url('<?=$nv_background_image['url']?>');">
    <div class="container h-100" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <div class="row h-100 align-items-center justify-content-end">
            <div class="col-lg-6 ml-auto">
              <?php if($nv_title):?>
                <div class="title white">
                    <h2><?= $nv_title ?></h2>
                </div>
                <?php endif; ?>
                <p class="text-white"><?= $nv_short_description ?></p>
                <?php if($nv_ctas ):?>
                <a href="<?=$nv_ctas['url']?>" class="lm-btn"><span><?=$nv_ctas['title']?></span> </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
