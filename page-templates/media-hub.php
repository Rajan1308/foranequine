<?php
/**
 * Template Name: Media Hub Page
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
?>
<!-- 
<div class="section py-lg-5 py-4">
	<div class="container">
		<div class="row aos-init aos-animate">
	 
		<div id="ourexper"></div>
		</div>
	</div>
</div> -->
<?php 

if( have_posts() ) :

	while( have_posts() ) :
		the_post();
		if(have_rows( 'media_hub' )):
			$rowCount = count( get_field( 'media_hub' ) );
			while( have_rows( 'media_hub' ) ) :
				the_row();
				$layout = get_row_layout();
				// print_r($layout);
				get_template_part( 'flex-content/media-hub/fc', $layout );
			endwhile;
		endif;
	endwhile;
endif;
// Commen CTAs Section
get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
 