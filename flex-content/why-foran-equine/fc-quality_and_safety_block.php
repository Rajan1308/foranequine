<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$qasb_title = get_sub_field( 'qasb_title', $id );
$qasb_content_block 	= get_sub_field( 'qasb_content_block', $id );
$qasb_featured_image_one 		= get_sub_field( 'qasb_featured_image_one', $id );
$qasb_featured_image_two 	= get_sub_field( 'qasb_featured_image_two', $id );
$qasb_ctas = get_sub_field('qasb_ctas', $id);
ob_start();

?>
<!--  -->
<!--  -->
<div class="overflow-hidden">
  <div class="row">
      <div class="col-md-6 pr-md-0">
          <div class="left-text2 d-flex align-items-center">
              <div class="text-white">
                  <div class="" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
                    <?php if($qasb_title):?>
                  <div class="mb-3 title white none">
                      <h2><?= $qasb_title ?></h2>
                  </div>
                  <?php endif; if($qasb_content_block):?>
                  <?php echo $qasb_content_block; endif;?>
              </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 px-0">
          <div class="yk-w">
            <?php if($qasb_featured_image_one):?>
              <div class="yk">
                  <div class="inner">
                      <img src="<?=$qasb_featured_image_one['url']?>" alt="<?=$qasb_featured_image_one['title']?>">
                  </div>
              </div>
              <?php endif; if($qasb_featured_image_two): ?>
              <div class="yk red">
                  <div class="inner">
                      <img src="<?= $qasb_featured_image_two['url']?>" alt="<?= $qasb_featured_image_two['alt']?>">
                  </div>
              </div>
              <?php endif; ?>
          </div>
      </div>
  </div>
</div>
<!-- end -->
