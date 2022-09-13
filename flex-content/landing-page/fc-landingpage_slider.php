<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$ls_sliders 		= get_sub_field( 'ls_sliders', $id );

ob_start();

?>
 <!-- home banner -->
<section class="home-slider"  data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
  <div class="slider">
    <div id="foranSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
      <div class="carousel-inner">
        <button class="bs-slider-prev" type="button" data-bs-target="#foranSlider" data-bs-slide="prev">
          <img src="<?= get_template_directory_uri()?>/ui/media/images/prev-arrow.png" alt="prev-arrow" class="img-fluid">
        </button>
        <?php foreach($ls_sliders as $key=>$lsslider):?>       
          <div class="carousel-item <?php if($key==0):?>active<?php endif; ?>">
            <div class="banner-caption">
              <div class="container">
                <div class="row">
                  <div class="col-xl-8 col-md-5">
                    <h1 class="mb-2"><?php if($lsslider['lss_heading']):?><span><?= $lsslider['lss_heading'] ?></span><?php endif; if($lsslider['lss_sub_heading']):?><?=$lsslider['lss_sub_heading']?><?php endif; ?></h1>
                    <p class="mb-3"><?= $lsslider['lss_content'] ?></p>
                    <?php if($lsslider['lss_ctas'] ):?>
                      <a href="<?=$lsslider['lss_ctas']['url']?>" class="lm-btn">
                          <span><?=$lsslider['lss_ctas']['title']?></span>
                      </a>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner-img">
              <img src="<?=$lsslider['lss_slider_image']['url']?>" alt="<?=$lsslider['lss_slider_image']['alt']?>"  class="img-fluid">
            </div>
          </div>
        <?php endforeach; ?>
      

        <button class="bs-slider-next" type="button" data-bs-target="#foranSlider" data-bs-slide="next">
          <img src="<?= get_template_directory_uri()?>/ui/media/images/next-arrow.png" alt="next-arrow" class="img-fluid">
        </button>
      </div>
                  
      <div class="bs-carousel-nav">
        <div class="num"></div>
      </div>
    </div>
  </div>
</section>
<!-- end -->