<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();
$container = get_theme_mod( 'foranequine_container_type' );
?>
<div class="container">
	<div class="d-flex align-items-center py-3 header-right-wrapper">
			<div class="mr-auto">
					<div class="logos align-items-center">
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>
							<div class="main-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img src="<?= get_field('foranequine_option_logo', 'option')['url']?>" alt="<?php bloginfo( 'name' ); ?>" class="img-fluid"></a></div>
							<?php if(get_field('foranequine_option_logo_secondary_logo', 'options')):?><div class="secondary-logo"><a href="<?= get_field('redmills_logo_link', 'options')?>" target="_new"><img src="<?= get_field('foranequine_option_logo_secondary_logo', 'options')['url']?>" alt="<?= get_field('foranequine_option_logo_secondary_logo', 'options')['alt']?>" class="img-fluid"></a></div><?php endif; ?>

						<?php else : ?>
							<div class="main-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img src="<?= get_field('foranequine_option_logo', 'option')['url']?>" alt="<?php bloginfo( 'name' ); ?>" class="img-fluid"></a></div>
							<?php if(get_field('foranequine_option_logo_secondary_logo', 'options')):?><div class="secondary-logo"><a href="<?= get_field('redmills_logo_link', 'options')?>" target="_new"><img src="<?= get_field('foranequine_option_logo_secondary_logo', 'options')['url']?>" alt="<?= get_field('foranequine_option_logo_secondary_logo', 'options')['alt']?>" class="img-fluid"></a></div><?php endif; ?>
						<?php endif; ?>

						<?php
						} else {
						the_custom_logo();
						}
						?>
						
					</div>
			</div>
			<div class="d-flex flex-wrap align-items-center header-right-wrap">
					<div class="header-right d-flex flex-wrap align-items-center">
							<div class="search-row">
									<form class="search-form" action="/" method="get">
											<div class="form-group">
													<input type="search" class="form-control" placeholder="Search" name="s" id="search" value="<?php the_search_query(); ?>">
												
													<button type="submit" class="btn btn-search">
															<img src="<?= get_template_directory_uri()?>/ui/media/images/search-icon.png" alt="">
													</button>
											</div>
									</form>
							</div>
							<div class="header-right-links">
									<?php if(get_field('e-store_label', 'options')):?><a href="<?= get_field('where_to_buy_link', 'options') ?>" class="black"><img src="<?= get_template_directory_uri()?>/ui/media/images/store.png" alt="store"> <?= get_field('e-store_label', 'options') ?></a><?php endif; ?>
									<?php if(get_field('where_to_buy_label', 'options')):?><a href="<?= get_field('where_to_buy_link', 'options') ?>" class="orange"><img src="<?= get_template_directory_uri()?>/ui/media/images/horse-icon.png" alt="horse icon"> <?= get_field('where_to_buy_label', 'options') ?></a><?php endif; ?>
							</div>
					</div>
					
					<div class="country-dd">
							<button>
									<span><img src="<?= get_template_directory_uri()?>/ui/media/images/uk.png" alt=""></span>EN
							</button>
							<div class="country-dd-menu">
									<ul>
											<li><button><span><img src="<?= get_template_directory_uri()?>/ui/media/images/uk.png" alt=""></span>EN</button></li>
											<li><button><span><img src="<?= get_template_directory_uri()?>/ui/media/images/uk.png" alt=""></span>EN</button></li>
											<li><button><span><img src="<?= get_template_directory_uri()?>/ui/media/images/uk.png" alt=""></span>EN</button></li>
									</ul>
							</div>
					</div>
			</div>
	</div>
</div>

<div class="nav-wrapper">
		<div class="container">
		<div class="row">
						<div class="col">
								<nav class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
								<h2 id="main-nav-label" class="screen-reader-text">
									<?php esc_html_e( 'Main Navigation', 'foranequine' ); ?>
								</h2>
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
												<img src="<?= get_template_directory_uri()?>/ui/media/images/toggle-icon.png" alt="toggle-icon" class="img-fluid">
										</button>
										
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<?php
											wp_nav_menu(
												[
													'theme_location'  => 'primary',
													'container'       => false, 
													'menu_class'      => 'navbar-nav',
													'fallback_cb'     => '',
													'menu_id'         => 'main-menu',
													'depth'           => 5,
													'walker'          => new foranequine_WP_Bootstrap_Navwalker(),
												]
											);
											?>
										</div>
								</nav>
						</div>
				</div>
		
		</div>
</div>
