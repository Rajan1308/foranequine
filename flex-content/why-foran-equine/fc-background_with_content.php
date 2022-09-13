<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$bwc_background_image 	= get_sub_field( 'bwc_background_image', $id );
$bwc_title 		= get_sub_field( 'bwc_title', $id ); 
$bwc_content 		= get_sub_field( 'bwc_content', $id );

ob_start();

?>

<!--  -->
<section class="py-lg-5 py-4 bg12" style="background:url('<?= $bwc_background_image  ?>')">
    <div class="container">
        <div class="row my-4 justify-content-center" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col-lg-8">
                <div class="title center white none">
                    <h2><?= $bwc_title ?></h2>
                </div>
                <p class="font-weight-bold text-white text-center"><?= $bwc_content  ?></p>
            </div>
        </div>
    </div>
</section>
<!-- end  -->