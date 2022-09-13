<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$get_in_touch_title = get_sub_field( 'get_in_touch_title', $id );
$contact_form 	= get_sub_field( 'contact_form', $id );
$featured_content 		= get_sub_field( 'featured_content', $id ); 

ob_start();

?>

 <!-- address section -->
 <section class="py-lg-5 py-4">
    <div class="container">
    <?php if($get_in_touch_title):?>
    <div class="row">
        <div class="col">
            <div class="title black center mb-4 mb-lg-5">
                <h2><?= $get_in_touch_title ?></h2>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2000">
            <div class="contact-form-wrapper">
                <?php echo do_shortcode( $contact_form ); ?>
            </div>
            
        </div>
        <?php if($featured_content):?>
        <div class="col-lg-6 d-flex justify-content-between flex-column" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000">
          <?php foreach($featured_content as $key=>$featuredContent):?>
            <div class="form-right <?php if($key==0):?>mb-3<?php endif; ?>">
                <div class="<?php if($key==0):?>red text-white<?php else: ?>white<?php endif; ?> ">
                    <h5><?= $featuredContent['featured_title']?></h5>
                    <p><?= $featuredContent['featured_content']?></p>
                    <?php if($featuredContent['featured_ctas']):?><a href="<?= $featuredContent['featured_ctas']['url'] ?>" class="<?php if($key==0):?>lm white-link text-white<?php else: ?>lm<?php endif; ?>"><?= $featuredContent['featured_ctas']['title'] ?></a><?php endif; ?>
                </div>
                <img src="<?= $featuredContent['featured_image']['url']?>" alt="<?= $featuredContent['featured_image']['alt']?>" class="">
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    </div> 
  </section>
  <!-- end -->