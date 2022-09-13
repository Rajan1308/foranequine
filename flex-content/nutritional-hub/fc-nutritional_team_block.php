<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$cb_title = get_sub_field( 'cb_title', $id ); 
$cb_content_editer = get_sub_field( 'cb_content_editer', $id );  

$args = [
	'posts_per_page'   => -1,
	'post_type'        => 'our-experts',
	'post_status'      => 'publish',   
];
$wp_query = new WP_Query( $args );

ob_start();

?>
 <!--  -->
<section class="expert-nutrition-team-section py-lg-5 py-4">
    <div class="container" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <div class="row">
            <div class="col mb-lg-5 mb-4">
              <?php if($cb_title):?>
                <div class="title black center">
                    <h2><?= $cb_title ?></h2>
                </div>
                <?php endif; ?>
                <div class="text-center"><?php echo $cb_content_editer; ?></div>
            </div>
        </div>
				<?php   if( $wp_query->have_posts() ): ?>
        <div class="row">
            <div class="col">
                <div class="expert-nutrition-team cw-nav" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                    <div class="owl-carousel owl-theme" id=demo>
										<?php while( $wp_query->have_posts() ): $wp_query->the_post(); 
										$designation = get_field('designation',$post->ID);
										$social_media = get_field('social_media', $post->ID);
										$content_block = get_field('content_block', $post->ID);
										$oe_expertise = get_field('oe_expertise', $post->ID);
										$oe_quote = get_field('oe_quote', $post->ID);
										?>
                        <div class="item">
                            <div class="img-box">
															<?php if($social_media):?>
                                <div class="follow">
																	<?php if($social_media['sm_facebook_link']):?><a href="<?= $social_media['sm_facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
																	<?php if($social_media['sm_twitter_link']):?><a href="<?= $social_media['sm_twitter_link'] ?>"><i class="fab fa-twitter"></i></a><?php endif; ?>
																	<?php if($social_media['sm_instagram_link']):?><a href="<?= $social_media['sm_instagram_link'] ?>"><i class="fab fa-instagram"></i></a><?php endif; ?>
                                </div>
																<?php endif; ?>
                                <a href="<?= get_the_permalink( $post->ID )?>"><img src="<?= get_the_post_thumbnail_url( $post->ID )?>" alt="<?= get_the_title($post->ID) ?>"></a>
                            </div>
                            <h4><?= get_the_title($post->ID) ?></h4>
                            <p><?= $designation  ?></p>
                        </div>
												<?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
        </div>
				<?php endif; ?>
    </div>
</section>
<!-- end -->

