<?php
/**
 * Template Name: Nutritional Hub Page
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
 
<?php 

if( have_posts() ) :

	while( have_posts() ) :
		the_post();
		if(have_rows( 'nutritional_hub' )):
			$rowCount = count( get_field( 'nutritional_hub' ) );
			while( have_rows( 'nutritional_hub' ) ) :
				the_row();
				$layout = get_row_layout();
				// print_r($layout);
				get_template_part( 'flex-content/nutritional-hub/fc', $layout );
			endwhile;
		endif;
	endwhile;
endif;
// Commen CTAs Section
get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
 