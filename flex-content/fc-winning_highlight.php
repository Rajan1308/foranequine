<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$wh_title 		= get_sub_field( 'wh_title', $id );
$wh_winning_highlight = get_sub_field('wh_winning_highlight', $id); 

ob_start();

?>

<!-- our-service section -->
<section class="winning-highlight-section py-lg-5 py-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
  <div class="container">
    <?php if($wh_title):?>
      <div class="row">
          <div class="col">
              <div class="title black center mb-lg-5 mb-4">
                  <h2>Winning Highlight</h2>
              </div>
          </div>
      </div>
    <?php endif; if($wh_winning_highlight):?>
    <div class="row justify-content-center">
      <div class="col-lg-10 overflow-hidden">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 col">
            <div class="winning-highlight-carousel cw-nav">
                <div class="owl-carousel owl-theme">
                  <?php foreach($wh_winning_highlight as $wwh):?>
                    <div class="item">
                        <?php if($wwh['wh_featured_image']):?><div class="img-box"><img src="<?= $wwh['wh_featured_image']['url']?>" alt="<?= $wwh['wh_featured_image']['alt']?>"> </div><?php endif; ?>
                        <div class="caption">
                            <h5 class="m-0"><?= $wwh['wh_name']?></h5>
                            <p class="m-0"><?= $wwh['wh_specialist']?></p>
                            <span><?= $wwh['wh_location']?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<!--  -->
