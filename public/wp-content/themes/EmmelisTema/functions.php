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

function EmmelisTema_theme_customizer( $wp_customize ) {

    // Create new section
    $wp_customize->add_section( 'EmmelisTema_hero_section' , array(
        'title'       => __( 'Hero Image', 'EmmelisTema' ),
        'priority'    => 30,
        'description' => 'Upload a hero to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'EmmelisTema_hero' ); // Register setting

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'EmmelisTema_hero', array(
        'label'    => __( 'Hero Image', 'EmmelisTema' ),
        'section'  => 'EmmelisTema_hero_section',
        'settings' => 'EmmelisTema_hero',
    ) ) );
}




add_action( 'customize_register', 'EmmelisTema_theme_customizer' );



function custom_enqueue_scripts() {

        wp_deregister_script( 'jquery' );

        wp_register_script( 'jquery', get_template_directory_uri() . '/bin/js/jquery-1.10.1.min.js', 'jquery', '1.10.1',TRUE);
        wp_register_script( 'fittext', get_template_directory_uri() . '/bin/js/jquery.fittext.js', 'jquery', '1.0',TRUE );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'fittext' );

}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

if (function_exists('register_sidebar')) {

        register_sidebar(array(
                'name' => 'Widgetized Area',
                'id'   => 'katuhu',
                'description'   => 'This is a widgetized area.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
        ));

}

?>