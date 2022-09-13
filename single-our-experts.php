<?php
/**
 * The template for displaying all single posts
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
get_template_part( 'global-templates/inner-hero' );

$content_block = get_field('content_block', $post->ID);
$oe_expertise  = get_field('oe_expertise', $post->ID);
$oe_quote      = get_field('oe_quote', $post->ID);
$our_experts_explore_latest__title = get_field('our_experts_explore_latest__title', 'options');
$args = [
    'posts_per_page'   => -1,
    'post_status'      => 'publish',
    'post_type'        => 'nutritionals',
    'meta_key'         => 'our_expert',
    'meta_value'       => $post->ID
];

$wp_query = new WP_Query( $args );

?>

<!-- os-row -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row mb-4">
          <div class="col">
              <a class="back-btn" href="expert-nutritional-team.html"><svg xmlns="http://www.w3.org/2000/svg" width="6.899" height="11.998" viewBox="0 0 6.899 11.998">
                  <path id="back-light" d="M13.756,12.051l-5.282-5.2,5.282-5.2-.816-.8-6.083,6,6.083,6Z" transform="translate(-6.857 -0.857)" fill="#000"/>
                </svg> Back</a>
          </div>
      </div>
      <div class="row align-items-center">
          <div class="col-sm-8" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title black  mb-4">
                  <h2><?= get_the_title($post->ID)?></h2>
                  <a href="#" class="aye-btn"><img src="<?= get_template_directory_uri()?>/ui/media/images/question-circle-0.svg" alt=""> Ask our Experts</a>
              </div>
              <?php echo $content_block; ?>
              <?php if($oe_expertise):?>
                  <div class="mt-4">
                    <?php foreach($oe_expertise as $oe):?><a href="#" class="link_ mr-3 mb-2"><?= $oe['oee_expertise'] ?></a><?php endforeach; ?>
                  </div>
                  <?php endif; ?>
          </div>
          <?php if(get_the_post_thumbnail_url( $post->ID )):?>
          <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="rounded-img medium">
                  <img src="<?= get_the_post_thumbnail_url($post->ID)?>" alt="<?= get_the_title($post->ID)?>" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
      </div>
      <?php if($oe_quote):?>
      <div class="row oc-section white py-4">
          <div class="col">
              <div class="content-box">
                  <div class="p-lg-4">
                      <p class="font-italic"><?= $oe_quote ?></p>
                  </div>
              </div>
          </div>
      </div>
      <?php endif; ?>
  </div>
</section>
<!-- end -->

<!-- Explore Latest Nutritional Articles -->
<?php   if( $wp_query->have_posts() ): ?>
<section class="py-lg-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if($our_experts_explore_latest__title):?>
                <div class="title center black mb-4">
                    <h2><?= $our_experts_explore_latest__title ?></h2>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="elna-carousel">
                    <div id="owl-carousel" class="owl-carousel owl-theme">
                    <?php while( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                        <div class="item">
                            <div class="filter-box">
                                <div class="img-box mb-3">
                                    <a href="<?= get_the_permalink( $post->ID )?>" class="vh-center rm"><?php _e('Read More', 'foranequine');?></a>
                                    <img src="<?= get_the_post_thumbnail_url( $post->ID )?>" alt="<?= get_the_title($post->ID) ?>" class="img-fluid">
                                </div>
                                <div class="p-3">
                                    <h5><?= get_the_title($post->ID) ?></h5>
                                    <p><?= get_the_excerpt($post->ID) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end -->

<?php
get_template_part('global-templates/common_cta');
get_footer();
