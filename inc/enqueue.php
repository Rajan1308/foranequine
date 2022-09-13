<?php
/**
 * foranequine enqueue scripts
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
global $template_directory_uri;
$template_directory_uri = get_stylesheet_directory_uri();

if ( ! function_exists( 'foranequine_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function foranequine_scripts() {
		// Get the theme data.
		global $template_directory_uri;
		global $wp_query;
		$apiKey = get_field('google_maps_api_key', 'option');
		wp_enqueue_style( 'foranequine-styles', $template_directory_uri . '/ui/stylesheet/main.css' );
		wp_enqueue_style( 'custom-styles', $template_directory_uri . '/ui/stylesheet/custom.css' );
		
    
		
		wp_deregister_script( 'jquery' );

		wp_enqueue_script( 'foranequine-scripts', $template_directory_uri . '/ui/javascript/uicreep-minify.js', array(), '1.0', true );
		wp_enqueue_script( 'custom-scripts', $template_directory_uri . '/ui/javascript/custom.js', [], time(), true );
		// wp_enqueue_script('ra-compo', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);

		wp_enqueue_script( 'google-api', 'https://maps.googleapis.com/maps/api/js?key='.$apiKey.'', null, null, true); 

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_localize_script( 'custom-scripts', 'mx_app', array(
			'nonce' => wp_create_nonce( 'forane_nonce_request_front' ),
			'ajax_url' => admin_url( 'admin-ajax.php' )
		) );
		
		$custom_css = "ul.dropdown-menu li.nav-item {padding-left: 0;}";
		wp_add_inline_style( 'custom-styles', $custom_css );
		
	}
} // End of if function_exists( 'foranequine_scripts' ).

add_action( 'wp_enqueue_scripts', 'foranequine_scripts' );