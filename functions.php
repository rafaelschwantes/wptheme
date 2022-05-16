<?php

/**
 * Rigor Library
 */

// Common functions to provide to all WP sites.
require __DIR__ . '/../../../../lib/functions/commons.php';


/**
 * Register post types
 */

require __DIR__ . '/inc/post-types/page-acf.php';
require __DIR__ . '/inc/post-types/acf-options-page.php';


/**
 * Scripts and styles
 */

function schwantes_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_style(
		'reset-styles',
		get_stylesheet_directory_uri() . '/dist/css/reset.css',
		array(),
		filemtime( get_stylesheet_directory() . '/dist/css/reset.css' ),
		false
	);

	wp_enqueue_style(
		'header-styles',
		get_stylesheet_directory_uri() . '/dist/css/header.css',
		array(),
		filemtime( get_stylesheet_directory() . '/dist/css/header.css' ),
		false
	);

	wp_enqueue_style(
		'header-styles',
		get_stylesheet_directory_uri() . '/dist/css/hyundaisenegal.css',
		array(),
		filemtime( get_stylesheet_directory() . '/dist/css/hyundaisenegal.css' ),
		false
	);

	

	/**
	 * TODO: Minify all JS files into one
	 */

	wp_enqueue_script(
		'main-scripts',
		get_stylesheet_directory_uri() . '/dist/js/main.js',
		array(),
		filemtime( get_stylesheet_directory() . '/dist/js/main.js' ),
		true
	);


}

add_action( 'wp_enqueue_scripts', 'schwantes_scripts' );

