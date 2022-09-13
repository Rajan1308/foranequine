<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$ocb_background = get_sub_field( 'ocb_background', $id );
$ocb_title 		= get_sub_field( 'ocb_title', $id );
$ocb_content_block = get_sub_field('ocb_content_block', $id);
$do_you_want_to_show_clients_list = get_sub_field('do_you_want_to_show_clients_list', $id);
 

ob_start();

?>
<!-- our client -->
<section class="<?php if($ocb_background==true):?>oc-section white py-lg-5 py-4<?php else: ?>oc-section py-lg-5 py-4<?php endif; ?>">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-10">
              <div class="<?php if($ocb_background==true):?>title black center mb-4<?php else: ?>title white text-uppercase center mb-4<?php endif; ?>"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                  <h2><?= $ocb_title ?> </h2>
              </div>
              
              <div class="text-center"><?php echo $ocb_content_block; ?></div>
              <?php if($do_you_want_to_show_clients_list == true): get_template_part('global-templates/our-clients'); endif; ?>
          </div>
      </div>
  </div>
</section>
<!-- end -->
