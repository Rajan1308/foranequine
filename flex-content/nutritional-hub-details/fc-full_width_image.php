<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$fwi_image 		= get_sub_field( 'fwi_image', $id ); 
$fwi_content = get_sub_field( 'fwi_content', $id ); 
ob_start();

?>
 <!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container">
        <div class="row ndc-row mb-4">
            <div class="col">
                <img src="<?=$fwi_image['url'] ?>" alt="<?=$fwi_image['alt'] ?>" class="img-fluid mb-4">
                <h2><?= $fwi_content ?></h2>
            </div>
        </div>
    </div>
</div>
<!-- end -->