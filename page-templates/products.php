<?php
/**
 * Template Name: Products Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();
get_header();
get_template_part('global-templates/inner-hero');

$args = [
  'posts_per_page'   => -1,
  'post_status'      => 'publish',
  'post_type'        => 'supplements'
];

$wp_query = new WP_Query( $args );



?>
  <!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row align-items-center">
          <div class="col mb-lg-0 mb-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
            <?php the_content()?>
          </div>
      </div>
      <div class="row" data-aos="fade" data-aos-delay="300" data-aos-duration="2000">
          <div class="col product-filter-tabs">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="filterbygoal-tab" data-bs-toggle="tab" data-bs-target="#filterbygoal" type="button" role="tab" aria-controls="filterbygoal" aria-selected="true">Filter by Goal/ Supporting</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="filterbyconcern-tab" data-bs-toggle="tab" data-bs-target="#filterbyconcern" type="button" role="tab" aria-controls="filterbyconcern" aria-selected="false">Filter by Specific Concern</button>
                  </li>
                </ul>
          </div>
      </div>
      <div class="row">
          <div class="col">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="filterbygoal" role="tabpanel" aria-labelledby="filterbygoal-tab">
                      <div class="row">
                          <div class="col-md-3" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2000">
                              <div class="filter-category">
                              <?php 
                                echo do_shortcode('[fe_widget title="" id="20099" show_count="yes"]'); 
                                 
                            ?>
                              </div>
                              
                          </div>
                          <div class="col-md-9" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000">
                              <div class="row mb-4">
                                  <div class="col">
                                  <?php 
                                      echo do_shortcode('[fe_chips id="20099" mobile="yes" reset="yes"]  '); 
                                          $categories = get_categories(  );
                                  ?>
                                  </div>
                              </div>
                              <?php  if( $wp_query->have_posts() ): ?>
                              <div class="row" id="productFilters">
                                <?php    while( $wp_query->have_posts() ): $wp_query->the_post();  ?>
                                  <div class="col-lg-4 mb-4">
                                      <div class="product-box">
                                      <div class="img-box">
                                          <img src="<?= get_the_post_thumbnail_url( $post->ID )?>" alt="<?= get_the_title($post->ID) ?>" class="img-fluid">
                                      </div>
                                      <div class="content">
                                          <h3><?= get_the_title($post->ID) ?></h3>
                                          <p><?= get_the_excerpt($post->ID) ?></p>
                                          <a href="<?= get_the_permalink( $post->ID )?>"><?php _e(' View Product', 'foranequine'); ?></a>
                                      </div>
                                      </div> 
                                  </div>
                                  <?php endwhile; ?>
                                  
                                    
                              </div>
                              <?php  endif;  ?>
                              <!-- <div class="row">
                                  <div class="col text-center">
                                      <button class="btn btn-dark rounded" type="button" disabled>
                                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                          Loading...
                                        </button>
                                  </div>
                              </div> -->
                          </div>
                      </div> 
                  </div>
                  <div class="tab-pane fade" id="filterbyconcern" role="tabpanel" aria-labelledby="filterbyconcern-tab">
                      Same content as Filter by Goal/ Supporting tab section
                  </div>
                </div>
          </div>
      </div>
  </div>
</section>
<!-- end -->
<?php 
// Commen CTAs Section
get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
 