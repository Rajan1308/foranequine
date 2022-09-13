<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$osbrands_background_image 		= get_sub_field( 'osbrands_background_image', $id );
$osbrands_title = get_sub_field('osbrands_title', $id);
$osbrands_featured_banner = get_sub_field('osbrands_featured_banner', $id);
$osbrands_featured_content_block = get_sub_field('osbrands_featured_content_block', $id);


ob_start();

?>

<!-- We place the horse at -->
<section class="sister-brand-section pt-lg-5 pt-4" style="background-image:url('<?= $osbrands_background_image ?>')">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title white center mb-lg-5 mb-4 text-uppercase">
                  <h2><span><?= $osbrands_title ?></span></h2>
              </div>
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
            <?php endif; if($osbrands_featured_content_block): ?>
              <div class="row">
                <?php foreach($osbrands_featured_content_block as $key=>$osbrandsfeaturedcontentblock):?>
                  <div class="col-md-6"  data-aos="<?php if($key==0):?>fade-left<?php else: ?>fade-right<?php endif; ?>" data-aos-duration="900" data-aos-delay="100">
                      <div class="phs-box">
                          <div class="text-center mb-4">
                              <h5  class=" text-white"><?= $osbrandsfeaturedcontentblock['osbrands_featured_title']?></h5>
                          </div>
                          <div class="phs-img-box">
                              <img src="<?= $osbrandsfeaturedcontentblock['osbrands_featured_image']['url']?>" alt="<?= $osbrandsfeaturedcontentblock['osbrands_featured_image']['alt']?>" class="img-fluid">
                          </div>
                          <div class="text-content <?php if($key==0):?>bg-red text-white right<?php else: ?>bg-white<?php endif; ?>">
                              <div class="c-logo">
                                  <img src="<?= $osbrandsfeaturedcontentblock['osbrands_featured_logo']['url']?>" alt="<?= $osbrandsfeaturedcontentblock['osbrands_featured_logo']['alt']?>" class="object-fit-contain">
                              </div>
                              <h5><?= $osbrandsfeaturedcontentblock['osbrands_featured_sub_title']?>
                              </h5>
                              <p><?= $osbrandsfeaturedcontentblock['osbrands_featured_content']?></p>
                          </div>
                      </div>
                  </div>
                <?php endforeach; ?>
                 
              </div>
            <?php endif; ?>
          </div>
      </div>
  </div>
</section>
<!-- end -->