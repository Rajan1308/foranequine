<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$frt_title 		= get_sub_field( 'frt_title', $id );
$frt_related_product = get_sub_field('frt_related_product', $id);

ob_start();

?>

<!-- Frequently Recommended Together -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="title black center mb-4">
                  <h2><?= $frt_title ?></h2>
              </div>
          </div>
      </div>
      <?php if($frt_related_product):?>
      <div class="row align-items-center">
          <div class="col mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="frequently-recommended-carousel">
                  <div class="owl-carousel owl-theme dots-style2">
                    <?php foreach($frt_related_product as $frp):
                      setup_postdata( $frp );
                      ?>
                      <div class="item">
                          <div class="product-box">
                              <div class="img-box">
                                  <img src="<?= the_post_thumbnail_url( $frp->ID )?>" alt="" class="img-fluid">
                              </div>
                              <div class="content">
                                  <h3><?= get_the_title($frp->ID); ?></h3>
                                  <p><?= get_the_excerpt( $frp->ID )?>
                                  </p>
                                  <a href="<?php the_permalink($frp->ID); ?>"> <?php _e('View Product', 'foranequine'); ?></a>
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