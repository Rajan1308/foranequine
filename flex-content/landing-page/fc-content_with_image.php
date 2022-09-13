<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$cwi_title 		= get_sub_field( 'cwi_title', $id );
$cwi_content 		= get_sub_field( 'cwi_content', $id );
$cwi_ctas 		= get_sub_field( 'cwi_ctas', $id );
$image_position 		= get_sub_field( 'image_position', $id );
$cwi_featured_image 		= get_sub_field( 'cwi_featured_image', $id );


ob_start();

?>
<!-- nutrition -->
<section class="overflow-hidden">
  <!-- left Image -->
  <?php if($image_position=='Left'):?>
    <div class="row n-row">
        <div class="col-md-6 pr-0">
            <div class="left-text bg-white">
                <div class=""   data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
                  <?php if($cwi_title):?>
                    <div class="mv-4 title">
                        <h2><?= $cwi_title ?></h2>
                    </div>
                    <?php endif; if($cwi_content):?>
                    <p class="mb-4"><?= $cwi_content ?></p>
                    <?php endif; if($cwi_ctas ):?>
                    <a href="<?=$cwi_ctas['url']?>" class="lm-btn">
                        <span><?=$cwi_ctas['title']?></span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="nr-img"   data-aos="fade-right" data-aos-duration="900" data-aos-delay="100"><img src="<?= $cwi_featured_image['url']?>" alt="<?= $cwi_featured_image['alt']?>" class=""></div>
        </div>
    </div>
    <?php else: ?>
    <!-- Right Image -->
    <div class="row">
        <div class="col-md-6 px-0">
            <div  class="nl-img" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100"><img src="<?= $cwi_featured_image['url']?>" alt="<?= $cwi_featured_image['alt']?>" class=""></div>
        </div>
        <div class="col-md-6 pl36">
            <div class="right-text">
                <div class=""   data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
                  <?php if($cwi_title):?>
                    <div class="mv-4 title white">
                        <h2><?= $cwi_title ?></h2>
                    </div>
                    <?php endif; if($cwi_content):?>
                    <p class="mb-4 text-white"><?=$cwi_content?></p>
                    <?php endif; if($cwi_ctas ):?>
                    <a href="<?=$cwi_ctas['url']?>" class="lm-btn">
                        <span><?=$cwi_ctas['title']?></span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>
<!-- end -->