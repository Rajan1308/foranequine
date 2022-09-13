<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID(); global $post;



$background_image = get_field('background_image', $pageID);
$header_title = get_field('header_title', $pageID);

$title = $header_title ? $header_title : get_the_title($pageID);
$parent_title = get_the_title($post->post_parent);

if(is_singular('post')):

	$category = get_the_category();
	$firstCategory = $category[0]->cat_name;
	
elseif(is_singular('community_support')):

	$terms = get_the_terms( $post->ID , 'cs_category' );
	$firstCategory = '';
	$termsslug = '';
	foreach($terms as $term){
		$firstCategory = $term->name;
		$termsslug = $term->slug;
	}

endif;
$postthumbUrl = get_the_post_thumbnail_url( $pageID, 'foranequine-large', array('class' => 'img-fluid')  );

?>
 <!-- home banner -->
<section class="inner-banner"  data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
	<div class="row">
		<div class="col-md-4 pr-0">
			<div class="left-text">
				<div class="" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
						<div class="mv-4 title white">
								<h2><?= $title ?></h2>
						</div>
						<div class="breadcrumb_menu" data-aos="fade-right" data-aos-duration="700"
						data-aos-delay="100" data-aos-easing="ease-in-sine"
						data-aos-anchor-placement="top-bottom" data-aos-offset="">
								<span property="itemListElement" typeof="ListItem">
									<a property="item" typeof="WebPage" title="Go to CF PADEL." href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home">
										<span property="name"><?php _e('Home', 'foranequine');?> </span>
									</a>
									<meta property="position" content="1">
								</span> 
								/
								<?php if($post->post_parent):?>
								<span property="itemListElement" typeof="ListItem">
										<a property="item" typeof="WebPage" title="Go to CF PADEL." href="<?php echo get_permalink( $post->post_parent ); ?>" class="home">
											<span property="name"><?= $parent_title; ?></span>
										</a>
										<meta property="position" content="1">
									</span>
									/ <?php endif; ?>
								<span property="itemListElement" typeof="ListItem">
									<span property="name" class="current-item"><?= $title ?></span>
									<meta property="url" content="#"><meta property="position" content="2">
								</span> 
						</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 px-0">
				<div class="nr-img"   data-aos="fade-right" data-aos-duration="900" data-aos-delay="100"><img src="<?= $background_image ?>" alt="" class="object-fit"></div>
		</div>
	</div>
</section>
<!-- end -->
