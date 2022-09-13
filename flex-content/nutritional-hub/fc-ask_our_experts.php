<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$aoe_background_image = get_sub_field( 'aoe_background_image', $id ); 
$aoe_title = get_sub_field( 'aoe_title', $id ); 
$aoe_short_description = get_sub_field( 'aoe_short_description', $id ); 
$aoe_ctas = get_sub_field( 'aoe_ctas', $id );  



ob_start();

?>
 <!--  -->
 <section class="bg-img-section left-overlay mb-4" style="background-image: url('<?=$aoe_background_image['url']?>');">
    <div class="container h-100" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <div class="row h-100 align-items-center">
        <div class="col-lg-6">
              <?php if($aoe_title):?>
                <div class="title white">
                    <h2><?= $aoe_title ?></h2>
                </div>
                <?php endif; ?>
                <p class="text-white"><?= $aoe_short_description ?></p>
                <?php if($aoe_ctas ):?>
                <a href="<?=$aoe_ctas['url']?>" class="lm-btn"><span><?=$aoe_ctas['title']?></span> </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
