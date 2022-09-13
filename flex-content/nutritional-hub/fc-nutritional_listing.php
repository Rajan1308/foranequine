<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$nl_title 		= get_sub_field( 'nl_title', $id ); 
ob_start();

$recent = strtotime( 'last week' );
$args = [
    'posts_per_page'   => 2,
    'post_status'      => 'publish',
    'post_type'        => 'nutritionals',
    'ignore_sticky_posts' => true,
    'no_found_rows' => true,
    'update_post_meta_cache' => false,
    'date_query' => [
        'after' => [
            'year' => date( 'Y', $recent ),
            'month' => date( 'n', $recent ),
            'day' => date( 'j', $recent ),
        ]
    ],
];

$wp_query = new WP_Query( $args );


?>
 <!--  -->
<section>
    <div class="container" id="nurtition-filter">
        <div class="row">
            <div class="col" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="title black mb-4">
                    <h2><?= $nl_title  ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php   if( $wp_query->have_posts() ): ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                    <div class="filter-category">
                    
                        <div class="raa_tab">
                            <img src="<?= get_template_directory_uri()?>/ui/media/images/filter.png" alt=""> Filter By Category
                        </div>
                        <div class="content-panel">
                        <?php 
                            echo do_shortcode('[fe_widget title="" id="19935" show_count="yes"]'); 
                                $categories = get_categories(  );
                         ?>
                        </div>
                    </div>



                    <!-- <div class="filter-category">
                      <div class="raa_tab">Main Tags</div>
                      <div class="content-panel">
                        <div class="sub"><span>Breeding &amp; Stud</span> <span>8</span></div>

                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Broodmares </span> <span>(8)</span></label>
                       </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                        </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Stallions</span> <span>(8)</span></label>
                        </div>
                        <div class="sub"><span>Broodmare</span> <span>8</span></div>

                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Broodmares </span> <span>(8)</span></label>
                       </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                        </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Stallions</span> <span>(8)</span></label>
                        </div>
                        <div class="sub"><span>Breeding &amp; Stud</span> <span>8</span></div>

                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Broodmares </span> <span>(8)</span></label>
                       </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                        </div>
                        <div class="custom-checkboxf">
                            <input type="checkbox">
                            <label for=""><span>Stallions</span> <span>(8)</span></label>
                        </div>
                      </div>
                    </div>
                    <div class="filter-category">
                        <div class="raa_tab">Product Tags</div>
                        <div class="content-panel">
                            <div class="sub"><span>Breeding &amp; Stud</span> <span>8</span></div>
    
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Broodmares </span> <span>(8)</span></label>
                           </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                            </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Stallions</span> <span>(8)</span></label>
                            </div>
                            <div class="sub"><span>Broodmare</span> <span>8</span></div>
    
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Broodmares </span> <span>(8)</span></label>
                           </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                            </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Stallions</span> <span>(8)</span></label>
                            </div>
                            <div class="sub"><span>Breeding &amp; Stud</span> <span>8</span></div>
    
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Broodmares </span> <span>(8)</span></label>
                           </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Foals & Youngstock </span> <span>(8)</span></label>
                            </div>
                            <div class="custom-checkboxf">
                                <input type="checkbox">
                                <label for=""><span>Stallions</span> <span>(8)</span></label>
                            </div>
                          </div>
                    </div> -->
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="filter-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <?php 
                            echo do_shortcode('[fe_chips id="19935" mobile="yes" reset="yes"]  '); 
                                $categories = get_categories(  );
                         ?>
                         </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link active" id="reset-all-tab" data-toggle="tab" href="#reset-all" role="tab" aria-controls="reset-all" aria-selected="true">Reset All</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="broodmares-tab" data-toggle="tab" href="#broodmares" role="tab" aria-controls="broodmares" aria-selected="false">Broodmares</a>
                        </li> -->
                      </ul>
                    </div>


                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="reset-all" role="tabpanel" aria-labelledby="reset-all-tab">
                      <main class="posts-list" data-page="<?= get_query_var('paged')? get_query_var('paged'): 1; ?>" data-max="<?= $wp_query->max_num_pages; ?>">
                        <div class="row">
                          <?php while( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                              <div class="col-lg-6 mb-4">
                                  <div class="filter-box">
                                      <div class="img-box mb-3">
                                          <a href="<?= get_the_permalink( $post->ID )?>" class="vh-center rm"><?php _e('Read More', 'foranequine'); ?></a>
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
                        </main>
                        <button class="button primary  expanded load-more">Load More Post</button>
                    </div>
                    <div class="tab-pane fade" id="broodmares" role="tabpanel" aria-labelledby="broodmares-tab">
                        
                    </div>
                  </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end -->