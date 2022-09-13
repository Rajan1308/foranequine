<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$fwvb_video_link = get_sub_field( 'fwvb_video_link', $id );
$fwvb_background_image 	= get_sub_field( 'fwvb_background_image', $id );
$fwvb_content_block 		= get_sub_field( 'fwvb_content_block', $id );
ob_start();

?>
<!--  -->
<section>
  <?php if($fwvb_video_link):?>
  <div class="video-section position-relative mb-lg-5 mb-4">
      <button class="play-btn">
          <img src="<?= get_template_directory_uri()?>/ui/media/images/play-btn.png" alt="">
      </button>
      <a id="myfancybox" data-fancybox href="<?= $fwvb_video_link ?>"> <img src="<?=$fwvb_background_image['url']?>" alt="<?=$fwvb_background_image['alt']?>" class="img-fluid"> </a>
  </div>
  <?php endif; ?>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10 title none black">
              <h2 class="font-weight-bold"><?= $fwvb_content_block ?>
              </h2>
          </div>
      </div>
  </div>
</section>
<!-- end -->
