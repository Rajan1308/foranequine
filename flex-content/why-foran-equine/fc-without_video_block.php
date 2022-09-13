<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$wvb_video_featured_image = get_sub_field( 'wvb_video_featured_image', $id );
$wvb_vb_title 	= get_sub_field( 'wvb_vb_title', $id );
$wvb_vb_content_block 		= get_sub_field( 'wvb_vb_content_block', $id ); 
ob_start();

?>

<!-- nutrition -->
<section>
  <div class="row">
    <?php if($wvb_video_featured_image):?>
    <div class="col-md-6 px-0">
        <div  class="nl-img" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
          <img src="<?= $wvb_video_featured_image['url']?>" alt="<?= $wvb_video_featured_image['alt']?>" class="object-fit"></div>
    </div>
    <?php endif; ?>
    <div class="col-md-6 pl-0">
        <div class="right-text orange py-4">
            <div class="" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
              <?php if($wvb_vb_title ):?>
                <div class="mv-4 title none white">
                    <h2><?= $wvb_vb_title  ?>
                    </h2>
                </div>
                <?php endif; ?>
                <div class="mb-4 text-white">
                  <?php echo $wvb_vb_content_block ; ?>
                </div>
            </div>
        </div>
    </div>
  </div>
  
</section>
<!-- end -->