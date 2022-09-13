<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

// Acf data
$mhb_title 		= get_sub_field( 'mhb_title', $id ); 
$mhb_sub_title = get_sub_field('mhb_sub_title', $id);



ob_start();
?>

 <?php get_template_part( 'global-templates/media-hub' ); ?>