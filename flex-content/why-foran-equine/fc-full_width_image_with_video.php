<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$fwiwv_image = get_sub_field( 'fwiwv_image', $id );
$fwiwv_title 	= get_sub_field( 'fwiwv_title', $id );
$fwiwv_video_link 		= get_sub_field( 'fwiwv_video_link', $id );
ob_start();

?>
<!--  -->
<!--  -->
<section class="bg16" style="background-image:url('<?=$fwiwv_image['url']?>') ;">
               
  <a  id="myfancybox" 
      class="video-play"
      data-fancybox href="<?=$fwiwv_video_link?>"> 
      <?=$fwiwv_title?>
      <img src="<?= get_template_directory_uri()?>/ui/media/images/orange-play-btn.svg" alt=""></a>
</section>
<!-- end -->
<!-- end -->
