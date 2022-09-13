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
$vl_video_link 		= get_field( 'vl_video_link', $post->ID ); 
get_template_part( 'global-templates/inner-hero' );


?>
<!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container">
    <div class="row ndc-row mb-4">
            <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?=$vl_video_link?>?rel=0" allowfullscreen></iframe>
            </div>
            </div>
          </div>
    </div>
</div>
<!-- end -->
 <?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post();
      if(have_rows( 'nutritional_hub_post' )):
        $rowCount = count( get_field( 'nutritional_hub_post' ) );
        while( have_rows( 'nutritional_hub_post' ) ) :
          the_row();
          $layout = get_row_layout();
          // print_r($layout);
          get_template_part( 'flex-content/nutritional-hub-details/fc', $layout );
        endwhile;
      endif;
    endwhile;
  endif;
  get_template_part('global-templates/nutritional-videos-related');
  get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
