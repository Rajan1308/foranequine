<?php
/**
 * The template for displaying all single posts
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
// $category = get_the_category();
// $firstCategory = $category[0]->cat_name;

get_template_part( 'global-templates/inner-hero' );
?>

<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post();
      if(have_rows( 'ambassadors_flexcontent' )):
        $rowCount = count( get_field( 'ambassadors_flexcontent' ) );
        while( have_rows( 'ambassadors_flexcontent' ) ) :
          the_row();
          $layout = get_row_layout();
          // print_r($layout);
          get_template_part( 'flex-content/cpt-ambassadors/fc', $layout );
        endwhile;
      endif;
    endwhile;
  endif;
  get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
