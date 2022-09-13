<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$meet_our_ambassadors_title 		= get_sub_field( 'meet_our_ambassadors_title', $id );
$meet_our_ambassadorscontent_block = get_sub_field('meet_our_ambassadorscontent_block', $id);
$do_you_want_to_show_ambassadors_list = get_sub_field('do_you_want_to_show_ambassadors_list', $id);


ob_start();

?>

<!-- ambassadors -->
<section class="ambassadors-section py-lg-5 py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="title black center">
            <h2><?= $meet_our_ambassadors_title  ?></h2>
          </div>
          <div class="text-center"><?php echo $meet_our_ambassadorscontent_block; ?></div>
        </div>
      </div>
      <?php if($do_you_want_to_show_ambassadors_list==true): ?> 
        <!-- <div id="ambassadorslist"></div>  -->
        
        <?php get_template_part('global-templates/meet_our_ambassadors');
       endif; ?>
    </div>
</section>
<!-- end -->