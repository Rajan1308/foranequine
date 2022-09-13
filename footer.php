<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();
$footer_quick_links = get_field('footer_quick_links', 'options');
$footer_bottom_link = get_field('footer_bottom_link', 'options');
$contact_us         = get_field('contact_us', 'options');
// testField = get_post_meta($pageID, 'footer_quick_links', true); 1st way
// $pageCF  = get_post_custom($pageID);
// echo $pageCF[0]['footer_quick_links'];
// repeter 
$goal__supporting = get_field('goal__supporting', 'options');
$specific__concern = get_field('specific__concern', 'options');
$horse__type = get_field('horse__type', 'options');
?>


</main>
<!-- Start Footer -->
<footer class="pt-lg-5 pt-4 footer">
		<div class="container">
				<div class="d-flex justify-content-center mb-lg-5">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-block">
								<img src="<?= get_field('footer_logo', 'options')?>" alt="<?php bloginfo( 'name' ); ?>" class="img-fluid">
						</a>
				</div>
				<div class="row pb-lg-5 pb-4 footer-row">
					<?php if($footer_quick_links):?>
						<div class="col-lg-4 mb-4 mb-lg-0">
								<h5 class="mb-3"><?= $footer_quick_links['quick_link_heading'] ?></h5>
								<ul class="footer-links">
									<?php foreach($footer_quick_links['footer_quick_link'] as $link):?>
										<li><a href="<?= $link['footer_quick_link'] ?>"><?= $link['footer_quick_label'] ?></a></li>
										<?php endforeach; ?>
								</ul>
						</div>
						<?php endif;  if($footer_quick_links):?>
						<div class="col-lg-4 mb-4 mb-lg-0">
								<h5 class="mb-3"><?= $footer_quick_links['our_product_heading'] ?></h5>
								<ul class="footer-links">
									<?php foreach($footer_quick_links['footer_our_products_link'] as $link):?>
										<li><a href="<?= $link['footer_quick_link'] ?>"><?= $link['footer_quick_label'] ?></a></li>
										<?php endforeach; ?>
								</ul>
						</div>
						<?php endif; if($contact_us): ?>
						<div class="col-lg-4">
								<?php if($contact_us['contact_us_heading']):?><h5 class="mb-3"><?=$contact_us['contact_us_heading']?></h5><?php endif; ?>
								<p><?=$contact_us['footer_about_content']?></p>
								<?php if($contact_us['phone_number']):?>
										<div class="d-flex">
												<p class="mb-2 mr-3 font-weight-bold"><?php _e('Tel', 'foranequine')?>:</p>
												<p class="mb-2"><?=$contact_us['phone_number']?></p>
										</div>
										<?php endif; if($contact_us['footer_fax']):?>
										<div  class="d-flex">
												<p class="mb-2 mr-3 font-weight-bold"><?php _e('Fax', 'foranequine')?></p>
												<p class="mb-2"><?=$contact_us['footer_fax']?></p>
										</div>
										<?php endif; if($contact_us['social_media_block']):?>
										<div class="follow">
											<?php foreach($contact_us['social_media_block'] as $socical):?>
												<a href="<?= $socical['social_media_block_link'] ?>"><i class="<?= $socical['social_media_block_icon'] ?>"></i></a>
												<?php endforeach; ?>
										</div>
										<?php endif; ?>
						</div>
						<?php endif; ?>
				</div>
				<div class="d-flex flex-wrap bottom-footer py-3">
						<p class="mb-3 mb-md-0"><?= get_field('liv_options_footer_copyrigt', 'options')?></p>
						<?php if($footer_bottom_link):?>
						<div class="ml-md-auto">
							<?php foreach($footer_bottom_link as $footerbottomlink):?>
								<a href="<?=$footerbottomlink['footer_bottom_link_link']?>" class="ml-4"><?=$footerbottomlink['footer_bottom_link_label']?></a>
								<?php endforeach; ?>
						</div>
						<?php endif; ?>
				</div>
		</div>
</footer>










