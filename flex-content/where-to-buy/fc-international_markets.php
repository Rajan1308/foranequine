<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$pn_tabs 		= get_sub_field( 'pn_tabs', $id );
$im_content = get_sub_field( 'im_content', $id );
$our_international_sales_team = get_sub_field('our_international_sales_team', $id);
ob_start();

$country = $_GET['rd_country']; 
$postcode = $_GET['rd_postcode'];



if(!empty($country) && $country=='Ireland' ){
	$county = $_GET['county_ireland'];
} else if(!empty($country) && $country=='UK' ){
	$county = $_GET['county_uk'];
}


  

?>

<!-- About us -->
<section class="py-lg-5 py-4">
  <div class="container">
    <?php if($pn_tabs ):?>
      <div class="row mb-lg-5 mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="col">
              <div class="d-flex links_ flex-wrap justify-content-center">
                <?php foreach($pn_tabs as $key=>$pntab):?>
                  <a href="<?= $pntab['pnt_tab_link']?>" <?php if($pntab['link_target']==true):?>target="_self"<?php else: ?>target="_blank"<?php endif; ?> class="<?php if($key==4):?>active<?php endif; ?>"><?= $pntab['pnt_tab_title']?></a>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
      <?php endif; if($im_content):?>
      <div class="row justify-content-center mb-lg-5 mb-4" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
        <div class="col-lg-9">
            <div class="title black center">
                <h2><?= $im_content ?></h2>
            </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if($our_international_sales_team):?>
      <div class="row" data-aos="fade-down" data-aos-duration="900" data-aos-delay="100">
        <div class="col internationa-market-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <?php foreach($our_international_sales_team as $key=>$oist): 
               $tabName = preg_replace('/\s+/', '', $oist['oist_international_sec_tab_tab_name']);
              ?>
                <li class="nav-item" role="presentation">
                  <button class="nav-link <?php if($key==0): echo "active"; endif; ?>" id="<?=$tabName?>-tab" data-bs-toggle="tab" data-bs-target="#<?=$tabName?>" type="button" role="tab" aria-controls="<?=$tabName?>" aria-selected="true"><?= $oist['oist_international_sec_tab_tab_name'] ?></button>
                </li>
                <?php endforeach; ?>
              </ul>
        </div>
      </div>
      <?php endif; if($our_international_sales_team):?>
      <div class="row">
        <div class="col">
            <div class="tab-content" id="myTabContent">
              <?php foreach($our_international_sales_team as $key=>$oist): 
                $tabName = preg_replace('/\s+/', '', $oist['oist_international_sec_tab_tab_name']);
                $oistName = $oist['oist_international_sec_tab_tab_name'];
                $oisttDeatils = $oist['oist_international_tab_details'];
                $oistMap = $oist['oist_international_map'];

              ?>
                <div class="tab-pane fade <?php if($key==0): echo "show active"; endif; ?>" id="<?=$tabName?>" role="tabpanel" aria-labelledby="<?=$tabName?>-tab">
                    <div class="row">
                      <?php if($oistMap):?>
                        <div class="col-lg-5" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                          <div class="p-4 location-map">
                            <img src="<?=$oistMap['url']?>" alt="<?=$oistMap['alt']?>" class="img-fluid">
                          </div>
                        </div>
                      <?php endif; if($oisttDeatils): ?>
                        <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                            <div class="mCustomScrollbar distributor-wrapper">
                              <?php foreach($oisttDeatils as $tabDtailse):?>
                                <div class="distributors-details-box mb-4">
                                    <div class="row">
                                        <div class="col-8 col-lg-9">
                                            <div class="d-flex">
                                              <?php if($tabDtailse['oisttd_international_logo']):?>
                                                <div class="img-box mr-2">
                                                    <img src="<?= $tabDtailse['oisttd_international_logo']['url']?>" alt="<?= $tabDtailse['oisttd_international_logo']['alt']?>" class="img-fluid">
                                                </div>
                                                <?php endif; ?>
                                                <div class="desc">
                                                    <?php if($tabDtailse['oisttd_international_name']):?>
                                                    <h5 class="mb-1"><?= $tabDtailse['oisttd_international_name'] ?></h5>
                                                    <?php endif; if($tabDtailse['oisttd_international_tagline']): ?>
                                                    <span><?= $tabDtailse['oisttd_international_tagline'] ?></span>
                                                    <?php endif; if($tabDtailse['oisttd_international_s_description']): ?>
                                                    <p><?= $tabDtailse['oisttd_international_s_description'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-3">
                                          <?php if($tabDtailse['oisttd_international_flag']): ?>
                                            <div class="flag-box mb-2">
                                              <img src="<?=$tabDtailse['oisttd_international_flag']['url']?>" alt="<?=$tabDtailse['oisttd_international_flag']['alt']?>" class="img-fluid">
                                            </div>
                                          <?php  endif; if($tabDtailse['oisttd_international_cta']): ?>
                                            <a href="<?=$tabDtailse['oisttd_international_cta']['url']?>" class="visit"><img src="<?= get_template_directory_uri()?>/ui/media/images/globeicon-white.svg" alt=""> <?=$tabDtailse['oisttd_international_cta']['title']?></a>
                                          <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-lg-4 mb-2">
                                                <p class="mb-0">Telephone: +33 6 98 67 51 38</p>
                                                <p  class="mb-0">Email: sylvain.prouvoyeur@redmills.com</p>
                                            </div>
                                            
                                            <p>Get in touch with Sylvain for any request regarding France, Germany, Italy, Spain, Portugal, Denmark, Belgium, Netherlands, Sweden, Latvia, Czech Republic, Poland, Hungary, Austria, Greece and Malta.</p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                  
                            </div>
                        </div>
                        <?php else: ?>
                          <div class="col-lg-7 " data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                          <p class="text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" color="#F26522" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                          </svg>
                          </p>
                            <p class="h1 font-weight-bold text-main d-flex justify-content-center"> Record Not Found!!</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
              </div>
        </div>
      </div>
      <?php endif; ?>




  </div>
</section>
<!-- end -->