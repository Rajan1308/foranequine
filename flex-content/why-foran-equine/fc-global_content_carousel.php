<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$gcc_content_slider = get_sub_field( 'gcc_content_slider', $id ); 
// gccccs_title, gccces_content

ob_start();

?>

 <!--  -->
 <?php if($gcc_content_slider): ?>
 <section class="py-lg-5 py-4">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col">
                <div class="global-carousel">
                    <div class="owl-carousel owl-theme">
                      <?php foreach($gcc_content_slider as $gcs):?>
                        <div class="item">
                            <h5><?= $gcs['gccccs_title']?></h5>
                            <p class="mb-0"><?= $gcs['gccces_content']?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--  -->