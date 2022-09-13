<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$riwcb_background_image 		= get_sub_field( 'riwcb_background_image', $id );
$riwcb_title 		= get_sub_field( 'riwcb_title', $id );
$riwcb_content_block 		= get_sub_field( 'riwcb_content_block', $id );
$riwcb_featured_image 		= get_sub_field( 'riwcb_featured_image', $id );
 

ob_start();

?>
<!--  -->
<section class="<?php if($riwcb_featured_image):?>bg6<?php else: ?>bg7<?php endif; ?>" style="background-image:url('<?= $riwcb_background_image ?>)">
  <div class="container os-row">
      <div class="row <?php if($riwcb_featured_image):?>align-items-center<?php else: ?>justify-content-center<?php endif; ?>">
          <div class="<?php if($riwcb_featured_image):?>col-sm-6<?php else: ?>col-lg-7<?php endif; ?>"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="title black pr-5">
                <h2 class="text-white"><?= $riwcb_title ?></h2>
              </div>
              <div class="text-white"><?php echo $riwcb_content_block ; ?></div>
          </div>

          <?php if($riwcb_featured_image):?>
          <div class="col-sm-6">
              <div class="row"   data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                <?php foreach($riwcb_featured_image as $key=>$rfi):?>
                  <div class="col-6 skew-img <?php if($key==0):?>pr-0<?php endif; ?>">
                      <img src="<?=$rfi['riwcbfi_image']['url']?>" alt="<?=$rfi['riwcbfi_image']['alt']?>" class="img-fluid">
                  </div>
                  <?php endforeach; ?>
              </div>
          </div>
          <?php endif; ?>
      </div>
      
  </div>
</section>
<!-- end -->