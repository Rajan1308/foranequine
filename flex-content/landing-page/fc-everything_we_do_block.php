<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
$ewdb_background_image = get_sub_field('ewdb_background_image', $id);
$ewdb_title 		= get_sub_field( 'ewdb_title', $id );
$ewdb_banner_image 		= get_sub_field( 'ewdb_banner_image', $id );
$ewdb_featured_content 		= get_sub_field( 'ewdb_featured_content', $id );

$ctas_content = get_sub_field('ctas_content', $id);

ob_start();

?>
<!-- We place the horse at -->
<section class="place-horse-section pt-lg-5 pt-4" style="background-image: url('<?= $ewdb_background_image['url']?>')">
    <div class="container">
      <?php if($ewdb_title):?>
        <div class="row justify-content-center">
            <div class="col-lg-8"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <div class="title white center mb-lg-5 mb-4 text-uppercase">
                    <h2>
                       <?= $ewdb_title ?> 
                    </h2>
                </div>
            </div>
        </div>
      <?php endif; ?>
        <div class="row justify-content-center">

            <div class="col-xl-9">
              <?php if($ewdb_banner_image):?>
                <div class="d-flex justify-content-center mb-lg-5 mb-4"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                    <div><img src="<?= get_template_directory_uri()?>/ui/media/images/lr-icon.png" alt="" class="img-fluid"></div>
                    <div><img src="<?=$ewdb_banner_image['url']?>" alt="<?=$ewdb_banner_image['alt']?>" class="img-fluid"></div>
                    <div><img src="<?= get_template_directory_uri()?>/ui/media/images/lr-icon.png" alt="" class="img-fluid"></div>
                </div>
              <?php endif; if($ewdb_featured_content):?>
                <div class="row">
                  <?php foreach($ewdb_featured_content as $key=>$ewdbfc):?>
                    <div class="col-md-6"  data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                        
                        <div class="phs-box">
                            <div class="text-center mb-4">
                                <h5 class=" text-white"><?=$ewdbfc['ewdbfc_title']?>
                                    <span><?=$ewdbfc['ewdbfc_sub_title']?> </span> 
                                </h5>
                            </div>
                            <?php if($ewdbfc['ewdbfc_fratured_image']):?>
                            <div class="phs-img-box">
                                <img src="<?=$ewdbfc['ewdbfc_fratured_image']['url']?>" alt="<?=$ewdbfc['ewdbfc_fratured_image']['alt']?>" class="img-fluid">
                            </div>
                            <?php endif; ?>
                            <div class="<?php if($key ==0):?>text-content d-flex flex-column justify-content-between bg-red text-white right<?php else: ?>text-content d-flex flex-column justify-content-between bg-white text-black<?php endif; ?>">
                                <div>
                                    <h5><?=$ewdbfc['ewdbfc_heading']?></h5>
                                    <p><?=$ewdbfc['ewdbfc_content']?></p>
                                </div>
                                <?php if($ewdbfc['ewdbfc_ctas']):?>
                                <div class="text-right">
                                  <?php if($key ==0):?>
                                    <a href="<?=$ewdbfc['ewdbfc_ctas']['url']?>" class="rm1" data-toggle="modal" data-target="#horseCare"><?=$ewdbfc['ewdbfc_ctas']['title']?> 
                                      <svg xmlns="http://www.w3.org/2000/svg" width="9.158" height="8.014" viewBox="0 0 9.158 8.014">
                                        <g id="arrow-right-short" transform="translate(-9 -10.124)">
                                          <path id="Path_2053" data-name="Path 2053" d="M18.167,10.292a.572.572,0,0,1,.81,0l3.434,3.434a.572.572,0,0,1,0,.81L18.977,17.97a.573.573,0,1,1-.81-.81L21.2,14.13,18.167,11.1a.572.572,0,0,1,0-.81Z" transform="translate(-4.421)" fill="#fff" fill-rule="evenodd"/>
                                          <path id="Path_2054" data-name="Path 2054" d="M9,17.447a.572.572,0,0,1,.572-.572h7.44a.572.572,0,0,1,0,1.145H9.572A.572.572,0,0,1,9,17.447Z" transform="translate(0 -3.317)" fill="#fff" fill-rule="evenodd"/>
                                        </g>
                                      </svg>
                                      </a>
                                    <?php else:?>
                                      <a href="<?=$ewdbfc['ewdbfc_ctas']['url']?>" class="rm2" data-toggle="modal" data-target="#horseFeed"><?=$ewdbfc['ewdbfc_ctas']['title']?> <svg xmlns="http://www.w3.org/2000/svg" width="9.158" height="8.014" viewBox="0 0 9.158 8.014">
                                        <g id="arrow-right-short" transform="translate(-9 -10.124)">
                                          <path id="Path_2053" data-name="Path 2053" d="M18.167,10.292a.572.572,0,0,1,.81,0l3.434,3.434a.572.572,0,0,1,0,.81L18.977,17.97a.573.573,0,1,1-.81-.81L21.2,14.13,18.167,11.1a.572.572,0,0,1,0-.81Z" transform="translate(-4.421)" fill="#f26522" fill-rule="evenodd"/>
                                          <path id="Path_2054" data-name="Path 2054" d="M9,17.447a.572.572,0,0,1,.572-.572h7.44a.572.572,0,0,1,0,1.145H9.572A.572.572,0,0,1,9,17.447Z" transform="translate(0 -3.317)" fill="#f26522" fill-rule="evenodd"/>
                                        </g>
                                      </svg>
                                      
                                      </a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($ctas_content):?>
    <div class="bottom-content d-flex align-items-center py-3 ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="row"   data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                        <div class="col-md-4 mb-3 mb-md-0">
                          <?php foreach($ctas_content['ctas_content_logos'] as $logoContent):?>
                            <img src="<?=$logoContent['url']?>" alt="<?=$logoContent['alt']?>" class="img-fluid mb-2">
                          <?php endforeach; ?>
                        </div>
                        <div class="col-md-8">
                            <div class="title small black">
                                <h2><?= $ctas_content['ctas_content_title']?></h2>
                              </div>
                            <p><?= $ctas_content['ctas_content_content']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>
<!-- end -->