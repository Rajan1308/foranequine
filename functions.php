<?php
/**
 * foranequine functions and definitions
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// foranequine's includes directory.
$foranequine_inc_dir = 'inc';

// Array of files to include.
$foranequine_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/foranequine/foranequine/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/plugins/acf-cf-addon/acf-cf7.php',		// Load cf7 acf addon functions.
	'/plugins/acf-cf-addon/acf-cf7-v5.php',	// Load cf7 v-5 acf addon functions.
	'/cpt.php' // Custom post type 

);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$foranequine_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$foranequine_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $foranequine_includes as $file ) {
	require_once get_theme_file_path( $foranequine_inc_dir . $file );
}

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('ambassadors'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}