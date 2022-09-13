<?php if( ! defined( 'ABSPATH' ) ) exit; 
$id = get_the_ID();
 
$es_title = get_sub_field('es_title', $id);
$es_content 		= get_sub_field( 'es_content', $id );
$tabed_content 		= get_sub_field( 'tabed_content', $id );
$es_ctas 		= get_sub_field( 'es_ctas', $id ); 


ob_start();

?>
<!-- Equine Supplements -->
<section class="py-lg-5 py-4">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <?php if($es_title):?>
              <div class="title center mb-4 text-uppercase">
                  <h2>
                      <?=$es_title?>
                  </h2>
                  <span>
                      <img src="<?= get_template_directory_uri()?>/ui/media/images/rainbow-circle.png" alt="">
                  </span>
              </div>
              <?php endif; ?>
              <div class="text-center"><?php echo $es_content; ?></div>
          </div>
      </div>
  </div>
  <?php if($tabed_content):?>
  <div class="container-fluid mt-lg-5"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
      <div class="row">
          <div class="col equine_supplements_tabs">
            
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php foreach($tabed_content as $key=>$tabContent):
                  $terms = $tabContent['product_catagoreis'];
                  $tabName = preg_replace('/\s+/', '', $terms->term_id);
                  $termIcon = get_field( 'taxonomy_icon', $terms->taxonomy . '_' . $terms->term_id );
                  ?>
                  <li class="nav-item" role="presentation">
                  <button class="nav-link <?php if($key==0):?>active<?php endif; ?>" id="<?=$tabName?>-tab" data-bs-toggle="tab" data-bs-target="#tabcontent<?=$tabName?>" type="button" role="tab" aria-controls="tabcontent<?=$tabName?>" aria-selected="true"><span><img src="<?= $termIcon['url'] ?>" alt=""> <?php echo esc_html( $terms->name ); ?></span></button>
                  </li>
                  <?php endforeach; ?>
              </ul>
            
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row mt-lg-5 mt-4">
          <div class="col">
              <div class="tab-content" id="myTabContent">
               <?php foreach($tabed_content as $key=>$tabContent):
							 		$viewMore = $tabContent['es_ctas'];
                  $termsName = $tabContent['product_catagoreis'];
                  $tabName = preg_replace('/\s+/', '', $termsName->term_id);
                  $termIcon = get_field( 'taxonomy_icon', $termsName->taxonomy . '_' . $termsName->term_id );

									$recent = strtotime( 'last week' );
                  $args = [
                    'post_type' => 'supplements',
                    'tax_query' => [
											[
											'taxonomy' => 'goal-supporting',
											'field' => 'term_id',
											'terms' => $termsName->term_id
											]
										],
										'posts_per_page' => 3,
										'ignore_sticky_posts' => true,
										'no_found_rows' => true,
										'update_post_meta_cache' => false,
										'date_query' => [
											'after' => [
												'year' => date( 'Y', $recent ),
												'month' => date( 'n', $recent ),
												'day' => date( 'j', $recent ),
											]
										],
									];
                    $the_query = new WP_Query( $args );
                    // $rawSqlQuery = $query->request;
                    // print_r($rawSqlQuery);

                  ?>
                  <div class="tab-pane fade <?php if($key==0):?>show active<?php endif; ?>" id="tabcontent<?=$tabName?>" role="tabpanel" aria-labelledby="tabcontent<?=$tabName?>-tab">
                      <div class="row justify-content-center"  data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
											<?php if ( $the_query->have_posts() ) :
												global $post;
											?>
												<?php while ( $the_query->have_posts() ) : $the_query->the_post();
													$author_id=$the_query->post_author;
												?>
                          <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
														<div class="supplement-box">
															<span class="icon-tlc">
																<img src="<?= $termIcon['url'] ?>" alt="<?= $termIcon['alt'] ?>">
															</span>
															<div class="row">
																<div class="col-lg-7 col-9">
																	<div class="supplement-box-inner">
																		<h3><?= get_the_title($the_query->ID); ?></h3>
																		<p><?= get_the_excerpt($the_query->ID); ?></p>
																		<a href="<?php the_permalink(); ?>" class="link-vp"><?php _e('View Product', 'foranequine')?></a>
																		<span class="line"></span>
																	</div> 
																</div>
																<div class="col-lg-5 col-3">
																	<div class="img-box">
																		<img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="<?= get_the_title($the_query->ID); ?>" class="img-fluid">
																	</div>
																</div>
															</div>   
														</div>
                          </div>
													<?php endwhile;
														wp_reset_postdata();
													?>
											<?php endif; ?>

                      </div>
											<?php if($viewMore):?>
                      <div class="row mt-4">
                          <div class="col text-center">
                              <a href="<?= $viewMore['url'] ?>" class="lm-btn"><span><?= $viewMore['title'] ?></span></a>
                          </div>
                      </div>
										<?php endif; ?>
                  </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
  </div>
  <?php endif; ?>
</section>
<!-- end -->