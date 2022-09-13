<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$moa_background_image = get_sub_field( 'moa_background_image', $id );
$meet_our_ambassadors_title 		= get_sub_field( 'meet_our_ambassadors_title', $id );
$meet_our_ambassadorscontent_block = get_sub_field('meet_our_ambassadorscontent_block', $id);
$do_you_want_to_show_ambassadors_list = get_sub_field('do_you_want_to_show_ambassadors_list', $id);

$args = array( 'post_type' => 'ambassadors', 'posts_per_page' => -1);
$the_query = new WP_Query( $args ); 
ob_start();

?>
<!-- success-customer -->

<section class="success-customer-section mb-lg-5 mb-4" style="background-image:url('<?= $moa_background_image ?>')">
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="bg-white">
                  <div class="row justify-content-center">
                      <div class="col-lg-8"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                          <div class="title black center pt-lg-5 pt-4 mb-4">
                              <h2><?= $meet_our_ambassadors_title ?></h2>
                          </div>
                          <div class="text-center"><?php echo $meet_our_ambassadorscontent_block; ?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php if($do_you_want_to_show_ambassadors_list==true): ?>
  <div class="bg-white pt-lg-5 pt-4">
      <div class="container">
        <?php if ( $the_query->have_posts() ) :
          global $post;
        ?>
          <div class="row justify-content-center">
              <div class="col-lg-11">
                <div class="row" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?php  get_template_part('loop-templates/meet_our_ambassadors_layout'); ?> 
                  <?php endwhile;
                  wp_reset_postdata(); ?>
                  <?php else:  ?>
                  <p><?php _e( 'Sorry, ambassadors not found!!' ); ?></p> 
                </div>
              </div>
          </div>
        <?php  endif; ?>
      </div>
  </div>
  <?php  endif; ?>
</section>
 
<!-- end -->
 