<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$design = get_sub_field( 'riwc_design', $id );
$riwc_featured_image 	= get_sub_field( 'riwc_featured_image', $id );
$riwc_title 		= get_sub_field( 'riwc_title', $id );
$riwc_sub_title = get_sub_field( 'riwc_sub_title', $id );
$riwc_content_block = get_sub_field('riwc_content_block', $id);
$riwc_ctas = get_sub_field('riwc_ctas', $id);
$riwc_ctas_two = get_sub_field('riwc_ctas_two', $id);

$riwc_icon = get_sub_field('riwc__icon', $id);
$riwc_video_link = get_sub_field('riwc_video_link', $id);

$cta_on_featured_image = get_sub_field('cta_on_featured_image', $id);
$readmore_ctas = get_sub_field('readmore_ctas', $id);

ob_start();

?>

<!--  -->
<section class="py-lg-5 py-4">
<?php if($design == true ):?>
  <div class="container">
      <div class="row align-items-center">
          <?php if($riwc_featured_image):?>
          <div class="col-sm-5" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="rounded-img">
                  <img src="<?= $riwc_featured_image['url'] ?>" alt="<?= $riwc_featured_image['alt'] ?>" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
          <div class="col-sm-7" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <?php if($riwc_title):?>
              <div class="title black mb-3">
                  <h2><?= $riwc_title ?></h2>
              </div>
              <?php endif; ?>
              <?php if($riwc_sub_title):?><p class="font-weight-semi-bold"><?= $riwc_sub_title ?></p><?php endif; ?>
              <?php echo $riwc_content_block; ?>
              <?php if($riwc_ctas):?>
              <a href="<?= $riwc_ctas['url']?>" class="lm-btn d-inline-block">
                <span><?= $riwc_ctas['title']?></span>
              </a>
              <?php endif; ?>
              <?php if($riwc_ctas_two):?>
              <a href="<?= $riwc_ctas_two['url']?>" class="lm-btn black">
                <span><?= $riwc_ctas_two['title']?></span>
              </a>
              <?php endif; ?>
          </div>
      </div>
  </div>
  <?php else: ?>
    <div class="container os-row">              
      <div class="row align-items-center">
      <?php if($riwc_featured_image):?>
        <div class="col-sm-5 text-center" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
             <div class="col-sm-5 text-center" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                <div class="rounded-gray-img gray">
                  <?php if($riwc_video_link): ?>
                    <button class="play-btn"><img src="<?= get_template_directory_uri()?>/ui/media/images/play-btn.png" alt=""></button>
                    <div class="inner">
                    <a 
                        id="myfancybox"
                        class=""
                        data-fancybox href="<?= $riwc_video_link ?>">
                        <img src="<?= $riwc_featured_image['url'] ?>" alt="">
                    </a>
                  </div>
                  <?php else: ?>
                  <?php if($riwc_icon):?>
                    <span class="icon right-top">
                        <img src="<?=$riwc_icon['url']?>" alt="<?=$riwc_icon['alt']?>">
                    </span>
                    <?php endif; if($cta_on_featured_image==true): if($readmore_ctas):?>
                    <a href="<?=$readmore_ctas['url']?>" class="vh-center link-circle-img"><?=$readmore_ctas['title']?></a>
                    <?php endif; endif; ?>
                    <div class="inner">
                        <img src="<?= $riwc_featured_image['url'] ?>" alt="<?= $riwc_featured_image['alt'] ?>" class="img-fluid">
                    </div>
                  <?php endif; ?>
                </div>
                  
            </div>
        </div>
        <?php endif; ?>
        <div class="col-sm-7"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <?php if($riwc_title):?>
              <div class="title black ">
                  <h2><?= $riwc_title ?></h2>
              </div>
              <?php endif; ?>
              <?php echo $riwc_content_block; ?>
              <?php if($riwc_ctas):?>
              <a href="<?= $riwc_ctas['url']?>" class="lm-btn d-inline-block">
                <span><?= $riwc_ctas['title']?></span>
              </a>
              <?php endif; ?>
        </div>
        
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- end -->