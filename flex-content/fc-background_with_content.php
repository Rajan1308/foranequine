<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$contact_background_image 		= get_sub_field( 'contact_background_image', $id );
$contactus_content_block = get_sub_field('contactus_content_block', $id);

ob_start();

?>

 <!-- stockist-form-section -->
 <section class="stockist-form-section py-lg-5 py-4" style="background:url('<?= $contact_background_image ?>')">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="bg-white p-lg-5 p-3 py-4">
            <?php echo do_shortcode( $contactus_content_block ); ?>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- end -->