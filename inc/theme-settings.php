<?php
/**
 * Check and setup theme's default settings
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'foranequine_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function foranequine_setup_theme_default_settings() {
		$defaults = foranequine_get_theme_default_settings();
		$settings = get_theme_mods();
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'foranequine_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function foranequine_get_theme_default_settings() {
		$defaults = array(
			'foranequine_posts_index_style' => 'default',   // Latest blog posts style.
			'foranequine_sidebar_position'  => 'right',     // Sidebar position.
			'foranequine_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'foranequine_theme_default_settings', $defaults );
	}
}


// Rajan Setup
function my_custom_mime_types( $mimes ) {
 
	// New allowed mime types.
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['doc'] = 'application/msword';
	 
	// Optional. Remove a mime type.
	unset( $mimes['exe'] );
	 
	return $mimes;
	}
	add_filter( 'upload_mimes', 'my_custom_mime_types' );

	
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_filter('upload_mimes', 'add_file_types_to_uploads');

	add_image_size( 'foranequine-thumb', 416, 592, true );
	add_image_size( 'foranequine-post', 461, 656, true );
	add_image_size( 'media-hub', 408, 574, true );
	add_image_size( 'foranequine-large', 1592, 547, true );

if( function_exists('acf_add_options_page') ) {
	// arc General Settings
	$general_settings   = array(
															'page_title' 	=> __( 'Theme Settings', 'ARC' ),
															'menu_title'	=> __( 'Theme Settings', 'ARC' ),
															'menu_slug' 	=> 'general-settings',
															'capability'	=> 'edit_posts',
															'redirect'      => false,
															'icon_url'      => 'dashicons-admin-settings'
													);
	acf_add_options_page( $general_settings );
}

/*
 * Remove wp logo from admin bar
 */
function foranequine_remove_wp_logo() {
	global $wp_admin_bar;

	if( class_exists('acf') ) {
			$wp_help  = get_field( 'foranequine_options_admin_wp_help', 'option' );
			if( empty( $wp_help ) ) {
					$wp_admin_bar->remove_menu('wp-logo');
			}
	}
}
add_action( 'wp_before_admin_bar_render', 'foranequine_remove_wp_logo' );
/*
* Custom login logo
*/
function foranequine_custom_login_logo() {
	if( class_exists('acf') ) {
			$wp_login_logo      = get_field( 'foranequine_options_admin_login_logo', 'option' );
			$wp_login_w         = get_field( 'foranequine_options_admin_width', 'option' );
			$wp_login_h         = get_field( 'foranequine_options_admin_height', 'option' );
			$wp_login_bg        = get_field( 'foranequine_options_admin_bg', 'option' );
			$wp_login_btn_c     = get_field( 'foranequine_options_admin_buton_color', 'option' );
			$wp_login_btn_c_h   = get_field( 'foranequine_options_admin_buton_color_hover', 'option' );
			if( !empty( $wp_login_logo ) ) {
?>
			<style type="text/css">
					.login h1 a {
							background-image: url('<?php echo $wp_login_logo; ?>') !important;
							background-size: <?php echo $wp_login_w.'px'; ?> auto !important;
							height: <?php echo $wp_login_h.'px'; ?> !important;
							width: <?php echo $wp_login_w.'px'; ?> !important;
					}
			</style>
<?php
			}
			if( !empty( $wp_login_bg ) ){
?>
			<style type="text/css">
					body.login{ background: #133759 url("<?php echo $wp_login_bg; ?>") no-repeat center; background-size: cover;}
					body.login form {background: rgba(0, 0, 0, 0.2);padding: 40px;}
	  .login form {margin-top: 20px; margin-left: 0;padding: 26px 24px 34px;font-weight: 400;overflow: hidden;background: #fff;border: 1px solid #c3c4c7;box-shadow: 0 1px 3px rgb(0 0 0 / 4%);}
	  body.login #login form p {margin-bottom: 15px;}
	  body.login #login {width: 460px;}
	  .login #nav a, .login #backtoblog a {color:#fff !important;margin: 24px 0 0 0; font-weight:500}
	  .login label {font-size: 15px;line-height: 1.5;display: inline-block;margin-bottom: 3px;color: #fff;font-weight:500}
	  .login a.privacy-policy-link{color:#000; font-weight:500}
	  body.login div#login form#loginform input[type=password], .login input[type=text]{padding:12px 16px !important}
					body.login div#login form#loginform input#wp-submit {background-color: <?php echo $wp_login_btn_c; ?> !important;}
					body.login div#login form#loginform input#wp-submit:hover {background-color: <?php echo $wp_login_btn_c_h; ?> !important;}
			</style>
<?php
			}
	}
}
add_action( 'login_enqueue_scripts', 'foranequine_custom_login_logo' );
/*
* Change custom login page url
*/
function foranequine_loginpage_custom_link() {
	$site_url = esc_url( home_url( '/' ) );
	return $site_url;
}
add_filter( 'login_headerurl', 'foranequine_loginpage_custom_link' );
/*
* Change title on logo
*/
function foranequine_change_title_on_logo() {
	$site_title = get_bloginfo( 'name' );
	return $site_title;
}
add_filter( 'login_headertext', 'foranequine_change_title_on_logo' );
/*
* Change admin your favicon
*/
function foranequine_admin_favicon() {
	if( class_exists('acf') ) {
			$favicon_url        = get_field( 'foranequine_options_admin_favicon', 'option' );
			if( !empty( $favicon_url ) ){
					echo '<link rel="icon" type="image/x-icon" href="' . $favicon_url . '" />';
			}
	}
}
add_action('login_head', 'foranequine_admin_favicon');
add_action('admin_head', 'foranequine_admin_favicon');
add_action('wp_head', 'foranequine_admin_favicon'); 

function ad_login_footer() { $ref = wp_get_referer(); if ($ref) : ?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
				jQuery("p#backtoblog a").attr("href", 'https://www.digitalnexa.com/');
				jQuery("p#backtoblog a").empty();
		});
	</script>
	<?php endif; }
	add_action('login_footer', 'ad_login_footer');
	
	function origo_custom_admin_footer() {
		_e( '<span id="footer-thankyou">Designed & developed by <a href="https://www.digitalnexa.com/" style="color:#f47c30">Digital Nexa</a>', 'digitalnexa' );
	}
	add_filter( 'admin_footer_text', 'origo_custom_admin_footer' );

	function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] = 'nav-link active';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );


