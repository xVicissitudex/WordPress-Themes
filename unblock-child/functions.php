<?php

/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'unblock-style', get_template_directory_uri().'/style.css' );
 wp_enqueue_style( 'unblock-child-style', get_stylesheet_uri(), array("unblock-style"));                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');

function thumbnail_posts () {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(250, 250, false);
}

add_action('after_setup_theme', 'thumbnail_posts');

// INCLUDES - ADDITIONAL FUNCTIONS & CLASSES

require get_stylesheet_directory() . '/layouts/peiblog-styles.php';
require get_stylesheet_directory() . '/template-tags.php';