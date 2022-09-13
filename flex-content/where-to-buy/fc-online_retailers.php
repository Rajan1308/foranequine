<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$pn_tabs 		= get_sub_field( 'pn_tabs', $id );

ob_start();

$country = $_GET['rd_country']; 
$postcode = $_GET['rd_postcode'];



if(!empty($country) && $country=='Ireland' ){
	$county = $_GET['county_ireland'];
} else if(!empty($country) && $country=='UK' ){
	$county = $_GET['county_uk'];
}


  $ppp = (isset($_GET["ppp"])) ? $_GET["ppp"] : 999;
  $page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $meta_query = array('relation' => 'AND');			
			if(!empty($_GET['rd_country'])){
				$meta_query[] = [
				'key'     => 'rd_stockists_country',
				'value'   => $_GET['rd_country'],
				'compare' => 'LIKE',
        ];
			}			
			if(!empty($_GET['rd_postcode'])){
				$meta_query[] = [
				'key'     => 'rd_stockists_postcode',
				'value'   => $_GET['rd_postcode'],
				'compare' => 'LIKE',
        ];
			}			
			if($country == 'Ireland'){
				if(!empty($_GET['county_ireland'])){
					$meta_query[] = [
					'key'     => 'rd_stockists_county_ir',
					'value'   => $_GET['county_ireland'],
					'compare' => 'LIKE',
          ];
				}
				} else if ($country == 'UK') {
					if(!empty($_GET['county_uk'])){
						$meta_query[] = [
						'key'     => 'rd_stockists_county_uk',
						'value'   => $_GET['county_uk'],
						'compare' => 'LIKE',
            ];
					}
			}
		
		
		$args = array(
				'post_type' => 'stockists',
				'posts_per_page' => $ppp,
				'orderby'   => 'title',
				'order' => 'ASC',
				'paged'    => $paged,
				'meta_query'     => $meta_query,
				'tax_query' => [
					[
							'taxonomy' => 'stockists_type',
							'field' => 'slug',
							'terms' => 'online-retailers',
					]
				],
        
		);
    $loop = new WP_Query($args);
    $num = $loop->post_count; 

?>

