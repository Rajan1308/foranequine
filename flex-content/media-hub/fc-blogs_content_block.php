<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

// Acf data
$content_editer 		= get_sub_field( 'content_editer', $id );
$post_display       = get_sub_field('post_display', $id);

// post query
$catSlug = $_POST['blog_category'];

$args = [
  'post_type' => 'blogs',
  'posts_per_page' => -1, 
  'category_name' => $catSlug
];
$the_query = new WP_Query( $args );

ob_start();
?>

 <!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container"  id="blog-filters">
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
                    echo do_shortcode('[fe_widget title="" id="19928" show_count="yes"]'); 
                        $categories = get_categories(  );
                    ?>
                    </ul>
                    <?php 
                      #$categories = get_categories(array('taxonomy' => 'blog-category'));
                      ?>
                      
                      <!-- <ul class="filter-options mt-3 list-unstyled">
                          <li>
                                <div class="filter-checkbox">
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
                                <div class="filter-checkbox blogs_cat_item" data-slug="<?= $category->slug; ?>" post_type="blogs">
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
        <div class="row justify-content-center blogs-list" id="newsfilters">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
          get_template_part('loop-templates/blogs-list-item');
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
                  </nav>
            </div>
        </div>
    </div>
</div>
<!-- end -->