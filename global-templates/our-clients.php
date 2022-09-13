<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();

$args = [
  'post_type' => 'our-clients', 
  'posts_per_page' => -1, 
  'ignore_sticky_posts' => true,
  'no_found_rows' => true,
  'update_post_meta_cache' => false
];
$the_query = new WP_Query( $args ); 
$terms = get_terms( 'our-clients-type' );
?>


<div class="oc-tabs"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <?php foreach ( $terms as $key=>$term ): 
    $tabName = preg_replace('/\s+/', '', $term->name);

    $termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id );
    
    ?>
    <li class="nav-item" role="presentation">
      <button class="nav-link <?php if($key==0):?>active<?php endif; ?>" id="<?= $tabName?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $tabName?>" type="button" role="tab" aria-controls="<?= $tabName?>" aria-selected="true"><span><img src="<?=$termIcon['url']?>" alt="<?=$termIcon['alt']?>"> <?= $term->name ?></span></button>
    </li>
    <?php endforeach; ?>
    
  </ul>
</div>
<div data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
  <div class="tab-content" id="myTabContent">
  <?php foreach ( $terms as $tabkey=>$term ): 
    $tabName = preg_replace('/\s+/', '', $term->name);
      $args = [
        'post_type'      => 'our-clients',
        'posts_per_page' => 6,
        'tax_query' => [
          [
            'taxonomy' => 'our-clients-type',
            'field' => 'term_id',
            'terms' => $term->term_id
          ]
        ],
      ];
      $ajaxposts = new WP_Query( $args );
     // echo $rawSqlQuery = $ajaxposts->request;
      ?>
    <div class="tab-pane fade <?php if($tabkey==0):?>show active<?php endif; ?>" id="<?= $tabName ?>" role="tabpanel" aria-labelledby="<?= $tabName ?>-tab">
        <div class="horse-racing pt-3">
            <div class="owl-carousel owl-theme cw-pagination">
              <?php if ( $ajaxposts->have_posts($post->ID) ) :  
                while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                  $post_id= get_the_id();	
                  $designation =  get_post_meta($post_id, "designation", true); 
                  $content_block = get_post_meta($post_id, 'content_block', true); 
                  $product_details = get_post_meta($post_id, 'product_details', true);
              ?>
                <div class="item">
                  <div class="row flex-column-reverse flex-md-row">
                    <div class="col-lg-6 col-md-8">
                      <div class="content-box">
                        <div class="row">
                          
                        <div class="col<?php if($product_details):?>-md-9 col-8<?php endif;?>">
                          <p><?php echo $content_block; ?></p>
                            <h4><?= get_the_title($post_id) ?></h4>
                            <span><?= $designation ?></span>
                        </div>
                        <?php if($product_details):?>
                        <div class="col-md-3 col-4">
                          <?php if($product_details['pd_product_image']):?>
                            <div class="bg-white p-3">
                                <img class="owl-lazy" src="<?=$product_details['pd_product_image']['url']?>" data-src="<?=$product_details['pd_product_image']['url']?>" data-src-retina="<?=$product_details['pd_product_image']['url']?>" alt="<?=$product_details['pd_product_image']['alt']?>">
                            </div>
                          <?php endif; ?>
                          <span class="name-product"><?=$product_details['product_name'] ?></span>
                        </div>
                        <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <?php if(get_the_post_thumbnail_url()):?>
                    <div class="col-lg-6 col-md-4">
                        <div class="pr-img">
                          <img class="owl-lazy" src="<?= get_the_post_thumbnail_url( $post_id )?>" data-src="<?= get_the_post_thumbnail_url( $post_id )?>" data-src-retina="<?= get_the_post_thumbnail_url( $post_id )?>" alt="<?= get_the_title($post_id) ?>">
                        </div> 
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
                <?php endwhile; wp_reset_query();
                  wp_reset_postdata(); ?>
                  <?php else: ?>
                  <div class="p-0 col-md-12 text-center">
                      <p class="py-4 my-4"><?php _e( 'Sorry, Clietns Data not Found!!' ); ?></p> 
                  </div>
                <?php endif;   ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
