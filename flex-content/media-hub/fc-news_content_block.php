<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

// Acf data
$content_editer 		= get_sub_field( 'content_editer', $id );
$post_display       = get_sub_field('post_display', $id);

// post query
$catSlug = $_POST['category'];
$args = [
  'post_type' => 'post',
  'posts_per_page' => 9, 
  'category_name' => $catSlug,
];
$the_query = new WP_Query( $args );
$numberPages = $the_query->max_num_pages;
ob_start();
?>

 <!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container" id="newsfilters">
        <div class="row" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
            <div class="mb-4 text-uppercase title none">
              <?php echo $content_editer; ?> 
            </div>
        </div>
        <?php if ( $the_query->have_posts() ) :
          global $post;
        ?>
        <div class="row">
          <div class="col">
            <div class="p-3 filter-months mb-4">
              <h3>Filter by Year or Month</h3>
              <ul class="filter-options mt-3 list-unstyled">
              <?php 
              echo do_shortcode('[fe_widget title="" id="19928" show_selected="yes" show_count="yes"]'); 
                $categories = get_categories(  );
              ?>
              </ul>
              <!-- <ul class="filter-options mt-3 list-unstyled">
                  <li>
                      <div class="filter-checkbox news_cat_item">
                          <input type="checkbox">
                          <label for="">
                              <span>all</span>  
                              All
                              <span class="date"><?=  $the_query->found_posts ?></span>
                          </label>
                      </div>
                    </li>
                    <?php foreach($categories as $category) : ?>
                    <li>
                      <div class="filter-checkbox news_cat_item" data-slug="<?= $category->slug; ?>" post_type="<?= $post_display['value']; ?>">
                          <input type="checkbox">
                          <label for="">
                              <span>#</span>  
                              <?= $category->name; ?>
                              <span class="date"><?=  $category->category_count ?></span>
                          </label>
                      </div>
                    </li>
                    <?php endforeach; ?>
              </ul> -->
            </div>
          </div>
        </div>
        <div class="row justify-content-center news-list">
        <?php 
          while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part('loop-templates/news-list-item');
          endwhile;
          wp_reset_postdata(); ?> 
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col py-5 text-center">
                <nav class="pagination-nav " aria-label="Page navigation">
                <?php foranequine_pagination([
                      'total' => $the_query->max_num_pages,
                  ]); ?>
                  </nav>
            </div>
        </div>
    </div>
</div>
<!-- end -->