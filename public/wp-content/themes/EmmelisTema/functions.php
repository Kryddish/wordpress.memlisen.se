<?php

// Navigaition menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer links'),
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode

function cptui_register_my_cpts() {

	/**
	 * Post Type: projects.
	 */

	$labels = array(
		"name" => __( 'projects', '' ),
		"singular_name" => __( 'project', '' ),
		"menu_name" => __( 'Portfolio', '' ),
		"all_items" => __( 'All projects', '' ),
	);

	$args = array(
		"label" => __( 'projects', '' ),
		"labels" => $labels,
		"description" => "Here can you find my latest work :) ",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 3,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
		"taxonomies" => array( "category" ),
	);

	register_post_type( "portfolio", $args );
}

function search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts', 'search_filter');

add_action( 'init', 'cptui_register_my_cpts' );


// Denna lilla sak
function load_works() {
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

if ( is_page('Portfolio')) {
  wp_enqueue_script('javascript', get_template_directory_uri() . '/script.js', array( 'wp-api' ), '1', true);
}
}

add_action('wp_enqueue_scripts', 'load_works');

?>