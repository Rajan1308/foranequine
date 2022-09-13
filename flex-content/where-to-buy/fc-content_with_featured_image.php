<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$cwfi_title 		= get_sub_field( 'cwfi_title', $id );
$cwfi_content = get_sub_field('cwfi_content', $id);
$cwfi_ctas 		= get_sub_field( 'cwfi_ctas', $id );
$cwfi_featured_image = get_sub_field('cwfi_featured_image', $id);

ob_start();

?>

<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-sm-8" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title black  mb-4">
                  <h2><?=$cwfi_title?></h2>
              </div>
              <p><?=$cwfi_content?></p>
              <?php if($cwfi_ctas):?><a href="<?=$cwfi_ctas['url']?>" class="lm-btn"><span><?=$cwfi_ctas['title']?></span></a><?php endif; ?>
          </div>
          <?php if($cwfi_featured_image):?>
          <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="rounded-img medium">
                  <img src="<?=$cwfi_featured_image['url']?>" alt="" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
      </div>
  </div>
</section>
