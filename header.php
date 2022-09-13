<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'foranequine_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'foranequine_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?> <?php foranequine_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="page-wrapper">

	<!-- ******************* The Navbar Area ******************* -->
	<header class="header-home" data-aos="fade"  data-aos-delay="300" data-aos-duration="2000">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'foranequine' ); ?></a>
		<div class="header">
			<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>
		</div>

	</header><!-- #wrapper-navbar end -->
	<main class="main" id="app">