<!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
    <?php if($pn_tabs ):?>
      <div class="row mb-lg-5 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="col">
              <div class="d-flex links_ flex-wrap justify-content-center">
                <?php foreach($pn_tabs as $key=>$pntab):?>
                  <a href="<?= $pntab['pnt_tab_link']?>" <?php if($pntab['link_target']==true):?>target="_self"<?php else: ?>target="_blank"<?php endif; ?> class="<?php if($key==1):?>active<?php endif; ?>"><?= $pntab['pnt_tab_title']?></a>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
      <?php endif; ?>
      <div class="row mb-lg-5 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="col">
           <form action="" method="get" id="stockiesdataform">
              <div class="d-flex justify-content-center">
                  <div class="select3">
                  <?php $field_key_contry  = "field_6104bcb6c6c4e";
                        $field_cnt      = get_field_object($field_key_contry);
                        $field_key_contyir  = "field_6104bc87c6c4c";
                        $field_cnt_ir      = get_field_object($field_key_contyir);
                        $field_key_contyuk  = "field_6108b09beda5c";
                        $field_cnt_uk      = get_field_object($field_key_contyuk);?>
                      <select name="rd_country" id="rd_country">
                        <option value="" selected>Select Country</option>
                        <option value="UK" <?php if($country == 'UK') { echo 'selected'; } ?>> UK</option>
                          <!-- <?php foreach( $field_cnt['choices'] as $k => $v ) : ?>							
                              <option value="<?php echo $k; ?>" <?php if($country == $k) { echo 'selected'; } ?>> <?php echo $v; ?></option>
                          <?php endforeach; ?> -->
                      </select>
                  </div>
                  
                  <button type="submit" id="submit" class="lm-btn skew0">Search</button>
                  <button  id="reset1" class="lm-btn black skew0" href="/where-to-buy/online-retailers/">Reset</button>
              </div>
              </form>
          </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
        <?php if($num>0):?>
          <div class="col-md-9 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <div class="col-12" style = "display:none;">
              <p class="show-num">Showing <?= $num ?> stockists  <?php if(!empty($country)){?> - Country : <?php echo $country;?><?php } ?>  <?php if(!empty($county)){?> - County : <?php echo $county;?><?php } ?> <?php if(!empty($postcode) && (!empty($county) || !empty($country) )){?> - <?php } ?> <?php if(!empty($_GET['rd_postcode'])){?>Post Code : <?php echo $postcode;?><?php } ?></p>
            </div>
            <div id="map" class="map acf-map">
              <?php $m=1;
                if ($loop -> have_posts()) :  while ( $loop->have_posts() ) : $loop->the_post();									
                $address_line_1 = get_field('rd_stockists_address_line_1');
                $address_line_2 = get_field('rd_stockists_address_line_2');
                $address_line_3 = get_field('rd_stockists_address_line_3');									
                $location_lat = get_field('rd_stockists_location_lat');
                $location_lng = get_field('rd_stockists_location_lng');
                                  $description = get_field('stockists_description');		
                $location = get_field('location');			
                $country = get_field('rd_stockists_country'); 
                $county_uk = get_field('rd_stockists_county_uk'); 
                $county_ir = get_field('rd_stockists_county_ir');
                $phone = get_field('rd_stockists_phone');
                if(!empty($county_uk) ){
                  $county = $county_uk;
                } else if(!empty($county_ir) ){
                  $county = $county_ir;
                }
                if(!empty($location_lat) ){
                  $lat = $location_lat;
                } else {
                  $lat = $location['lat'];
                }
                if(!empty($location_lng) ){
                  $lng = $location_lng;
                } else {
                  $lng = $location['lng'];
                }?>
                <div class="marker" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>" data-mapkey="<?php echo $m;?>">
                  <h4><?php the_title(); ?></h4>
                  <p class="address"><?php echo $address_line_1; ?><?php if (!empty($address_line_1 && $address_line_2  )) {?>, <?php }?><?php echo $address_line_2; ?><?php if (!empty($address_line_3)) {?>, <?php }?><?php echo $address_line_3; ?><?php if (!empty($address_line_3 || $county || $country  )) {?>, <?php }?> <?php echo $county; ?><?php if (!empty($county && $country  )) {?>, <?php }?> <?php echo $country; ?></p> 
                  <!-- <div class="popup-cta">
                    <a target="_bank" class="btn btn-default hvr-shutter-in-horizontal"  href="https://www.google.com/maps?saddr=My+Location&daddr=<?php  echo $lat . ',' . $lng; ?>"><?php _e('Get Directions','roots'); ?></a>
                    <?php if (!empty($phone)) {?>	
                      <a class="btn btn-default hvr-shutter-in-horizontal" href="tel:<?= $phone ?>"><strong>Contact Us</strong></a>
                    <?php }?>
                  </div> --> <!-- ./popup-cta-->
                </div> <!-- ./marker -->
                <?php $m++;  
                  endwhile; 
                wp_reset_query();
                wp_reset_postdata(); 
                  else: 
                  endif;  
              ?>
            </div> <!-- ./map -->
          </div>
          <div class="col-md-3 mb-lg-0 mb-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
              <div class="mCustomScrollbar addressbox-wrapper">
                  <?php $m=1;
                  if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); 
                    global $post;
                    $link = get_field('rd_stockists_link');
                    $email = get_field('rd_stockists_email');
                    $phone = get_field('rd_stockists_phone');
                    $address_line_1 = get_field('rd_stockists_address_line_1');
                    $address_line_2 = get_field('rd_stockists_address_line_2');
                    $address_line_3 = get_field('rd_stockists_address_line_3');									
                    $postcode = get_field('rd_stockists_postcode');
                    $country = get_field('rd_stockists_country');
                    $location_lat = get_field('rd_stockists_location_lat');
                    $location_lng = get_field('rd_stockists_location_lng');
                    $location = get_field('location');
                    $description = get_field('stockists_description'); 									
                    if(!empty($county_uk) ){
                      $county = $county_uk;
                    } else if(!empty($county_ir) ){
                      $county = $county_ir;
                    }
                    if(!empty($location_lat) ){
                      $lat = $location_lat;
                    } else {
                      $lat = $location['lat'];
                    }
                    if(!empty($location_lng) ){
                      $lng = $location_lng;
                    } else {
                      $lng = $location['lng'];
                    }
                  ?>
                  <div class="mb-4 pb-4 address-box">
                      <h5><a class="storetitle text-dark" href="javascript:void(0);" onclick="javascript:getlocation('<?php echo get_the_title($post->ID);?>','<?php echo $lat; ?>','<?php echo $lng; ?>','<?php echo $address_line_1; ?>','<?php echo $address_line_2; ?>','<?php echo $address_line_3; ?>','<?php echo $county; ?>','<?php echo $country; ?>','<?php echo $phone; ?>','direction');"><?= get_the_title($post->ID) ?></a></h5>
                      <p><?php echo $county; ?><?php if (!empty($county && $country  )) {?>, <?php }?><?php echo $country; ?></p>
                      <?php if (!empty($phone)) {?>
                      <div class="d-flex mb-3">
                          <span class="d-inline-block mr-3">
                              <img src="<?= get_template_directory_uri()?>/ui/media/images/phone-icon1.svg" alt="">
                          </span>
                          <p  class="mb-0"> <?= $phone ?></p>
                      </div>
                      <?php }?>
                      <div class="d-flex mb-3">
                          <span class="d-inline-block mr-3">
                              <img src="<?= get_template_directory_uri()?>/ui/media/images/road-mark.svg" alt="">
                          </span>
                          <p class="mb-0"><?php echo $address_line_1; ?><?php if (!empty($address_line_1 && $address_line_2  )) {?>, <?php }?><?php echo $address_line_2; ?><?php if (!empty($address_line_3)) {?>, <?php }?><?php echo $address_line_3; ?><?php if (!empty($address_line_3 || $county || $country  )) {?>, <?php }?> <?php echo $county; ?><?php if (!empty($county && $country  )) {?>, <?php }?> <?php echo $country; ?></p>
                      </div>

                      <div class="d-flex justify-content-between">
                          <a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php  echo $lat . ',' . $lng; ?>" target="_bank"  class="site-link">
                              <img src="<?= get_template_directory_uri()?>/ui/media/images/globeicon.svg" alt="">
                              <?php _e(' Visit Site','foranequine'); ?>
                          </a>
                          <?php if($email):?>
                          <a href="mailto:<?=$email?>" class="site-link">
                              <img src="<?= get_template_directory_uri()?>/ui/media/images/emailicon.svg" alt="">
                              <?php _e('  Email us','foranequine'); ?>
                          </a>
                          <?php endif; ?>
                      </div>
                      
                  </div>
                  <?php $m++;?>
                  <?php  endwhile;
                  endif;
                  wp_reset_postdata();?>
                  <nav class="pagination-nav " aria-label="Page navigation">
                    <ul class="pagination stockistpage page-numbers">
                      <?php
                        $pagignation = paginate_links(array(
                        'current' =>max(1, $paged),
                        'total' => $loop->max_num_pages,
                        'type' => 'array',
                        'prev_next' => false,
                        ));
                      if (!empty($pagignation)) {
                        foreach ($pagignation as $pagignation_val) {
                          $pagignation_val = str_replace('page-numbers', 'stock-numbers page-link', $pagignation_val);
                            echo '<li>';
                            echo $pagignation_val;
                            echo '</li>';
                          }
                        }
                      ?>
                    </ul>
                  </nav>
                  <?php
                  if ($_GET['page_num']){
                    exit;
                  } ?>
              </div>
          </div>
          <?php else:  ?>
          <p class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" color="#F26522" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
            </svg>
            </p>
              <p class="h1 font-weight-bold text-main d-flex justify-content-center"> <?php _e('Record Not Found!!', 'foranequine') ?></p>
        <?php endif; ?>
      </div>
  </div>
</section>
<!-- end -->