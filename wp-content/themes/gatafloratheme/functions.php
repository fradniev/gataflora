<?php
/**
 * Enqueue scripts and styles.
 */
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	return $excerpt;
}

add_theme_support( 'post-thumbnails');

function twentynineteen_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time(), 'all');
	wp_enqueue_script( 'menuJs', get_theme_file_uri( '/js/menu.js' ), array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

add_image_size( 'smallest', 300, 300, true );
add_image_size( 'largest', 300, 300, true );