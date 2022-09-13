<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$background_image 		= get_sub_field( 'background_image', $id );
$aoe_title = get_sub_field('aoe_title', $id);
$aoe_content = get_sub_field('aoe_content', $id);
$aoe_ctas = get_sub_field('aoe_ctas', $id);

ob_start();

?>

<section class="bg16 overlay d-flex  align-items-center" style="background-image:url('<?=$background_image['url']?>') ;">
  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
      <div class="row justify-content-end" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
          <div class="col-lg-6">
              <div class="title white">
                  <h2><?=$aoe_title?></h2>
              </div>
              <p class="text-white"><?=$aoe_content?></p>
              <?php if($aoe_ctas):?>
              <a href="<?=$aoe_ctas['url']?>" class="lm-btn"><span><?=$aoe_ctas['title']?></span> </a>
              <?php endif; ?>
          </div>
      </div>
  </div>
</section>