<?php
/**
 * The template for displaying all single posts
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$category = get_the_category();
$firstCategory = $category[0]->cat_name;




get_template_part( 'global-templates/inner-hero' );


?>

<section class="section sec-media-details" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">
			<main class="site-main" id="main">
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
				}
				?>
			</main><!-- #main -->
	</div><!-- #content -->
</section><!-- #single-wrapper -->
 <!-- Start Related Articles Section-->
 <section class="section sec-casestudy sec-related pt-5 pb-3">
		<div class="container"  >
				<div class="title text-center mt-5" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="100" data-aos-easing="ease-in-sine" data-aos-anchor-placement="top-bottom">
						<h2><?php _e('Our Related ', 'foranequine');  echo $firstCategory; ?></h2>
				</div>
				<div class="row latest-news" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="2000">
				<?php

					$related = get_posts( array( 'post_type ' => 'posts', 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
					<div class="col-lg-4 mb-4">
						<div class="item">
							<span class="news-tag "><?= $firstCategory ?></span>
							<div class="hover-content">
									<div class="text-box">
											<p class="text-uppercase"><?= get_the_date('F, Y', $pos->ID) ?> | <?= get_the_author('display_name'); ?></p>
											<h4><?php echo get_the_title($post->ID) ?></h4>
											<a href="<?php the_permalink() ?>" class="readmore"><?php _e('Read More', 'foranequine');?></a>
									</div>
							</div>
							<?php echo get_the_post_thumbnail( $post->ID, 'foranequine-thumb',array('class' => 'w-100') ); ?>
						</div>
					</div>
					<?php }
						wp_reset_postdata(); ?>
				
						
				</div>
		</div>
</section>
<?php
get_footer();
