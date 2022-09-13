<?php
/**
 * Template Name: About Us Page
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
		if(have_rows( 'about_us' )):
			$rowCount = count( get_field( 'about_us' ) );
			while( have_rows( 'about_us' ) ) :
				the_row();
				$layout = get_row_layout();
				// print_r($layout);
				get_template_part( 'flex-content/fc', $layout );
			endwhile;
		endif;
	endwhile;
endif;
// Commen CTAs Section
get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
 