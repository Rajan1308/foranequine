<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$osbrands_background_image 		= get_sub_field( 'osbrands_background_image', $id );
$osbrands_title = get_sub_field('osbrands_title', $id);
$osbrands_featured_banner = get_sub_field('osbrands_featured_banner', $id);
$osbrands_ctas = get_sub_field('osbrands_ctas', $id);
$osbrands_featured_content_block = get_sub_field('osbrands_featured_content_block', $id);


ob_start();

?>

<!-- We place the horse at -->
<section class="history-section pt-lg-5 pt-4" style="background-image:url('<?= $osbrands_background_image ?>')">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="text-center text-white mb-lg-5">
                <h2><span><?= $osbrands_title ?></span></h2>
            </div>
            <?php if($osbrands_ctas):?>
            <div class="text-center py-lg-5 py-4">
              <a href="<?=$osbrands_ctas['url']?>" class="lm-btn"><span><?= $osbrands_ctas['title'] ?></span></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-9">
        <?php if($osbrands_featured_banner ):?>
          <div class="d-flex justify-content-center mb-lg-5 mb-4"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div><img src="<?= get_template_directory_uri()?>/ui/media/images/lr-icon.png" alt="" class="img-fluid"></div>
              <div><img src="<?=$osbrands_featured_banner['url']?>" alt="<?=$osbrands_featured_banner['url']?>" class="img-fluid"></div>
              <div><img src="<?= get_template_directory_uri()?>/ui/media/images/lr-icon.png" alt="" class="img-fluid"></div>
          </div>
        <?php endif; ?> 
      </div>
    </div>
  </div>
      <?php if($osbrands_featured_content_block): ?>
        <div class="sister-brand-wrapper">
              <div class="siter-brand-carousel cw-nav mt-md-4" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                  <div class="owl-carousel owl-theme">
                  <?php foreach($osbrands_featured_content_block as $key=>$osbrandsfeaturedcontentblock):?>
                    <div class="item" style="background-image:url('<?= $osbrandsfeaturedcontentblock['osbrands_featured_image']['url']?>');">
                      <div class="caption">
                        <h4><?= $osbrandsfeaturedcontentblock['osbrands_featured_title']?></h4>
                        <p><?= $osbrandsfeaturedcontentblock['osbrands_featured_content']?></p>
                      </div>  
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
          </div>
        
      <?php endif; ?>
          
      
  
</section>
<!-- end -->