<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$bwfc_background_image 		= get_sub_field( 'bwfc_background_image', $id );
$bwfc_icon_with_content = get_sub_field('bwfc_icon_with_content', $id);

ob_start();

?>

  <!--  -->
  <section class="bg24 py-lg-5"  style="background-image:url('<?=$bwfc_background_image['url']?>') ;">
    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-7"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <?php if($bwfc_icon_with_content):?>
                <div class="row">
                  <?php foreach($bwfc_icon_with_content as $bwfcWithcontent):?>
                    <div class="col-lg-6 text-center">
                        <div class="icon mb-4">
                            <img src="<?=$bwfcWithcontent['bwfciwc_icon']['url']?>" alt="<?=$bwfcWithcontent['bwfciwc_icon']['alt']?>" class="img-fluid">
                        </div>
                        <h5 class="font-weight-bold text-main"><?=$bwfcWithcontent['bwfciwc_title'] ?></h5>
                        <p class="text-white"><?=$bwfcWithcontent['bwfciwc_content'] ?></p>
                        <a href="<?=$bwfcWithcontent['bwfciwc_ctas']['url'] ?>" class="lm-btn"><span><?=$bwfcWithcontent['bwfciwc_ctas']['title'] ?></span></a>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end -->