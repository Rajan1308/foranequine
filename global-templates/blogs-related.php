<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();

$args = array( 'post_type' => 'blogs',
'category__in' => wp_get_post_categories($pageID),
'posts_per_page' => 3, 'post__not_in' => array($pageID));
$the_query = new WP_Query( $args ); 

?>

 <!-- related news -->
<section class="mb-lg-5 mb-4">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col">
                <h4 class="text-uppercase font-weight-bold text-center mb-4"><?= get_field('blogs_details', 'options'); ?></h4>
            </div>
        </div>
        <?php if ( $the_query->have_posts() ) :
          global $post;
        ?>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
          $author_id=$the_query->post_author;
        ?>
            <div class="col-md-4 mb-4">
                <div class="news-box">
                    <div class="img-box">
                        <a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="<?= get_the_title($the_query->ID); ?>" class="img-fluid"></a>
                    </div>
                    <span class="d-block mb-2 text-uppercase"><?= get_the_date('F, Y', $the_query->ID) ?> | <?php the_author_meta( 'user_nicename' , $author_id ); ?> </span>
                    <h3><?= get_the_title($the_query->ID); ?></h3>
                </div>
            </div>
            <?php endwhile;
          wp_reset_postdata(); ?> 
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- end -->