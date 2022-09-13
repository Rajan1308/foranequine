<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$fwc_content_block 		= get_sub_field( 'fwc_content_block', $id ); 
ob_start();

?>
 <!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container">
    <div class="row ndc-row mb-4">
            <div class="col">
                <?php echo $fwc_content_block ; ?>
            </div>
          </div>

          <hr/>
           
    </div>
</div>
<!-- end -->