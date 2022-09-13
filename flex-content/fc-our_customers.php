<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$ocb_background_image 		= get_sub_field( 'ocb_background_image', $id );
$ocb_title = get_sub_field('ocb_title', $id);

$ocb_contact_block 		= get_sub_field( 'ocb_contact_block', $id );
$ocb_counter_block = get_sub_field('ocb_counter_block', $id);

ob_start();

?>

<!-- our customer -->
<section class="py-lg-5 py-4 customer-success-section" style="background-image:url('<?= $ocb_background_image ?>')">
  <div class="container">
      <div class="row">
          <div class="col-lg-7 mb-4"> 
              <div class="title white">
                  <h2><?= $ocb_title  ?></h2>
              </div>
              <div class="text-white">
                  <?php echo $ocb_contact_block; ?>
              </div>
          </div>
      </div>
      <?php if($ocb_counter_block):?>
      <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <?php foreach($ocb_counter_block as $osbData):?>
          <div class="col-lg-3 mb-lg-0 mb-3">
            <div class="counter-box d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex align-items-center">
                  <?php if($osbData['ocb_icon']):?>
                    <div class="icon mr-3">
                        <img src="<?=$osbData['ocb_icon']['url']?>" alt="<?=$osbData['ocb_icon']['url']?>" class="img-fluid">
                    </div>
                    <?php endif; if($osbData['ocb_number']):?>
                    <div class="number-style">
                      <span class="counter" data-number="<?=$osbData['ocb_number']?>"></span><span><?= $osbData['ocb_parameter']?></span>
                    </div>
                    <?php endif; ?>
                </div>
                <p><?=$osbData['ocb_short_description']?> </p>
            </div>
          </div>
        <?php endforeach; ?>
           
      </div>
      <?php endif; ?>
  </div>
</section>
<!-- end  -->
