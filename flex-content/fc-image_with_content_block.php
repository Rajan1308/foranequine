<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$image_with_content 		= get_sub_field( 'image_with_content', $id );
 

ob_start();

?>
<!-- os-row -->
<section class="py-lg-5 py-4">
  <div class="container os-row">
    <?php foreach($image_with_content as $iwc):?>
      <div class="row align-items-center">
          <div class="col-sm-7" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title black">
                  <h2><?=$iwc['iwc_title']?></h2>
                  
              </div>
              <?php echo $iwc['iwc_content_block']; ?>
          </div>
          <?php if($iwc['iwc_featured_image']):?>
          <div class="col-sm-5" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="rounded-img">
                  <img src="<?=$iwc['iwc_featured_image']['url']?>" alt="<?=$iwc['iwc_featured_image']['alt']?>" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
      </div>
      <?php endforeach; ?>
      
  </div>
</section>
<!-- end -->