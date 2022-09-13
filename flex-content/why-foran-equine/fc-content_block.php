<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$cb_title 	= get_sub_field( 'cb_title', $id );
$cb_content 		= get_sub_field( 'cb_content', $id ); 

ob_start();

?>

 <!--  -->
 <section class="bg-gray py-lg-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title none black">
                    <h2 class="mb-3"><?= $cb_title ?></h2>
                    
                </div>
                <?php echo $cb_content; ?>
            </div>
        </div>
        
    </div>
</section>
<!-- end -->