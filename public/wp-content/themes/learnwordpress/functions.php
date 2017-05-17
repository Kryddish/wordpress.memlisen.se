<?php

function learningWordPress_resources(){
	
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources' );

// Navigaition menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer links'),
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode

?>