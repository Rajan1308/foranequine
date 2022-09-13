<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$vb_video_link 	= get_sub_field( 'vb_video_link', $id );
$video_featured_image 		= get_sub_field( 'video_featured_image', $id );
$vb_title = get_sub_field('vb_title', $id);
$vb_content_block = get_sub_field('vb_content_block', $id);

ob_start();

?>

<!-- nutrition -->
<section class="overflow-hidden">
  <div class="row">
    <div class="col-md-6 px-0">
      <div  class="nl-img lb-circle" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
          <a 
              id="myfancybox"
              class="vh-center btnn"
              data-fancybox href="<?= $vb_video_link ?>">
              <img src="<?=get_template_directory_uri()?>/ui/media/images/play-btn.png" alt="">
          </a>
          <img src="<?= $video_featured_image['url']  ?>" alt="<?= $video_featured_image['alt']  ?>" class="">
      </div>
    </div>
    <div class="col-md-6 pl36">
      <div class="right-text">
          <div class="" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
            <?php if($vb_title):?>
              <div class="mv-4 title white">
                  <h2><?= $vb_title ?></h2>
              </div>
              <?php endif; ?>
              <div class="mb-4 text-white">
                <?php echo $vb_content_block; ?>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- end -->