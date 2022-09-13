<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$flb_background_image 	= get_sub_field( 'flb_background_image', $id );
$flb_title 		= get_sub_field( 'flb_title', $id );
$flb_content_block = get_sub_field('flb_content_block', $id);
$flb_ctas = get_sub_field('flb_ctas', $id);
$flb_featured_image = get_sub_field('flb_featured_image', $id);

ob_start();

?>

<!--  -->
<section class="specialisedManufacturing" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100" style="<?=$flb_background_image?>">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 mb-md-0 mb-3 position-relative">
            <div class="skew-bg1">
              <div class="inner">
                <?php if($flb_title):?>
                  <div class="title">
                      <h5><?= $flb_title ?></h5>
                  </div>
                  <?php endif; ?>
                  <p><?php echo $flb_content_block; ?></p>
                  <?php if($flb_ctas):?>
                  <a href="<?= $flb_ctas['url']?>" class="lm-btn d-inline-block">
                      <span><?= $flb_ctas['title']?></span>
                  </a>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <?php if($flb_featured_image):?>
            <div class="col-md-2">
                <div class="pro-bucket">
                    <img src="<?=$flb_featured_image['url']?>" alt="<?=$flb_featured_image['alt']?>" class="img-fluid">
                </div>
            </div>
          <?php endif; ?>
      </div>
  </div>
</section>
<!-- end -->