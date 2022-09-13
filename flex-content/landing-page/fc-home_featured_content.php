<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$featured_content 		= get_sub_field( 'featured_content', $id );

ob_start();

?>
<!-- About us -->
<section class="home-about-section py-lg-5 py-4">
  <div class="container">
    
    <div class="row justify-content-center">
      <?php foreach($featured_content as $fcontent):?>
        <div class="col-lg-4 col-md-6 mb-lg-0 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="has-box d-flex justify-content-between align-items-start flex-column px-3 py-4">
                <div>
                 
                    <div class="d-flex align-items-end top mb-4">
                        <div class="icon mr-3">
                            <img src="<?=$fcontent['fc_icon']['url']?>" alt="<?=$fcontent['fc_icon']['alt']?>">
                        </div>
                        <div class="has-box-title">
                            <span><?=$fcontent['fc_title']?> </span>
                            <h3 class="mb-0"><?=$fcontent['fc_sub_title']?></h3>
                        </div>
                    </div>
                    <p class="mb-4"><?=$fcontent['fc_content']?></p>
                </div>
                <?php if($fcontent['fc_ctas']):?>
                <a href="<?=$fcontent['fc_ctas']['url']?>" class="lm-btn secondary"><span><?=$fcontent['fc_ctas']['title']?></span></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- end -->