<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// CPT

	// Career

	// ADD CUSTOM POST TYPE: SHOWS

function careers_post_types() {

	// Our Ambassadors
	register_post_type( 'ambassadors',
		[
			'labels' => [
				'name' => 'Our Ambassadors',
				'singular_name' => 'Our Ambassador',
				'add_new' => 'Add Ambassador',
				'all_items' => 'All Ambassadors',
				'add_new_item' => 'Add Ambassador',
				'edit_item' => 'Edit Ambassador',
				'new_item' => 'New Ambassador',
				'view_item' => 'View Ambassador',
				'search_item' => 'Search Our Ambassador',
				'not_found' => 'No Ambassador found',
				'not_found_in_trash' => 'No Ambassador found in trash',
				'parent_item_colon' => 'Parent Item',
			],
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_position' => 11,
			'menu_icon'     => 'dashicons-admin-users',
			'hierarchical' => true,
			'query_var' => true,
			'rewrite' => [ 'slug' => 'ambassadors', 'with_front' => false ],
			'can_export' => true,
			'show_in_rest'          => true,
			'supports' => ['title','thumbnail']
		],
	);
		
	// Our Clients
	register_post_type( 'our-clients',
		[
			'labels' => [
				'name' => 'Our Clients',
				'singular_name' => 'Our Client',
				'add_new' => 'Add Client',
				'all_items' => 'All Client',
				'add_new_item' => 'Add Client',
				'edit_item' => 'Edit Client',
				'new_item' => 'New Client',
				'view_item' => 'View Client',
				'search_item' => 'Search Our Client',
				'not_found' => 'No Client found',
				'not_found_in_trash' => 'No Client found in trash',
				'parent_item_colon' => 'Parent Item',
			],
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_position' => 11,
			'menu_icon'     => 'dashicons-image-filter',
			'hierarchical' => true,
			'query_var' => true,
			'has_archive' => false,
			'rewrite' => [ 'slug' => 'our-clients', 'with_front' => false ],
			'can_export' => true,
			
			'supports' => ['title','thumbnail']
		],
	);

		$labels = [
			'name'              => _x( 'Type', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Type', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Type','foranequine' ),
			'parent_item'       => __( 'Parent Type','foranequine' ),
			'parent_item_colon' => __( 'Parent Type:','foranequine' ),
			'edit_item'         => __( 'Edit Type' ,'foranequine'), 
			'update_item'       => __( 'Update Type' ,'foranequine'),
			'add_new_item'      => __( 'Add New Type' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Type' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'our-clients-type' ]
		];

	register_taxonomy(  'our-clients-type', 'our-clients', $args );

	// nutritional-hub
	register_post_type( 'nutritionals',
		[
			'labels' => [
				'name' => 'Nutritional Hub',
				'singular_name' => 'Nutritional Hub',
				'add_new' => 'Add Nutritional',
				'all_items' => 'All Nutritional',
				'add_new_item' => 'Add Nutritional',
				'edit_item' => 'Edit Nutritional',
				'new_item' => 'New Nutritional',
				'view_item' => 'View Nutritional',
				'search_item' => 'Search Nutritional Hub',
				'not_found' => 'No Nutritional found',
				'not_found_in_trash' => 'No Nutritional found in trash',
				'parent_item_colon' => 'Parent Item',
			],
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_position' => 11,
			'menu_icon'     => 'dashicons-networking',
			'hierarchical' => true,
			'query_var' => true,
			'has_archive' => false,
			'rewrite' => [ 'slug' => 'nutritionals', 'with_front' => false ],
			'can_export' => true,
			
			'supports' => ['title','thumbnail', 'excerpt']
		],
	);

		$labels = [
			'name'              => _x( 'Category', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Category', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Category','foranequine' ),
			'all_items'         => __( 'All Category','foranequine' ),
			'parent_item'       => __( 'Parent Category','foranequine' ),
			'parent_item_colon' => __( 'Parent Category:','foranequine' ),
			'edit_item'         => __( 'Edit Category' ,'foranequine'), 
			'update_item'       => __( 'Update Category' ,'foranequine'),
			'add_new_item'      => __( 'Add New Category' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Category' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'nutritionals-category' ]
		];
	// nutritionals-category
	register_taxonomy(  'nutritionals-category', 'nutritionals', $args );

	$labels = [
		'name'              => _x( 'Main Tags', 'taxonomy general name', 'foranequine'),
		'singular_name'     => _x( 'Main Tags', 'taxonomy singular name','foranequine' ),
		'search_items'      => __( 'Search Type','foranequine' ),
		'all_items'         => __( 'All Main Tags','foranequine' ),
		'parent_item'       => __( 'Parent Main Tags','foranequine' ),
		'parent_item_colon' => __( 'Parent Main Tags:','foranequine' ),
		'edit_item'         => __( 'Edit Main Tags' ,'foranequine'), 
		'update_item'       => __( 'Update Main Tags' ,'foranequine'),
		'add_new_item'      => __( 'Add New Main Tags' ,'foranequine'),
		'new_item_name'     => __( 'New Category Name' ,'foranequine'),
		'menu_name'         => __( 'Main Tags' ,'foranequine')
	];

	// nutritionals nh-main-tags
	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug'=> 'nh-main-tags' ]
	];
	register_taxonomy(  'nh-main-tags', 'nutritionals', $args );
	// nutritionals Tags
	$labels = [
		'name'              => _x( 'Tags', 'taxonomy general name', 'foranequine'),
		'singular_name'     => _x( 'Tags', 'taxonomy singular name','foranequine' ),
		'search_items'      => __( 'Search Type','foranequine' ),
		'all_items'         => __( 'All Tags','foranequine' ),
		'parent_item'       => __( 'Parent Tags','foranequine' ),
		'parent_item_colon' => __( 'Parent Tags:','foranequine' ),
		'edit_item'         => __( 'Edit Tags' ,'foranequine'), 
		'update_item'       => __( 'Update Tags' ,'foranequine'),
		'add_new_item'      => __( 'Add New Tags' ,'foranequine'),
		'new_item_name'     => __( 'New Category Name' ,'foranequine'),
		'menu_name'         => __( 'Tags' ,'foranequine')
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug'=> 'nh-tags' ]
	];
	register_taxonomy(  'nh-tags', 'nutritionals', $args );

	// Blogs 
	register_post_type( 'blogs',
	[
		'labels' => [
			'name' => 'Blogs',
			'singular_name' => 'Blog',
			'add_new' => 'Add Blog',
			'all_items' => 'All Blogs',
			'add_new_item' => 'Add Blog',
			'edit_item' => 'Edit Blog',
			'new_item' => 'New Blog',
			'view_item' => 'View Blog',
			'search_item' => 'Search Blog',
			'not_found' => 'No Blogs found',
			'not_found_in_trash' => 'No Blog found in trash',
			'parent_item_colon' => 'Parent Item',
		],
		'public' => true,
		'show_ui' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 12,
		'menu_icon'     => 'dashicons-admin-site-alt3',
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => [ 'slug' => 'blogs', 'with_front' => false ],
		'can_export' => true,
		
		'supports' => ['title','thumbnail', 'excerpt']
	],
	);
	// Category
	$labels = [
		'name'              => _x( 'Category', 'taxonomy general name', 'foranequine'),
		'singular_name'     => _x( 'Category', 'taxonomy singular name','foranequine' ),
		'search_items'      => __( 'Search Type','foranequine' ),
		'all_items'         => __( 'All Category','foranequine' ),
		'parent_item'       => __( 'Parent Category','foranequine' ),
		'parent_item_colon' => __( 'Parent Category:','foranequine' ),
		'edit_item'         => __( 'Edit Category' ,'foranequine'), 
		'update_item'       => __( 'Update Category' ,'foranequine'),
		'add_new_item'      => __( 'Add New Category' ,'foranequine'),
		'new_item_name'     => __( 'New Category Name' ,'foranequine'),
		'menu_name'         => __( 'Category' ,'foranequine')
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug'=> 'blog-category' ]
	];
	register_taxonomy(  'blog-category', 'blogs', $args );





	// Our Experts
	register_post_type( 'our-experts',
	[
		'labels' => [
			'name' => 'Our Experts / Nutritional Team',
			'singular_name' => 'Our Expert',
			'add_new' => 'Add Expert',
			'all_items' => 'All Expert',
			'add_new_item' => 'Add Expert',
			'edit_item' => 'Edit Expert',
			'new_item' => 'New Expert',
			'view_item' => 'View Expert',
			'search_item' => 'Search Our Experts',
			'not_found' => 'No Experts found',
			'not_found_in_trash' => 'No Experts found in trash',
			'parent_item_colon' => 'Parent Experts',
		],
		'public' => true,
		'show_ui' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 11,
		'menu_icon'     => 'dashicons-admin-users',
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => [ 'slug' => 'our-experts', 'with_front' => false ],
		'can_export' => true,
		'show_in_graphql' => true,
		'graphql_single_name' => 'ourexpert',
		'graphql_plural_name' => 'ourexperts',
		'supports' => ['title','thumbnail', 'excerpt']
	],
	);


	// Nutritional Videos
		register_post_type( 'nutritional-videos',
			[
				'labels' => [
					'name' => 'Nutritional Videos',
					'singular_name' => 'Nutritional Video',
					'add_new' => 'Add Nutritional Video',
					'all_items' => 'All Nutritional Videos',
					'add_new_item' => 'Add Nutritional Video',
					'edit_item' => 'Edit Nutritional Video',
					'new_item' => 'New Nutritional Video',
					'view_item' => 'View Nutritional Video',
					'search_item' => 'Search Nutritional Video',
					'not_found' => 'No Nutritional Video found',
					'not_found_in_trash' => 'No Nutritional Video found in trash',
					'parent_item_colon' => 'Parent Item',
				],
				'public' => true,
				'show_ui' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'menu_position' => 11,
				'menu_icon'     => 'dashicons-video-alt2',
				'hierarchical' => true,
				'query_var' => true,
				'rewrite' => [ 'slug' => 'nutritional-videos', 'with_front' => false ],
				'can_export' => true,
				
				'supports' => ['title','thumbnail', 'excerpt']
			],
		);


	// category
	$labels = [
		'name'              => _x( 'Category', 'taxonomy general name', 'foranequine'),
		'singular_name'     => _x( 'Category', 'taxonomy singular name','foranequine' ),
		'search_items'      => __( 'Search Type','foranequine' ),
		'all_items'         => __( 'All Category','foranequine' ),
		'parent_item'       => __( 'Parent Category','foranequine' ),
		'parent_item_colon' => __( 'Parent Category:','foranequine' ),
		'edit_item'         => __( 'Edit Category' ,'foranequine'), 
		'update_item'       => __( 'Update Category' ,'foranequine'),
		'add_new_item'      => __( 'Add New Category' ,'foranequine'),
		'new_item_name'     => __( 'New Category Name' ,'foranequine'),
		'menu_name'         => __( 'Category' ,'foranequine')
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug'=> 'nutritional-category' ]
	];
	register_taxonomy(  'nutritional-category', 'nutritional-videos', $args );

	// year
	$labels = [
		'name'              => _x( 'Years', 'taxonomy general name', 'foranequine'),
		'singular_name'     => _x( 'Years', 'taxonomy singular name','foranequine' ),
		'search_items'      => __( 'Search Type','foranequine' ),
		'all_items'         => __( 'All Year','foranequine' ),
		'parent_item'       => __( 'Parent Year','foranequine' ),
		'parent_item_colon' => __( 'Parent Year:','foranequine' ),
		'edit_item'         => __( 'Edit Year' ,'foranequine'), 
		'update_item'       => __( 'Update Year' ,'foranequine'),
		'add_new_item'      => __( 'Add New Year' ,'foranequine'),
		'new_item_name'     => __( 'New Year Name' ,'foranequine'),
		'menu_name'         => __( 'Years' ,'foranequine')
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug'=> 'nutritional-year' ]
	];
	register_taxonomy(  'nutritional-year', 'nutritional-videos', $args );

// SUPPLEMENTS

	register_post_type( 'supplements',
			[
				'labels' => [
					'name' => 'Products / Supplements',
					'singular_name' => 'Supplement',
					'add_new' => 'Add Supplement',
					'all_items' => 'All Supplements',
					'add_new_item' => 'Add Supplement',
					'edit_item' => 'Edit Supplement',
					'new_item' => 'New Supplement',
					'view_item' => 'View Supplement',
					'search_item' => 'Search Supplements',
					'not_found' => 'No items found',
					'not_found_in_trash' => 'No items found in trash',
					'parent_item_colon' => 'Parent Item',
				],
				'public' => true,
				'show_ui' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'menu_position' => 11,
				'menu_icon'     => 'dashicons-table-col-after',
				'hierarchical' => true,
				'query_var' => true,
				'has_archive' => false,
				'rewrite' => [ 'slug' => 'product', 'with_front' => false ],
				'can_export' => true,
				
				'supports' => ['title','thumbnail', 'excerpt']
			],
		);


		// Goal/ Supporting 
		$labels = [
			'name'              => _x( 'Goal/ Supporting', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Goal/ Supporting', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Goal/ Supporting','foranequine' ),
			'parent_item'       => __( 'Parent Goal/ Supporting','foranequine' ),
			'parent_item_colon' => __( 'Parent Goal/ Supporting:','foranequine' ),
			'edit_item'         => __( 'Edit Goal/ Supporting' ,'foranequine'), 
			'update_item'       => __( 'Update Goal/ Supporting' ,'foranequine'),
			'add_new_item'      => __( 'Add New Goal/ Supporting' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Goal/ Supporting' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'goal-supporting' ]
		];
		register_taxonomy(  'goal-supporting', 'supplements', $args );


		// Specific Concern

		$labels = [
			'name'              => _x( 'Specific Concern', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Specific Concern', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Specific Concern','foranequine' ),
			'parent_item'       => __( 'Parent Specific Concern','foranequine' ),
			'parent_item_colon' => __( 'Parent Specific Concern:','foranequine' ),
			'edit_item'         => __( 'Edit Specific Concern' ,'foranequine'), 
			'update_item'       => __( 'Update Specific Concern' ,'foranequine'),
			'add_new_item'      => __( 'Add New Specific Concern' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Specific Concern' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'specific-concern' ]
		];
		register_taxonomy(  'specific-concern', 'supplements', $args );

		// Horse Type
		$labels = [
			'name'              => _x( 'Horse Type', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Horse Type', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Horse Type','foranequine' ),
			'parent_item'       => __( 'Parent Horse Type','foranequine' ),
			'parent_item_colon' => __( 'Parent Horse Type:','foranequine' ),
			'edit_item'         => __( 'Edit Horse Type' ,'foranequine'), 
			'update_item'       => __( 'Update Horse Type' ,'foranequine'),
			'add_new_item'      => __( 'Add New Horse Type' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Horse Type' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'horse-type' ]
		];
		register_taxonomy(  'horse-type', 'supplements', $args );

		// Range, 

		$labels = [
			'name'              => _x( 'Range', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Range', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Range','foranequine' ),
			'parent_item'       => __( 'Parent Range','foranequine' ),
			'parent_item_colon' => __( 'Parent Range:','foranequine' ),
			'edit_item'         => __( 'Edit Range' ,'foranequine'), 
			'update_item'       => __( 'Update Range' ,'foranequine'),
			'add_new_item'      => __( 'Add New Range' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Range' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'range' ]
		];
		register_taxonomy(  'range', 'supplements', $args );

		// Powder/ Powder (Sachets)
		$labels = [
			'name'              => _x( 'Powder (Sachets)', 'taxonomy general name', 'foranequine'),
			'singular_name'     => _x( 'Powder (Sachets)', 'taxonomy singular name','foranequine' ),
			'search_items'      => __( 'Search Type','foranequine' ),
			'all_items'         => __( 'All Powder (Sachets)','foranequine' ),
			'parent_item'       => __( 'Parent Powder (Sachets)','foranequine' ),
			'parent_item_colon' => __( 'Parent Powder (Sachets):','foranequine' ),
			'edit_item'         => __( 'Edit Powder (Sachets)' ,'foranequine'), 
			'update_item'       => __( 'Update Powder (Sachets)' ,'foranequine'),
			'add_new_item'      => __( 'Add New Powder (Sachets)' ,'foranequine'),
			'new_item_name'     => __( 'New Category Name' ,'foranequine'),
			'menu_name'         => __( 'Powder (Sachets)' ,'foranequine')
		];

		$args = [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug'=> 'powder' ]
		];
		register_taxonomy(  'powder', 'supplements', $args );


		// 
		$stockists_labels = array(
			'name'               => _x( 'Stockists', 'Stockists_post', 'redmills' ),
			'singular_name'      => _x( 'Stockists', 'Stockists_post', 'redmills' ),
			'menu_name'          => _x( 'Stockists', 'Stockists_post', 'redmills' ),
			'name_admin_bar'     => _x( 'Stockists', 'Stockists_post', 'redmills' ),
			'add_new'            => _x( 'Add New', 'Stockists_post', 'redmills' ),
			'add_new_item'       => __( 'Add New Stockists', 'redmills' ),
			'new_item'           => __( 'New Stockists', 'redmills' ),
			'edit_item'          => __( 'Edit Stockists', 'redmills' ),
			'view_item'          => __( 'View Stockists', 'redmills' ),
			'all_items'          => __( 'All Stockists', 'redmills' ),
			'search_items'       => __( 'Search Stockists', 'redmills' ),
			'parent_item_colon'  => __( 'Parent Stockists:', 'redmills' ),
			'not_found'          => __( 'No Stockists Found.', 'redmills' ),
			'not_found_in_trash' => __( 'No Stockists Found In Trash.', 'redmills' ),
	);
	
	$stockists_args = array(
			'labels'             => $stockists_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug'=> 'stockists', 'with_front' => false ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-location-alt',
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
	);
	
	register_post_type( 'stockists', $stockists_args );
	
	$stockists_type_labels = array(
			'name'              => _x( 'Stockist Type', 'taxonomy general name', 'redmills'),
			'singular_name'     => _x( 'Stockist Type', 'taxonomy singular name','redmills' ),
			'search_items'      => __( 'Search Stockist Type','redmills' ),
			'all_items'         => __( 'All Stockist Type','redmills' ),
			'parent_item'       => __( 'Parent Stockist Type','redmills' ),
			'parent_item_colon' => __( 'Parent Stockist Type:','redmills' ),
			'edit_item'         => __( 'Edit Stockist Type' ,'redmills'), 
			'update_item'       => __( 'Update Stockist Type' ,'redmills'),
			'add_new_item'      => __( 'Add New Stockist Type' ,'redmills'),
			'new_item_name'     => __( 'New Stockist Type Name' ,'redmills'),
			'menu_name'         => __( 'Stockist Type' ,'redmills')
	);
	
	$stockists_type_args = array(
			'hierarchical'      => true,
			'labels'            => $stockists_type_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug'=> 'stockists_type' )
	);
	
	register_taxonomy( 'stockists_type','stockists',  $stockists_type_args );
	
	$salesrep_labels = array(
			'name'               => _x( 'Sales Rep', 'Stockists_post', 'redmills' ),
			'singular_name'      => _x( 'Sales Rep', 'Stockists_post', 'redmills' ),
			'menu_name'          => _x( 'Sales Rep', 'Stockists_post', 'redmills' ),
			'name_admin_bar'     => _x( 'Sales Rep', 'Stockists_post', 'redmills' ),
			'add_new'            => _x( 'Add New', 'Stockists_post', 'redmills' ),
			'add_new_item'       => __( 'Add New Sales Rep', 'redmills' ),
			'new_item'           => __( 'New Sales Rep', 'redmills' ),
			'edit_item'          => __( 'Edit Sales Rep', 'redmills' ),
			'view_item'          => __( 'View Sales Rep', 'redmills' ),
			'all_items'          => __( 'All Sales Rep', 'redmills' ),
			'search_items'       => __( 'Search Sales Rep', 'redmills' ),
			'parent_item_colon'  => __( 'Parent Sales Rep:', 'redmills' ),
			'not_found'          => __( 'No Sales Rep Found.', 'redmills' ),
			'not_found_in_trash' => __( 'No Sales Rep Found In Trash.', 'redmills' ),
	);
	
	$salesrep_args = array(
			'labels'             => $salesrep_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug'=> 'salesrep', 'with_front' => false ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-businessman',
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
	);
	
	register_post_type( 'salesrep', $salesrep_args );
	



}
add_action( 'init', 'careers_post_types' );



// Custom thumbnail for ambassador

function custom_columns( $columns ) {
	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'Name',
			'featured_image' => 'Profile Image',
			'date' => 'Date'
	 );
	return $columns;
}
add_filter('manage_ambassadors_posts_columns' , 'custom_columns');

function custom_columns_data( $column, $post_id ) {
	switch ( $column ) {
	case 'featured_image':
			the_post_thumbnail( 'thumbnail' );
			break;
	
	}
}
add_action( 'manage_ambassadors_posts_custom_column' , 'custom_columns_data', 10, 2 ); 

// Custom thumbnail for our clients
function ourclients_custom_columns( $columns ) {
	
	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'Client Name',
			'featured_image' => 'Profile Image',
			'our-clients-type' => 'Type',
			'date' => 'Date'
	 );
	return $columns;
}
add_filter('manage_our-clients_posts_columns' , 'ourclients_custom_columns');

function our_clients_custom_columns_data( $column, $post_id ) {
	$taxonomy = 'our-clients-type';
	$post_type = get_post_type($post_id);
	$terms = get_the_terms($post_id, $taxonomy);
	switch ( $column ) {
	case 'featured_image':
			the_post_thumbnail( 'thumbnail' );
			break;
	case 'our-clients-type':
		if (!empty($terms) ) {
			foreach ( $terms as $term )
			$post_terms[] ="<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " .esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
			echo join('', $post_terms );
		}
		break;
	
	}
}
add_action( 'manage_our-clients_posts_custom_column' , 'our_clients_custom_columns_data', 10, 2 ); 

// our-experts



function our_experts_custom_columns( $columns ) {
	
	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'Our Experts',
			'featured_image' => 'Profile Image',
			
			'date' => 'Date'
	 );
	return $columns;
}
add_filter('manage_our-experts_posts_columns' , 'our_experts_custom_columns');

function our_experts_custom_columns_data( $column, $post_id ) {
	$taxonomy = 'our-clients-type';
	$post_type = get_post_type($post_id);
	$terms = get_the_terms($post_id, $taxonomy);
	switch ( $column ) {
	case 'featured_image':
			the_post_thumbnail( 'thumbnail' );
			break;
	
	
	}
}
add_action( 'manage_our-experts_posts_custom_column' , 'our_experts_custom_columns_data', 10, 2 ); 


// Add info to the new columns


