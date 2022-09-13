<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$nee_background_image 	= get_sub_field( 'nee_background_image', $id );
$nee_logo 		= get_sub_field( 'nee_logo', $id );
$nee_title = get_sub_field('nee_title', $id);
$nee_content_block = get_sub_field('nee_content_block', $id);
$nee_slide_content = get_sub_field('nee_slide_content', $id);
$nee_ctas = get_sub_field('nee_ctas', $id);
ob_start();

?>

 <!-- nutritionalExcellenceEthos -->
 <section class="nutritionalExcellenceEthos pt-lg-5 pt-4" style="background-image:url('<?=$nee_background_image?>')">
  <div class="container">
      <div class="row justify-content-center mb-4">
          <div class="col-lg-10" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title center white">
                <?php if($nee_logo ):?>
                  <div class="skew-box mb-3">
                    <span><img src="<?=$nee_logo['url']?>" alt="<?=$nee_logo['alt']?>"></span>
                  </div>
                  <?php endif; if($nee_title): ?>
                  <h2><?= $nee_title ?></h2>
                  <?php endif; ?>
              </div>
              <h5 class="text-center text-white"><?= $nee_content_block ?></h5>
          </div>
      </div>
  </div>
  <?php if($nee_slide_content):?>
  <div class="sister-brand-wrapper">
      <div class="siter-brand-carousel cw-nav mt-md-4" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
          <div class="owl-carousel owl-theme">
            <?php foreach($nee_slide_content as $nsc):?>
            <div class="item" style="background-image:url('<?=$nsc['neesc_image']['url']?>');">
              <div class="caption">
                  <div class="d-flex align-items-center">
                      <span class="d-block mr-2 timer-icon">
                          <img src="<?= get_template_directory_uri()?>/ui/media/images/timer.png" alt="">
                        </span> 
                        <div>
                          <h4><?=$nsc['neesc_title']?></h4>
                          <p><?=$nsc['neesc_short_description']?></p>
                        </div> 
                  </div>
              </div>  
            </div>
            <?php endforeach; ?>
             
          </div>
        </div>
  </div>
  <?php endif; if($nee_ctas):?>
  <div class="text-center py-lg-5 py-4">
      <a href="<?=$nee_ctas['url']?>" class="lm-btn"><span><?=$nee_ctas['title']?></span></a>
  </div>
  <?php endif; ?>
</section>
<!-- end -->