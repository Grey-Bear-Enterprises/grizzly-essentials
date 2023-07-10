<?php
/**
 * Grizzly Essentials Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Grizzly Essentials
 * @since 1.1.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_GRIZZLY_ESSENTIALS_VERSION', '1.1.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'grizzly-essentials-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_GRIZZLY_ESSENTIALS_VERSION, 'all' );
	wp_enqueue_style( 'grizzly-essentials-bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap.min.css', array(), '5.2.3', 'all' );
	wp_enqueue_script( 'grizzly-essentials-boot', get_stylesheet_directory_uri() . '/assets/bootstrap.bundle.min.js', array('jQuery'), '5.2.3', true );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );