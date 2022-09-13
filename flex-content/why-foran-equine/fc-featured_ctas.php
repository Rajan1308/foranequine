<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$fc_background 	= get_sub_field( 'fc_background', $id );
$fc_featured_image 		= get_sub_field( 'fc_featured_image', $id );
$fc_title = get_sub_field('fc_title', $id);
$fc_content_block = get_sub_field('fc_content_block', $id);
$fc_ctas = get_sub_field('fc_ctas', $id);

$fc_featured_content = get_sub_field('fc_featured_content', $id);
// fcfc_featured_title, fcfc_number, fcfc_sub_title
ob_start();

?>

<!--  -->
<section data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
    <?php if($fc_background == true):?>
    <div class="container">
        <div class="row align-items-center">
          <?php if($fc_featured_image):?>
            <div class="col-lg-5 col-md-6">
                <div class=" ff">
                    <img src="<?= $fc_featured_image['url']?>" alt="<?= $fc_featured_image['alt']?>">
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-7 col-md-6 py-3">
              <?php if($fc_title):?>
                <div class="title">
                    <h2><?= $fc_title ?></h2>
                </div>
                <?php endif; ?>
                <?php echo $fc_content_block; ?>
                <?php if($fc_ctas):?>
                <a href="<?= $fc_ctas['url'] ?>" class="lm-btn">
                    <span><?=$fc_ctas['title']?></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="bg-gray position-relative">
      <?php if($fc_featured_content):?>
        <div class="available-country">
            <h5 class="font-weight-bold"><?=$fc_featured_content['fcfc_featured_title']?></h5>
            <span>
              <?=$fc_featured_content['fcfc_number']?>
            </span>
            <h2 class="font-weight-black"><?=$fc_featured_content['fcfc_sub_title']?></h2>
        </div>
        <?php endif; ?>

        <div class="container">
            <div class="row justify-content-end align-items-center">
              <?php if($fc_featured_image):?>
                <div class="col-lg-5 col-md-6">
                    <div class="gg">
                    <img src="<?= $fc_featured_image['url']?>" alt="<?= $fc_featured_image['alt']?>">
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-6 col-md-5 py-3">
                    <?php if($fc_title):?>
                    <div class="title">
                        <h2><?= $fc_title ?></h2>
                    </div>
                    <?php endif; ?>
                    <?php echo $fc_content_block; ?>
                    <?php if($fc_ctas):?>
                    <a href="<?= $fc_ctas['url'] ?>" class="lm-btn">
                        <span><?=$fc_ctas['title']?></span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>
<!-- end -->