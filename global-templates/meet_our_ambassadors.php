<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();

$args = array( 'post_type' => 'ambassadors', 'posts_per_page' => -1);
$the_query = new WP_Query( $args ); 

?>

 <div class="row">
  <div class="col"   data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
    <div class="ambassadors  cw-nav pt-3">
      <?php if ( $the_query->have_posts() ) :
        global $post;
      ?>
      <div class="owl-carousel owl-theme">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="item">
            <img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="<?= get_the_title($the_query->ID); ?>" class="img-fluid">
            <div class="text-content">
            <div class="top">
                <h4> <?= get_the_title($the_query->ID); ?></h4>
                <span><?php the_field('am_sub_title') ?></span>
                <div class="para">
                  <?php the_field('am_content') ?>
                </div>
            </div>
            <div class="bottom"><a href="<?php the_permalink(); ?>"><?php _e('Read More', 'foranequine')?></a></div>
            </div>
        </div>
        <?php endwhile;
          wp_reset_postdata(); ?>
          <?php else:  ?>
          <p><?php _e( 'Sorry, ambassadors not found!!' ); ?></p>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

