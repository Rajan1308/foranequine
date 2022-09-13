<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$ag_title = get_sub_field('ag_title', $id);
$gallery 		= get_sub_field( 'gallery', $id );  

ob_start();

?>
<!-- -->
<section class="py-lg-5 py-4">
  <?php if($ag_title):?>
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="bg-white">
                  <div class="row justify-content-center">
                      <div class="col-lg-8"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                          <div class="title black center pt-lg-5 pt-4 mb-4">
                              <h2><?= $ag_title ?></h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php endif; if($gallery): ?>
  <div class="bg-white pt-lg-5 pt-4">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-11">
                  <div class="row" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
                    <?php foreach($gallery as $key=>$galleryData):?>
                      <div class="col-lg-4 col-md-6 mb-4">
                          <div class="gallery-img-box">
                              <a href="<?=$galleryData['url']?>" data-lightbox="gallery">
                                  <img src="<?=$galleryData['url']?>" alt="<?=$galleryData['alt']?>">
                              </a>
                          </div>
                      </div>
                      <?php endforeach; ?>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php endif; ?>
</section>
<!-- end -->