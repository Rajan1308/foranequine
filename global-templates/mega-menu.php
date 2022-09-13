<?php
/**
 * Mega Menu setup
 *
 * @package foranequine
 */
$osmm_menu_label = get_field('osmm_menu_label', 'options');
$goal__supporting = get_field('goal__supporting', 'options');
$specific__concern = get_field('specific__concern', 'options');
$horse__type = get_field('horse__type', 'options');
$range = get_field('menu_range_group', 'options');
$powder_powder_sachets = get_field('powder_powder_sachets', 'options');
$osmm_menu_label_link = get_field('osmm_menu_label_link', 'options');
$label = $osmm_menu_label ? $osmm_menu_label : 'Our Supplements';
?>
<li class="menu-item menu-item-type-custom our-supplement menu-item-object-custom menu-item-has-children dropdown menu-item-4444 nav-item">
				<a class="nav-link dropdown-toggle mobile-toggle" href="<?= $osmm_menu_label_link ?>" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $label ?>
				</a>
				<div class="mega-menu" aria-labelledby="navbarDropdown">
						<div class="px-3">
								<div class="row">
								<div class="col-md-5">
										<div class="row">
                      <?php if($goal__supporting):?>
												<div class="col-md-6  pb-4">
														<h5><?=$goal__supporting['gs_title']?></h5>
														<ul class="with-icon"> 
                              <?php $i = 0;
                                foreach ($goal__supporting['menu_goal_supporting'] as $gskey => $term):   $i++;
                                  $termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id );
                                ?>
                                  <li><a href="<?= get_term_link( $term ) ?>"><?php if($termIcon['url']):?><span><img src="<?= $termIcon['url']?>" loading="lazy" alt=""></span><?php endif; ?><?= $term->name?></a></li>
                                  <?php if($i==10) break;
                                endforeach;
                              ?>
														</ul>
														<?php if($goal__supporting['view_more_link']):?><a href="<?=$goal__supporting['view_more_link']?>" class="view-all" data-toggle="modal" data-target="#goalSupporting"><?php _e('View All','foranequine');?></a><?php endif;?>
												</div>
                        <?php endif; if($specific__concern):?>
												<div class="col-md-6  pb-4" style="background-color:#F5F5F5;">
														<h5><?=$specific__concern['sc_title']?></h5>
														<ul >
                              <?php $i = 0; foreach($specific__concern['menu_specific_concern'] as $term):  $i++; 
                              $termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id );
                              ?>
                                <li><a href="<?= get_term_link( $term ) ?>"><?php if($termIcon['url']):?><span><img src="<?= $termIcon['url']?>" loading="lazy" alt=""></span><?php endif; ?><?= $term->name?></a></li>
                            <?php if($i==10) break; endforeach; ?>
														</ul>
														<?php if($goal__supporting['view_more_link']):?><a href="#" class="view-all ml-0"  data-toggle="modal" data-target="#specificConcern"><?php _e('View All','foranequine');?></a><?php endif;?>
												</div>
                        <?php endif; ?>
										</div>
										</div>
								<div class="col-md-7">
										<div class="row h-100">

                      <?php if($horse__type):?>
												<div class="col-md-4 pb-4">
														<h5><?=$horse__type['hg_title']?></h5>
														<ul>
														<?php foreach($horse__type['menu_horse_type'] as $term):?>
                              <li><a href="<?= get_term_link( $term ) ?>"><?= $term->name?></a></li>
                            <?php endforeach; ?>
														</ul>
														<?php if($horse__type['hg_view_more_link']):?><a href="#" class="view-all ml-0" data-toggle="modal" data-target="#horseType"><?php _e('View All','foranequine');?></a><?php endif;?>
												</div>
                      <?php endif; if($range):?>

												<div class="col-md-4  pb-4" style="background-color:#F5F5F5;">
														<h5><?=$range['mrg_title']?></h5>
														<ul>
														<?php foreach($range['menu_range'] as $term):?>
                              <li><a href="<?= get_term_link( $term ) ?>"><?= $term->name?></a></li>
                            <?php endforeach; ?>
														</ul>
                            <?php if($range['mrg_view_more_link']):?><a href="#" class="view-all ml-0" data-toggle="modal" data-target="#horseType"><?php _e('View All','foranequine');?></a><?php endif;?>
												</div>
                        <?php endif; if($powder_powder_sachets):?>
												<div class="col-md-4  pb-4">
														<h5><?= $powder_powder_sachets['pps_title'] ?></h5>
														<ul>
															<?php foreach($powder_powder_sachets['menu_powder_powder_sachets'] as $pps):?>
                                <li><a href="<?= get_term_link( $pps ) ?>"><?= $pps->name?></a></li>
                              <?php endforeach; ?>
														</ul>
                            <?php if($powder_powder_sachets['pps_view_more_link']):?><a href="#" class="view-all ml-0" data-toggle="modal" data-target="#horseType"><?php _e('View All','foranequine');?></a><?php endif;?>
												</div>
                        <?php endif; ?>
										</div>
								</div>
								</div>
						</div>
				</div>
		</li>
<?php
