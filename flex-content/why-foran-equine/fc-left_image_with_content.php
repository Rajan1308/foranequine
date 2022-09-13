<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$design = get_sub_field( 'design', $id );
$liwc_title 	= get_sub_field( 'liwc_title', $id );
$liwc_sub_title 		= get_sub_field( 'liwc_sub_title', $id );
$liwc_content_block = get_sub_field('liwc_content_block', $id);
$liwc_featured_image = get_sub_field('liwc_featured_image', $id);
$liwc_icon = get_sub_field('liwc_icon', $id);
$liwx_ctas = get_sub_field('liwx_ctas', $id);
ob_start();

?>

<!-- About us -->
<section class="py-lg-5 py-4">
  <?php if($design == true ):?>
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-<?php if($liwc_featured_image):?>8<?php else:?>12<?php endif; ?> mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <?php if($liwc_title):?>
              <div class="title black">
                <h2 class="mb-3"><?= $liwc_title  ?></h2>
              </div>
              <?php endif; if($liwc_sub_title):?>
              <h5 class="mb-4"><?= $liwc_sub_title ?></h5>
              <?php endif; ?>
              <?php echo $liwc_content_block; ?>
              <?php if($liwx_ctas):?>
              <a href="<?=$liwx_ctas['url']?>" class="lm-btn"><span><?=$liwx_ctas['title']?></span> </a>
              <?php endif; ?>
          </div>
          <?php if($liwc_featured_image):?>
          <div class="col-md-4 mb-lg-0 mb-4 text-center rounded-img" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
              <img src="<?= $liwc_featured_image['url']?>" alt="<?= $liwc_featured_image['alt'] ?>" class="img-fluid">
          </div>
          <?php endif; ?>
      </div>
  </div>
  <?php else: ?>
    <div class="container os-row">              
      <div class="row align-items-center">
            <div class="col-lg-<?php if($liwc_featured_image):?>7<?php else:?>12<?php endif; ?> mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <?php if($liwc_title):?>
                <div class="title black">
                  <h2 class="mb-3"><?= $liwc_title  ?></h2>
                </div>
                <?php endif; if($liwc_sub_title):?>
                <h5 class="mb-4"><?= $liwc_sub_title ?></h5>
                <?php endif; ?>
                <?php echo $liwc_content_block; ?>

            </p>
            </div>
            <?php if($liwc_featured_image):?>
              <div class="col-sm-5 text-center" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                <div class="rounded-gray-img gray">
                  <?php if($liwc_icon):?>
                    <span class="icon left-top">
                        <img src="<?=$liwc_icon['url']?>" alt="<?=$liwc_icon['alt']?>">
                    </span>
                    <?php endif; ?>
                    <div class="inner">
                        <img src="<?= $liwc_featured_image['url']?>" alt="<?= $liwc_featured_image['alt'] ?>" class="img-fluid">
                    </div>
                  </div>
            </div>
            
            <?php endif; ?>
        </div>
    </div>
  <?php endif; ?>
</section>
<!-- end -->