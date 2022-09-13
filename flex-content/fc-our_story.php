<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$our_story_title 		= get_sub_field( 'our_story_title', $id );
$our_story_sub_title = get_sub_field('our_story_sub_title', $id);
$our_story_content_block = get_sub_field('our_story_content_block', $id);
$our_story_ctas_link = get_sub_field('our_story_ctas_link', $id);
$our_story_featured_image = get_sub_field('our_story_featured_image', $id);
$our_story_ctas_link_copy = get_sub_field('our_story_ctas_link_copy', $id);

ob_start();

?>

 <!-- About us -->
 <section class="py-lg-5 py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="">
                    <div class="title black mb-lg-4">
                        <h2><?= $our_story_title ?></h2>
                    </div>
                    <p class="font-weight-semi-bold mb-5">
                        <?= $our_story_sub_title ?>
                    </p>
                    <div class="mb-5"><?php echo $our_story_content_block; ?></div>
                    <?php if($our_story_ctas_link ):?>  
                      <a href="<?=$our_story_ctas_link['url']?>" class="lm-btn"><span><?=$our_story_ctas_link['title']?></span></a>
                    <?php endif; ?>
                    <?php if($our_story_ctas_link_copy ):?>  
                      <a href="<?=$our_story_ctas_link_copy['url']?>" class="lm-btn black"><span><?=$our_story_ctas_link_copy['title']?></span></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($our_story_featured_image):?>
            <div class="col-md-6 mb-lg-0 mb-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <div class="position-relative two-images h-100">
                  <?php if($our_story_featured_image['top_image']):?>
                  <div class="top-img">
                      <img src="<?=$our_story_featured_image['top_image']['url']?>" alt="<?=$our_story_featured_image['top_image']['alt']?>" class="w-100">
                  </div>
                  <?php endif; if($our_story_featured_image['bottom_image']):?>
                  <div class="bottom-img">
                      <img src="<?=$our_story_featured_image['bottom_image']['url']?>" alt="<?=$our_story_featured_image['bottom_image']['url']?>" class="w-100">
                  </div>
                  <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>
<!-- end -->