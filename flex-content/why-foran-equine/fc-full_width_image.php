<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$fwi_image = get_sub_field( 'fwi_image', $id ); 


ob_start();

?>

 <!-- We place the horse at -->
 <section class="pt-lg-5 pt-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
    <div>
        <img src="<?=$fwi_image['url']?>" alt="<?=$fwi_image['alt']?>" class="img-fluid">
    </div>
    
</section>
            <!-- end -->