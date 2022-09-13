<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$eca_background_image = get_sub_field( 'eca_background_image', $id ); 
$eca_title = get_sub_field( 'eca_title', $id ); 
$eca_content_block = get_sub_field( 'eca_content_block', $id ); 
$eca_form = get_sub_field( 'eca_form', $id ); 

ob_start();

?>
 <!-- enquire-form-section -->
 <section class="enquire-form-section py-lg-5 py-4" style="background-image:url('<?= $eca_background_image['url'] ?>')">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
              <?php if($eca_title):?>
                <div class="title white center">
                    <h2><?= $eca_title ?></h2>
                </div>
                <?php endif; ?>
                <p class="text-white text-center .font-weight-semi-bold"><?= $eca_content_block ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="bg-gray2 p-lg-5 p-3 py-4">
                    <div class="p-lg-4">
                      <?php echo do_shortcode( $eca_form ); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->

