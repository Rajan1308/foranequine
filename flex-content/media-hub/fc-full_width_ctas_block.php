<?php if( ! defined( 'ABSPATH' ) ) exit; 
$pageId = get_the_ID();

// Acf data
$fwcb_title 		= get_sub_field( 'fwcb_title', $pageId ); 
$fwcb_content = get_sub_field('fwcb_content', $pageId);
$fwcb_background_image 		= get_sub_field( 'fwcb_background_image', $pageId ); 
$fwcb_ctas = get_sub_field('fwcb_ctas', $pageId);



ob_start();
?>

<!--  -->
<section class="<?php if($fwcb_background_image):?>our-pod-cast-bg<?php else: ?>gradientbg<?php endif; ?> py-lg-5 py-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="title white center">
                    <h2><?= $fwcb_title ?></h2>
                </div>
                <p class="text-white"><?= $fwcb_content ?></p>
                <a href="<?=$fwcb_ctas['url']?>" class="lm-btn"><span><?=$fwcb_ctas['title']?></span></a>
            </div>
        </div>
    </div>
</section>
<!-- end -->