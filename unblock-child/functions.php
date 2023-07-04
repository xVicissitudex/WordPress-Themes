<?php

/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');

function thumbnail_posts () {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(250, 250, false);
}

add_action('after_setup_theme', 'thumbnail_posts');

