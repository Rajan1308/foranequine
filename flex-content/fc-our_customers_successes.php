<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$ocs_title 		= get_sub_field( 'ocs_title', $id );
$ocs_background_image = get_sub_field('ocs_background_image', $id);
$ocs_content_block = get_sub_field('ocs_content_block', $id);
$ocs_images = get_sub_field('ocs_images', $id);
$ocs_ctas = get_sub_field('ocs_ctas', $id);

ob_start();

?>

  <!-- success-customer -->
<section class="success-customer-section" style="background-image:url('<?= $ocs_background_image ?>')">
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="bg-white">
                  <div class="row justify-content-center">
                      <div class="col-lg-8 mb-5"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                          <?php if($ocs_title):?>
                          <div class="title black center pt-lg-5 pt-4 mb-4">
                              <h2><?= $ocs_title ?></h2>
                          </div>
                          <?php endif; ?>
                          <div class="text-center">
                          <?php echo $ocs_content_block; ?>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="bg-white">
    <?php if($ocs_images):?>
      <div class="container">
          <div class="row"   data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="col">
                  <div class="cs-carousel  cw-nav">
                      <div class="owl-carousel owl-theme">
                        <?php foreach($ocs_images as $ocsimages):?>
                          <div class="item">
                            <img src="<?= $ocsimages['url']?>" alt="<?= $ocsimages['alt']?>" class="img-fluid">
                          </div>
                        <?php endforeach; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <?php endif; ?>
    <?php if($ocs_ctas):?>
      <div class="text-center py-lg-5 py-4">
        <a href="<?= $ocs_ctas['url']?>" class="lm-btn"><span><?= $ocs_ctas['title']?></span></a>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- end -->