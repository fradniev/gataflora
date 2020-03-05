<?php
/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time(), 'all');
	wp_enqueue_script( 'menuJs', get_theme_file_uri( '/js/menu.js' ), array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );