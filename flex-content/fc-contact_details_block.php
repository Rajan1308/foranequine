<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$contact_details = get_sub_field( 'contact_details', $id );

ob_start();
if($contact_details):
?>

 <!-- address section -->
 <section class=" mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="address-wrapper">
                    <?php foreach($contact_details as $ckey=> $contactdetails):?>
                    <div class="box br bb" data-aos="<?php if($ckey % 2 == 0):?>fade-down-right<?php else: ?>fade-down-left<?php endif; ?>" data-aos-delay="300" data-aos-duration="2000">
                        <div class="d-flex flex-wrap justify-content-lg-between mb-3">
                            <h4 class="mb-lg-0 mb-3 font-weight-bold"><?= $contactdetails['content_details_title'] ?></h4>
                            <a href="mailto:<?= $contactdetails['content_details_email_us'] ?>" class="e-mail-link"><img src="./ui/media/images/paper-plane-black.svg" alt="" class="img-fluid"> Email us</a>
                        </div>
                        <?php if($contactdetails['content_details_direct_call']):?>
                        <h5 class="mb-3 font-weight-bold"><?= $contactdetails['content_details_direct_call'] ?></h5>
                        <div class="d-flex mb-3">
                            <span class="d-inline-block mr-3">
                                <img src="<?= get_template_directory_uri()?>/ui/media/images/phone-orange.svg" alt="">
                            </span>
                            <p class="mb-0"><?= $contactdetails['direct_call_number'] ?></p>
                        </div>
                        <?php endif;  if($contactdetails['address_label']):?>
                        <h5 class="mb-3 font-weight-bold"><?= $contactdetails['address_label'] ?></h5>
                        <div class="d-flex">
                            <span class="d-inline-block mr-3">
                                <img src="<?= get_template_directory_uri()?>/ui/media/images/pin-orange.svg" alt="">
                            </span>
                            <p class="mb-0"><?= $contactdetails['content_details_address'] ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end -->