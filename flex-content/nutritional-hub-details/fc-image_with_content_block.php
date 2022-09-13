<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$image_with_content 		= get_sub_field( 'image_with_content', $id ); 
ob_start();

?>
 <!-- filter -->
<div class="section py-lg-5 py-4">
    <div class="container">
        <?php foreach ($image_with_content as $key=>$imagewithcontent): ?>
          <?php if($key%2):?>
            <div class="row ndc-row mb-4 flex-column-reverse flex-md-row" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
              <?php  if($imagewithcontent['iwccb_featured_image']):?>
                <div class="col-md-4">
                    <img src="<?=$imagewithcontent['iwccb_featured_image']['url']?>" alt="<?=$imagewithcontent['iwccb_featured_image']['alt']?>" class="img-fluid">
                </div>
              <?php endif;  ?>
              <?php if($imagewithcontent['iwccb_content_block']):?>
              <div class="col-md-8">
                <?php echo $imagewithcontent['iwccb_content_block']; ?>
              </div>
              <?php endif; ?>
            </div>
          
          <?php else: ?>
            <div class="row ndc-row mb-4 " data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
            <?php if($imagewithcontent['iwccb_content_block']):?>
            <div class="col-md-8">
               <?php echo $imagewithcontent['iwccb_content_block']; ?>
            </div>
            <?php endif; if($imagewithcontent['iwccb_featured_image']):?>
            <div class="col-md-4">
                <img src="<?=$imagewithcontent['iwccb_featured_image']['url']?>" alt="<?=$imagewithcontent['iwccb_featured_image']['alt']?>" class="img-fluid">
            </div>
            <?php endif;  ?>
          </div>
          <?php endif; endforeach; ?>


          
           
    </div>
</div>
<!-- end -->