<!-- menu popup content -->
<?php if($goal__supporting):?>
<div class="modal fade suplement-modal" id="goalSupporting" tabindex="-1" role="dialog" aria-labelledby="goalSupportingLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row mega-menu">
					<div class="col view-all-menu">
						<div class="d-flex justify-content-between">
								<h5><?=$goal__supporting['gs_title']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
						</div>
						<ul class="with-icon">
							<?php  
								// $sub = array_slice( $goal__supporting['menu_goal_supporting'], -1, null, true);
								if($goal__supporting['menu_goal_supporting']):
									foreach ($goal__supporting['menu_goal_supporting'] as $gskey => $term): 
										$termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id );
										// print_r($taxonomyicon);
										// $taxonomyicon = get_field('taxonomy_icon', $term->taxonomy . '_' .$term->term_id); 
									?>
										<li><a href="<?= get_term_link( $term ) ?>"><?php if($termIcon['url']):?><span><img src="<?= $termIcon['url']?>" alt=""></span><?php endif; ?><?= $term->name?></a></li>
										<?php 
									endforeach;
								else:
									echo "No more Found..!!";
								endif; 
								?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php endif; if($specific__concern):?>
<div class="modal fade suplement-modal" id="specificConcern" tabindex="-1" role="dialog" aria-labelledby="specificConcernLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
					<div class="row mega-menu">
							<div class="col view-all-menu">
							<div class="d-flex justify-content-between">
								<h5><?=$specific__concern['sc_title']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<ul class="with-icon">
								<?php  
									// $sub = array_slice( $specific__concern['menu_specific_concern'], 10, null, true);
									if($specific__concern['menu_specific_concern']):
										foreach ($specific__concern['menu_specific_concern'] as $gskey => $term): 
											$termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id ); 
										?>
											<li><a href="<?= get_term_link( $term ) ?>"><?php if($termIcon['url']):?><span><img src="<?= $termIcon['url']?>" alt=""></span><?php endif; ?><?= $term->name?></a></li>
											<?php 
										endforeach;
									else:
										echo "No more Found..!!";
									endif; 
									?>
							</ul>
							</div>
						</div>
					</div>
		</div>
	</div>
</div>
<?php endif; if($horse__type): ?>
<div class="modal fade suplement-modal" id="horseType" tabindex="-1" role="dialog" aria-labelledby="horseTypeLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
					<div class="row mega-menu">
							<div class="col view-all-menu">
							<div class="d-flex justify-content-between">
									<h5><?=$horse__type['hg_title']?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
							</div>
							<ul class="with-icon">
								<?php  
									// $sub = array_slice( $horse__type['menu_horse_type'], 10, null, true);
									if($horse__type['menu_horse_type']):
										foreach ($horse__type['menu_horse_type'] as $gskey => $term): 
											$termIcon = get_field( 'taxonomy_icon', $term->taxonomy . '_' . $term->term_id ); 
										?>
											<li><a href="<?= get_term_link( $term ) ?>"><?php if($termIcon['url']):?><span><img src="<?= $termIcon['url']?>" alt=""></span><?php endif; ?><?= $term->name?></a></li>
											<?php 
										endforeach;
									else:
										echo "No more Found..!!";
									endif; 
									?>
							</ul>
							</div>
						</div>
					</div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- menu popu End -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function(){ 
		jQuery('#countylist .gui-select').hide();
			jQuery('#county_none').show();
			

			jQuery("#rd_country").on('change',function(){
					// console.log(this.)
			if(jQuery(this).val()=='Ireland'){
					jQuery('#county_ireland').show();
					jQuery('#county_uk').hide();		
					jQuery('#county_none').hide();
			}else if(jQuery(this).val()=='UK'){
					jQuery('#county_ireland').hide();
					jQuery('#county_uk').show();
					jQuery('#county_none').hide();
			}
		});       

    <?php 
		$country = $_GET['rd_country']; ?>
		<?php if($country == 'Ireland'){?>   
			
				jQuery("#county_ireland").show();
		jQuery("#county_uk").hide();
		jQuery("#county_none").hide();
		<?php } else if ($country == 'UK') {?>
				jQuery("#county_ireland").hide();
		jQuery("#county_uk").show();
		jQuery("#county_none").hide();
		<?php } else {?>

				jQuery("#county_ireland").hide();
		jQuery("#county_uk").hide();
		jQuery("#county_none").show();
		<?php }?>

});
</script>
</body>

</html>

