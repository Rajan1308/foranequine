<?php
/**
 * The template for displaying all single posts
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$category = get_the_category('goal-supporting');
$firstCategory = $category[0]->cat_name;

// ACF 
$product_multiple_images = get_field('product_multiple_images', $post->ID);
$product_video_link = get_field('product_video_link', $post->ID);

$pcb_content = get_field('pcb_content', $post->ID);
$pcb_sub_title = get_field('pcb_sub_title', $post->ID);
$pcb_featured_content = get_field('pcb_featured_content', $post->ID);

$where_to_buy = get_field('where_to_buy', $post->ID);
$ask_our_experts = get_field('ask_our_experts', $post->ID);

$nutritional_information = get_field('nutritional_information', $post->ID);
$directions_for_use = get_field('directions_for_use', $post->ID);
$sizes_available = get_field('sizes_available', $post->ID);
$precautions_and_hazards = get_field('precautions_and_hazards', $post->ID); 


get_template_part( 'global-templates/inner-hero' );
?>

<!-- Product details -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row mb-lg-5 mb-4">
          <?php if($product_multiple_images):?>
          <div class="col-lg-5" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
            <div class="outer mb-4">
              <div id="productBigImage" class="owl-carousel owl-theme product-big-image">
                <?php foreach($product_multiple_images as $pmi):?>
                <div class="item">
                  <img src="<?=$pmi['url']?>" alt="<?=$pmi['title']?>">
                </div>
                <?php endforeach; ?>
              </div>
              <div id="thumbs" class="owl-carousel owl-theme thumbs">
                <?php foreach($product_multiple_images as $pmi):?>
                  <div class="item">
                    <img src="<?=$pmi['url']?>" alt="<?=$pmi['title']?>">
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php if($product_video_link):?>
            <p class="text-main font-weight-semi-bold ">
            <?php _e('How to use it ?','foranequine');?> <a id="myfancybox" class="watch-video" data-fancybox href="<?= $product_video_link ?>"><?php _e('(Watch Video)','foranequine');?></a>
            </p>
            <?php endif; ?>
          </div> <!-- ./col-lg-5 -->
          <?php endif; ?>
          <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
              <h2 class="font-weight-bold mb-3"><?= get_the_title($post->ID); ?></h2>
              <?php echo $pcb_content; ?>
              <?php if($pcb_sub_title):?>
                <h5 class="font-weight-bold text-main mb-3"><?= $pcb_sub_title ?></h5>
              <?php endif; ?>
              <?php if($pcb_featured_content): foreach($pcb_featured_content as $pfc): ?>
              <h4 class="block-title mb-3"><?=$pfc['pcbfc_title']?></h4>
              <ul class="list-unstyled custom-list-style">
                <?php foreach($pfc['pcbfc_featured_list'] as $pfcfl):?>
                  <li><?=$pfcfl['pcbfcfl_list_info']?></li>
                  <?php endforeach; ?>
              </ul>
              <?php endforeach; endif; ?>
              
              <div>
                  <?php if($where_to_buy):?><a href="<?=$where_to_buy['url']?>" class="lm-btn skew0 rounded ml-0"><?=$where_to_buy['title']?></a><?php endif; ?>
                    <?php if($ask_our_experts):?><a href="<?=$ask_our_experts['link']?>" class="lm-btn skew0 rounded black"><?=$ask_our_experts['title']?></a><?php endif; ?>
              </div>
          </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
          <div class="col">
              <div class="tabs4">
                  <ul class="nav nav-tabs" id="" role="tablist">
                      <?php if($nutritional_information['pd_title']):?>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="ni-tab" data-bs-toggle="tab" data-bs-target="#ni" type="button" role="tab" aria-controls="ni" aria-selected="true"><?= $nutritional_information['pd_title']?></button>
                      </li>
                      <?php endif; if($directions_for_use['pd_title']):?>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dfu-tab" data-bs-toggle="tab" data-bs-target="#dfu" type="button" role="tab" aria-controls="dfu" aria-selected="false"><?= $directions_for_use['pd_title'] ?></button>
                      </li>
                      <?php endif; if($sizes_available['pd_title']):?>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sa-tab" data-bs-toggle="tab" data-bs-target="#sa" type="button" role="tab" aria-controls="sa" aria-selected="false"><?=$sizes_available['pd_title']?></button>
                      </li>
                      <?php endif; if($precautions_and_hazards['pd_title']): ?>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pah-tab" data-bs-toggle="tab" data-bs-target="#pah" type="button" role="tab" aria-controls="pah" aria-selected="false"><?= $precautions_and_hazards['pd_title'] ?></button>
                        </li>
                        <?php endif; ?>
                    </ul>
              </div>
              <div class="tabs4-content p-lg-5 p-3">
                  <div class="tab-content" id="">
                      <?php if($nutritional_information['pd_title'] && $nutritional_information['pd_nutritional_information']):?>
                      <div class="tab-pane fade show active" id="ni" role="tabpanel" aria-labelledby="ni-tab">
                          <h5 class="text-center font-weight-bold mb-4"><?= $nutritional_information['pd_nutritional_information']['ni_heading']?></h5>
                          <?php if($nutritional_information['pd_nutritional_information']):?>
                          <table class="w-100 tabs4-table">
                              <thead>
                                  <tr>
                                    <th><?php _e('Bodyweight', 'foranequine');?></th>
                                    <th></th>
                                    <th><?php _e('Dose per Day', 'foranequine');?> </th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach($nutritional_information['pd_nutritional_information'] as $nipbData): 
                                  $nipb = $nipbData['bodyweight_content'];
                                  foreach($nipb as $tabDataContent):
                                  ?>
                                  <tr>
                                    <td><?= $tabDataContent['bodyweight_label']?></td>
                                    <td><?= $tabDataContent['bwl_body_weight_']?></td>
                                    <td><?= $tabDataContent['dose_per_day']?></td>
                                  </tr>
                                  <?php endforeach;endforeach; ?>
                              </tbody>
                          </table>
                          <?php endif; ?>
                      </div>
                      <?php endif; if($directions_for_use):?>
                      <div class="tab-pane fade" id="dfu" role="tabpanel" aria-labelledby="dfu-tab">
                        <?php if($directions_for_use['pd_directions_for_use']):?>
                          <h5 class="text-center font-weight-bold mb-4"><?= $directions_for_use['pd_directions_for_use']['ni_heading']?></h5>
                          <table class="w-50 m-auto tabs4-table">
                              <thead>
                                  <tr>
                                      <th><?php _e('Bodyweight', 'foranequine');?></th>
                                      <th><?php _e('Per Kg', 'foranequine');?> </th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach($directions_for_use['pd_directions_for_use'] as $nipbData): 
                                  $nipb = $nipbData['directions_for_use'];
                                  foreach($nipb as $tabDataContent):
                                  ?>
                                  <tr>
                                    <td><?= $tabDataContent['dfu_bodyweight']?></td>
                                    <td><?= $tabDataContent['dfu_per_kg']?></td> 
                                  </tr>
                                  <?php endforeach;endforeach; ?>
                              </tbody>
                          </table>
                          <?php endif; ?>
                      </div>
                      <?php endif; if($sizes_available): ?>
                      <div class="tab-pane fade" id="sa" role="tabpanel" aria-labelledby="sa-tab">
                          <div class="row justify-content-center">
                            <?php if($sizes_available['pd_sizes_available']):?>
                              <div class="col-lg-9">
                                <?php foreach($sizes_available['pd_sizes_available'] as $sizedata):?>
                                  <h5 class="text-center font-weight-bold mb-4"><?= $sizedata['ni_heading']?></h5>
                                  <p><?= $sizedata['sa_content'] ?></p>
                                  <?php if($sizedata['sa_image']):?>
                                  <div class="text-center">
                                      <img src="<?= $sizedata['sa_image'] ?>" alt="<?= $sizedata['sa_image']?>" class="img-fluid">
                                  </div>
                                  <?php endif; ?>
                                  <?php endforeach;?>
                              </div>
                              <?php endif; ?>
                          </div>
                      </div>
                      <?php endif; if($precautions_and_hazards):?>
                        <div class="tab-pane fade" id="pah" role="tabpanel" aria-labelledby="pah-tab">
                          <h5 class="text-center font-weight-bold mb-4"><?= $precautions_and_hazards['pd_precautions_and_hazards']['ni_heading']?></h5>
                          <?php foreach($precautions_and_hazards['pd_precautions_and_hazards'] as $sizedata):?>
                            <p><?= $sizedata['pah_content']?></p>
                          <?php endforeach;?> 
                        </div>
                      <?php endif; ?>
                    </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end -->

 


<?php
  if( have_posts() ) :
    while( have_posts() ) :
      the_post();
      if(have_rows( 'supplements_flexible_content' )):
        $rowCount = count( get_field( 'supplements_flexible_content' ) );
        while( have_rows( 'supplements_flexible_content' ) ) :
          the_row();
          $layout = get_row_layout();
          // print_r($layout);
          get_template_part( 'flex-content/supplements/fc', $layout );
        endwhile;
      endif;
    endwhile;
  endif;
  get_template_part('global-templates/common_cta');
?>

<?php
get_footer();
