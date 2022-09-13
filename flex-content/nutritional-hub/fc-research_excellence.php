<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$reb_title = get_sub_field( 're_title', $id ); 
$reb_sub_title = get_sub_field( 're_sub_title', $id ); 
$reb_content_block = get_sub_field( 're_content_block', $id ); 
$reb_image_top = get_sub_field( 're_image_top', $id ); 
$reb_second_image = get_sub_field( 're_second_image', $id ); 
$title_color = get_sub_field('title_color', $id);


ob_start();

?>

 <!-- About us -->
 <section class="py-lg-5 py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-<?php if($reb_image_top || $reb_second_image):?>6<?php else: ?>12<?php endif; ?> mb-4 mb-md-0 mb-3" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="">
                  <?php if($reb_title):?>
                    <div class="title <?php if($title_color==true):?>black<?php else:?> <?php endif; ?> mb-lg-4">
                        <h2><?= $reb_title ?></h2>
                    </div>
                    <?php endif; ?>
                    <p class="font-weight-semi-bold mb-5">
                      <?= $reb_sub_title ?>
                    </p>

                    <div class="mb-5">
                      <?php echo $reb_content_block; ?>
                    </div>
                </div>
            </div>
            <?php if(!empty($reb_image_top) || !empty($reb_second_image)):?>
            <div class="col-md-6 mb-lg-0 mb-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="position-relative two-images h-100">
                <?php if($reb_image_top):?>
                <div class="top-img">
                    <img src="<?=$reb_image_top['url']?>" alt="<?=$reb_image_top['alt']?>" class="w-100">
                </div>
                <?php endif; if($reb_second_image):?>
                <div class="bottom-img">
                    <img src="<?= $reb_second_image['url']?>" alt="<?= $reb_second_image['alt']?>" class="w-100">
                </div>
                <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end -->