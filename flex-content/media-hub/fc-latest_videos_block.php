<?php if( ! defined( 'ABSPATH' ) ) exit; 
$pageId = get_the_ID();

// Acf data
$lnb_title 		= get_sub_field( 'lnb_title', $pageId ); 
$lnb_no_of_post = get_sub_field('lnb_no_of_post', $pageId); 
$fwcb_ctas = get_sub_field('lnb_ctas', $pageId);

$args = array( 'post_type' => 'nutritional-videos', 'posts_per_page' => $lnb_no_of_post);
$the_query = new WP_Query( $args ); 

ob_start();
?>

<!-- latest news -->
<section class="blog-section py-lg-5 py-4">
    <div class="container">
        <div class="row"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col mb-4">
                <div class="title black">
                    <h2><?= $lnb_title ?></h2>
                </div>
            </div>
        </div>
        <?php if ( $the_query->have_posts() ) :
          global $post;
        ?>
        <div class="row mb-4"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col">
                <div class="our-videos-carusel dots-style">
                    <div class="owl-carousel owl-theme">
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                        $author_id=$the_query->post_author;
                        $vl_video_link = get_field('vl_video_link', $post->ID);
                      ?>
                        <div class="item">
                            <div class="img-box">
                                <button class="play-btn">
                                    <img src="<?= get_template_directory_uri()?>/ui/media/images/play-btn.png" alt="play-btn">
                                </button>
                                <a id="myfancybox"  data-fancybox href="<?= $vl_video_link ?>"><img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="<?= get_the_title($the_query->ID); ?>" class="object-cover"></a>
                            </div>
                            <div class="pt-3">
                                <span class="d-block mb-2"><?= get_the_date('F, Y', $the_query->ID) ?> | <?php the_author_meta( 'user_nicename' , $author_id ); ?></span>
                            <h3><?= get_the_title($the_query->ID); ?></h3>
                            <p><?= get_the_excerpt($the_query->ID); ?></p>
                            </div>
                            
                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                      ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if($fwcb_ctas):?>
        <div class="row">
            <div class="col text-center">
                <a href="<?=$fwcb_ctas['url']?>" class="lm-btn"><span><?=$fwcb_ctas['title']?></span></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- end -->