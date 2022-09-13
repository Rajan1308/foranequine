<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$frt_title 		= get_sub_field( 'bs_title', $id );
$best_sellers_product = get_sub_field('best_sellers_product', $id);

ob_start();

?>

<!-- Frequently Recommended Together -->
<section class="py-lg-5 py-4">
  <div class="container">
          <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="col">
              <div class="title black center mb-4">
                  <h2><?= $frt_title ?></h2>
              </div>
          </div>
      </div>
      <?php if($best_sellers_product):?>
        <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="col">
              <div class="best-sellers-carousel cw-nav2">
                  <div class="owl-carousel owl-theme ">
                    <?php foreach($best_sellers_product as $frp):
                      setup_postdata( $frp );
                      ?>
                      <div class="item">
                          <div class="product-box horizontal">
                            <div class="row">
                              <div class="col-5">
                                <div class="img-box">
                                    <img src="<?= the_post_thumbnail_url( $frp->ID )?>" alt="" class="img-fluid">
                                </div>
                              </div>
                              <div class="col-7">
                                <div class="content">
                                  <div>
                                    <h3><?= get_the_title($frp->ID); ?></h3>
                                    <p><?= get_the_excerpt( $frp->ID )?>
                                    </p>
                                  </div>
                                    <a href="<?php the_permalink($frp->ID); ?>"> <?php _e('View Product', 'foranequine'); ?></a>
                                </div>
                              </div>
                            </div>
                          </div> 
                      </div>
                      <?php endforeach; wp_reset_postdata(); ?>
                  </div>
              </div>
          </div>
      </div>
      <?php endif; ?>
  </div>
</section>
<!--  -->