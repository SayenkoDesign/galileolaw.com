<?php
register_nav_menus( array(
		'Mainmenu' => __( 'Main Menu', 'snvinfotech' ),
		'Footermenu' => __( 'Footer Menu', 'snvinfotech' ),
	) );
if ( function_exists('register_sidebar') )   
    register_sidebar(array(
        'before_widget' => '<div class="blog_container">',
        'after_widget' => '</div><div class="clearfix"></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
add_theme_support( 'post-thumbnails' );
function custom_excerpt_length( $length ) {
	return 12;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//add_filter('show_admin_bar', '__return_false');
/*Custom testimonial Start*/
function custom_testimonial_init() {
	
  $labels = array(
    'name' => 'Testimonial',
    'singular_name' => 'Testimonials',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Testimonial',
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'all_items' => 'All Testimonials',
    'view_item' => 'View Testimonials',
    'search_items' => 'Search Testimonials',
    'not_found' =>  'No Testimonials found',
    'not_found_in_trash' => 'No Testimonials found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'
  );
  $args = array(
	'country',
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'galileotestimonials' ),
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => 20,
	'supports' => array( 'title', 'thumbnail' ),
	'menu_icon' => 'dashicons-groups',
	'can_export' => true
	);
	
  register_post_type( 'galileotestimonials', $args );
}
add_action( 'init', 'custom_testimonial_init' );
/*Custom testimonial End*/
/*Custom video Start*/
function custom_video_init() {
	
  $labels = array(
    'name' => 'Video',
    'singular_name' => 'Video',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Video',
    'edit_item' => 'Edit Video',
    'new_item' => 'New Video',
    'all_items' => 'All Video',
    'view_item' => 'View Video',
    'search_items' => 'Search Video',
    'not_found' =>  'No Video found',
    'not_found_in_trash' => 'No Video found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Video'
  );
  $args = array(
	'country',
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'galileovideo' ),
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => 20,
	'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail' ),
	'menu_icon' => 'dashicons-groups',
	'can_export' => true
	);
	
  register_post_type( 'galileovideo', $args );
}
add_action( 'init', 'custom_video_init' );
/*Custom Video End*/
/*Custom why Start*/
function custom_why_init() {
	
  $labels = array(
    'name' => 'Why Us',
    'singular_name' => 'Why Us',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New',
    'edit_item' => 'Edit',
    'new_item' => 'New',
    'all_items' => 'All',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' =>  'No found',
    'not_found_in_trash' => 'No found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Why Us'
  );
  $args = array(
	'country',
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'galileowhy' ),
	'capability_type' => 'post',
	'has_archive' => true,
	'hierarchical' => false,
	'menu_position' => 20,
	'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes', 'thumbnail' ),
	'menu_icon' => 'dashicons-groups',
	'can_export' => true
	);
	
  register_post_type( 'galileowhy', $args );
}
add_action( 'init', 'custom_why_init' );
/*Custom why End*/

 ?>