// Changing excerpt more


remove_filter('get_the_excerpt', 'wp_trim_excerpt');

function pnavigation( $wp_query ) {

	$big = 999999999; // need an unlikely integer
	$pages = paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
	'prev_next' => TRUE,
	'type'  => 'array',
	'prev_next'   => TRUE,
	'prev_text'    => '<i class="far fa-chevron-double-left"></i>',
	'next_text'    => '<i class="far fa-chevron-double-right"></i>',
	) );
	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<ul class="pagination">';
		foreach ( $pages as $page ) {
			$pagignation_val = str_replace('page-numbers', 'page-numbers page-link', $page);
			echo '<li class="page-item">';
			echo $pagignation_val;
			echo '</li>';
		}
		echo '</ul>';
	}
}

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
			$title = single_cat_title('', false);
	} elseif (is_tag()) {
			$title = single_tag_title('', false);
	} elseif (is_author()) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) { //for custom post types
			$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
			$title = post_type_archive_title('', false);
	}
	return $title;
});






function get_youtube_id($url){
	$reg = '/(?im)\b(?:https?:\/\/)?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)\/(?:(?:\??v=?i?=?\/?)|watch\?vi?=|watch\?.*?&v=|embed\/|)([A-Z0-9_-]{11})\S*(?=\s|$)/';
	preg_match($reg, $url, $matches);
	return !$matches == Null ? $matches[1] : "";
}






 
function mega_menu_shortcut_shortcode() {
	ob_start();
	get_template_part( 'global-templates/mega-menu' );
	return ob_get_clean(); 
}
add_shortcode('mega-menu', 'mega_menu_shortcut_shortcode');


add_filter( 'wp_nav_menu_primary-menu_items', 'prefix_add_menu_item', 10, 2 );
/**
 * Add Menu Item to a specific place in the menu
 */
function prefix_add_menu_item ( $items, $args ) {
	
$menuItems = do_shortcode( '[mega-menu]' );
$items_array = array();
	while ( false !== ( $item_pos = strpos ( $items, '<li', 15 ) ) ) // Add the position where the menu item is placed
	{
			$items_array[] = substr($items, 0, $item_pos);
			$items = substr($items, $item_pos);
	}
	$items_array[] = $items;
	array_splice($items_array, 14, 0, $menuItems); // insert custom item after 9th item one
	$items = implode('', $items_array);
	return $items;
}



// Change Default Post name

function setGoogleMapsApiKey() {
	$apiKey = get_field('google_maps_api_key', 'option');
	acf_update_setting('google_api_key', $apiKey);
}
add_filter('acf/init', 'setGoogleMapsApiKey');

// Change dashboard Posts to News
function cp_change_post_object() {
	$get_post_type = get_post_type_object('post');
	$labels = $get_post_type->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
	$labels->all_items = 'All News';
	$labels->menu_name = 'News';
	$labels->name_admin_bar = 'News';
}
add_action( 'init', 'cp_change_post_object' );

// news post
function filter_news() {
	$postType = $_POST['post_type'];
  $catSlug = $_POST['category'];

  $ajaxposts = new WP_Query([
    'post_type' => $postType,
    'posts_per_page' => -1,
    'orderby' => 'menu_order', 
    'order' => 'desc',
		'tax_query' => [
			[
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => $catSlug,
			]
		],
  ]);
  $response = '';

  if($ajaxposts->have_posts()) :
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part('loop-templates/news-list-item');
    endwhile; wp_reset_postdata();
  else:
    $response = 'empty';
	endif;

  echo $response;
  exit;
}
add_action('wp_ajax_filter_news', 'filter_news');
add_action('wp_ajax_nopriv_filter_news', 'filter_news');

// blogs post

function filter_blogs() {
	$postType = $_POST['post_type'];
  $blogCatSlug = $_POST['blog_category'];

  $blogAjaxposts = new WP_Query([
    'post_type' => $postType,
    'posts_per_page' => -1,
    'orderby' => 'menu_order', 
    'order' => 'desc',
		'tax_query' => [
			[
				'taxonomy' => 'blog-category',
				'field' => 'slug',
				'terms' => $blogCatSlug,
			]
		],
  ]);

	// echo "<pre>";
	// print_r($blogAjaxposts);
	// echo "</pre>";
  $response = '';

  if($blogAjaxposts->have_posts()) :
    while($blogAjaxposts->have_posts()) : $blogAjaxposts->the_post();
      $response .= get_template_part('loop-templates/blogs-list-item');
    endwhile;
		wp_reset_postdata();
   else:
    $response = 'empty';
	 endif;


  echo $response;
  exit;

}
add_action('wp_ajax_filter_blogs', 'filter_blogs');
add_action('wp_ajax_nopriv_filter_blogs', 'filter_blogs');


function num_db_queries() {
	global $wpdb;
	// if(is_developer()){
		echo  get_num_queries();
		echo ' queries in ';
		timer_stop();
		echo 'second';

		echo "<pre>";print_r($wpdb->queries); echo "</pre>";
	// }
}
//add_action('wp_footer', 'num_db_queries', 10);



