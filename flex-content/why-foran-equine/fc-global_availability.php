<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();

$ga_map_image 	= get_sub_field( 'ga_map_image', $id );
$ga_title 		= get_sub_field( 'ga_title', $id );
ob_start();

?>

<!-- map -->
<section class="map-section py-lg-5 py-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
  <div class="container">
    <?php if($ga_title):?>
      <div class="row">
          <div class="col">
              <div class="title white center text-uppercase mb-3">
                  <h2><?= $ga_title ?></h2>
              </div>
          </div>
      </div>
      <?php endif; ?>
      <div class="row">
          <div class="col">
              <img src="<?= $ga_map_image['url']?>" alt="<?= $ga_map_image['title']?>" class="img-fluid">
          </div>
      </div>
  </div>
</section>
<!-- end -->