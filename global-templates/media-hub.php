<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();

 
$media_hub = get_field('media_hub', 'options');
$mhb_title 		= get_sub_field( 'mhb_title', $pageID ); 
$mhb_sub_title = get_sub_field('mhb_sub_title', $pageID);
?>

 <!-- social media -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row"   data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
          <div class="title center mb-4 text-uppercase">
              <h2><?= $mhb_title ?> <span class="d-inline-block"><?= $mhb_sub_title ?></span> </h2>
          </div>
      </div>
      <?php if($media_hub):?>
      <div class="row company-tabs mb-lg-5 mb-4"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach($media_hub as $key=>$mediaHub):?>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php if($key==0):?>active<?php endif; ?>" id="foran-tab-<?=$key+1?>" data-bs-toggle="tab" data-bs-target="#foran-<?=$key+1?>" type="button" role="tab" aria-controls="foran-<?=$key+1?>" aria-selected="true">
                  <img src="<?=$mediaHub['mh_tab_logo']['url']?>" alt="<?=$mediaHub['mh_tab_logo']['alt']?>" class="img-fluid" >
                </button>
              </li>
              <?php endforeach; ?>
            </ul>
      </div>

      <div class="tab-content" id="myTabContent"   data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
        <?php foreach($media_hub as $key=>$mediaHub):
          $media = $mediaHub['media'];
          ?>
          <div class="tab-pane fade <?php if($key==0):?>show active<?php endif; ?>" id="foran-<?=$key+1?>" role="tabpanel" aria-labelledby="foran-tab-<?=$key+1?>">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                  <div class="row">
                    <?php foreach($media as $keys=>$mediaData):?>
                      <div class="col-lg-4 col-md-6 px-lg-4 mb-4 mb-lg-0">
                          <div class="p-3 social-box">
                              <h4 class="text-uppercase"><?=$mediaData['mh_title']?></h4>
                              <label><?=$mediaData['follow_us_label']?></label>
                              <a href="<?=$mediaData['follow_us_link']['url']?>"><?=$mediaData['follow_us_link']['title']?></a>
                              <div class="">
                              <?php echo do_shortcode($mediaData['content__shortcode']);?>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
  </div>
</section>
<!-- end -->