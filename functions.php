<?php
/**
 * dmangames functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dmangames
 */

/**
 * Enqueue scripts and styles.
 */
function dmangames_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'dmangames_scripts' );
