<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$contactus_title 		= get_sub_field( 'contactus_title', $id );
$contactus_content_block = get_sub_field('contactus_content_block', $id);

ob_start();

?>

<!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
    <div class="row align-items-center">  
      <div class="col">
          <?php if($contactus_title):?>
            <div class="title center black">
              <h2><?= $contactus_title ?></h2>
            </div>
          <?php endif; ?>
          <div class="text-center">
            <?php echo $contactus_content_block; ?>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- end -->