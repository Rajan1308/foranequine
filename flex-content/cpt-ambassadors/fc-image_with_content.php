<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$iwc_title 		= get_sub_field( 'iwc_title', $id ); 
$iwc_content_block 		= get_sub_field( 'iwc_content_block', $id );
$iwc_featured_image 		= get_sub_field( 'iwc_featured_image', $id );


ob_start();

?>
<!-- os-row -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row">
          <div class="col">
              <a class="back-btn" href="<?php echo esc_url( home_url('/about-us/foran-equine-ambassadors/')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="6.899" height="11.998" viewBox="0 0 6.899 11.998">
                  <path id="back-light" d="M13.756,12.051l-5.282-5.2,5.282-5.2-.816-.8-6.083,6,6.083,6Z" transform="translate(-6.857 -0.857)" fill="#000"/>
                </svg> Back</a>
          </div>
      </div>
      <div class="row align-items-center">
          <div class="col-sm-8" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <?php if($iwc_title):?>
              <div class="title black">
                  <h2><?= $iwc_title ?></h2>
              </div>
              <?php endif; ?>
              <?php echo $iwc_content_block; ?>
          </div>
          <?php if($iwc_featured_image):?>
          <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <div class="rounded-img medium">
                  <img src="<?=$iwc_featured_image['url']?>" alt="<?=$iwc_featured_image['alt']?>" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
      </div>
  
  </div>
</section>
<!-- end -->