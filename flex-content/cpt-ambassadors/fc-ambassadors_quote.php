<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$ambassadorsquote 		= get_sub_field( 'ambassadorsquote', $id ); 

ob_start();

?>

<div class="oc-section white py-5">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="content-box">
                  <div class="row">
                      <div class="col">
                      <div class="font-italic"><?php echo $ambassadorsquote; ?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</div>
