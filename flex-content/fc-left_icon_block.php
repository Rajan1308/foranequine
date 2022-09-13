<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$contactus_icon 	= get_sub_field( 'contactus_icon', $id );
$contactus_title 		= get_sub_field( 'contactus_title', $id );
$contactus_content = get_sub_field('contactus_content', $id);

ob_start();

?>

<!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row justify-content-center" data-aos="fade" data-aos-delay="300" data-aos-duration="2000">
          <div class="col-10">
              <div class="d-flex">
                <?php if($contactus_icon):?>
                  <div class="icon-circle d-flex align-items-center justify-content-center mr-3">
                      <img src="<?= $contactus_icon['url']?>" alt="<?= $contactus_icon['alt']?>" class="img-fluid">
                  </div>
                  <?php endif; ?>
                  <div class="">
                      <?php if($contactus_title):?><h4 class="fz22 font-weight-bold"><?= $contactus_title ?></h4><?php endif; ?>
                      <p><?= $contactus_content ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end -->