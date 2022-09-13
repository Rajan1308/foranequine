<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$ospb_featured_image 	= get_sub_field( 'ospb_featured_image', $id );
$ospb_logo 		= get_sub_field( 'ospb_logo', $id );
$ospb_title = get_sub_field('ospb_title', $id);
$ospb_content_block = get_sub_field('ospb_content_block', $id);
$ospb_stgaes 		= get_sub_field( 'ospb_stgaes', $id );
$ospb_ctas_one = get_sub_field('ospb_ctas_one', $id);
$ospb_cta_two = get_sub_field('ospb_cta_two', $id);

ob_start();

?>

  <!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row align-items-center">
        
          <div class="col-md-5 mb-lg-0 mb-4 text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
            <?php if($ospb_featured_image):?>
            <div class="rounded-img mb-3">
                <img src="<?=$ospb_featured_image['url']?>" alt="" class="w-100">
            </div>
            <?php endif; if($ospb_logo): ?>
            <div class="skew-box d-inline-block mb-3">
                <span><img src="<?=$ospb_logo['url']?>" alt="<?=$ospb_logo['alt']?>"></span>
            </div>
            <?php endif; ?>
          </div>

          <div class="col-md-7 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <div class="">
                <?php if($ospb_title):?>
                  <div class="title black mb-lg-4">
                      <h2><?= $ospb_title ?></h2>
                  </div>
                  <?php endif; ?>
                  <div class="mb-3">
                     <?php echo $ospb_content_block; ?>
                  </div>
                  <?php if($ospb_stgaes):?>
                  <ul class="list-unstyled stages">
                    <?php foreach($ospb_stgaes as $key=> $os):?>
                      <li class="mb-2"><span><img src="<?= get_template_directory_uri()?>/ui/media/images/i1.png" alt=""></span>  <?=$key+1?>. <?=$os['ospbs_heading']?></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  <div>
                      <?php if($ospb_ctas_one):?><a href="<?=$ospb_ctas_one['url']?>" class="lm-btn"><span><?=$ospb_ctas_one['title']?></span></a><?php endif; ?>
                      <?php if($ospb_cta_two):?><a href="<?=$ospb_cta_two['url']?>" class="lm-btn black"><span><?=$ospb_cta_two['title']?></span></a><?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end -->