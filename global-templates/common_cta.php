 
 <?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$common_cta_section_background = get_field( 'common_cta_section_background', 'options' ); 
$common_cta_section_title = get_field( 'common_cta_section_title', 'options' ); 
$common_cta_section_contact_form = get_field( 'common_cta_section_contact_form', 'options' ); 

?>
 <!-- Subscribes form -->
 <section class="bg-main">
    <div class="px-md-0 px-3">
      <div class="row">
          <?php if($common_cta_section_background):?>
          <div class="col-lg-5 col-md-4 mb-4 mb-md-0" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
              <div class="sf-img">
                  <img src="<?= $common_cta_section_background['url']?>" alt="<?= $common_cta_section_background['alt']?>" class="img-fluid">
              </div>
          </div>
          <?php endif; ?>
          <div class="col-lg-7 col-md-8">
              <div class="subscribe-form-wrapper py-lg-5 py-4" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                  <h3 class="text-white mb-4"><?= $common_cta_section_title  ?></h3>
                   <?php echo do_shortcode( $common_cta_section_contact_form ); ?>
              </div>
          </div>
      </div>
    </div>  
  </section>
  <!-- end -->