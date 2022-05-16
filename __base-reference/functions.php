<?php
/**
 * Sessions
 *
 * WordPress doesn't start session by default.
 * This is required to handle UTM fields.
 */

if ( ! session_id() ) {
	session_start();
}


/**
 * Functions
 */

// JSON generation functions
require __DIR__ . '/inc/functions/generators.php';

// AJAX actions/endpoints
require __DIR__ . '/inc/functions/actions.php';

// Register translatable strings
require __DIR__ . '/inc/functions/translations.php';


/**
 * Rigor Library
 */

// Common functions to provide to all WP sites.
require __DIR__ . '/../../../../lib/functions/commons.php';

// Utility actions/filters to load in all WP sites.
require __DIR__ . '/../../../../lib/functions/utility.php';

// Global translations to be registered in all WP sites.
require __DIR__ . '/../../../../lib/functions/translations.php';

// Cookies
require __DIR__ . '/inc/cookies/functions.php';


/**
 * Setup
 */

function rigor_setup() {
    /**
     * Misc
     */

	// This is required to allow WordPress to manage <title> tag.
    add_theme_support( 'title-tag' );


    /**
     * Menus
     */

	register_nav_menus( array(
		'main'      => 'Principal',
		'secondary' => 'Secundário',
		'footer'    => 'Rodapé',
	) );
}

add_action( 'after_setup_theme', 'rigor_setup' );


/**
 * Scripts and styles
 */

function rigor_scripts() {
	// Main theme file
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	// Compiled CSS
	wp_enqueue_style(
		'main-styles',
		get_template_directory_uri() . '/dist/css/main.min.css',
		array(),
		filemtime( get_template_directory() . '/dist/css/main.min.css' ),
		false
	);

	// Compiled JS libraries
	wp_enqueue_script(
		'vendors-scripts',
		get_template_directory_uri() . '/dist/js/vendors.min.js',
		array(),
		filemtime( get_template_directory() . '/dist/js/vendors.min.js' ),
		true
	);

	// Compiled JS
	wp_enqueue_script(
		'main-scripts',
		get_template_directory_uri() . '/dist/js/main.min.js',
		array(),
		filemtime( get_template_directory() . '/dist/js/main.min.js' ),
		true
	);

	// Passing PHP variables/translations to JS
	wp_localize_script(
		'main-scripts',
		'vars',
		get_general_translations()
	);
}

add_action( 'wp_enqueue_scripts', 'rigor_scripts' );


/**
 * Widget areas
 */

function rigor_widgets_init() {
	register_sidebar( array(
		'name'          => 'Rodapé',
		'id'            => 'footer',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}

add_action( 'widgets_init', 'rigor_widgets_init' );


/**
 * Register post types
 */

require __DIR__ . '/inc/post-types/social-icons.php';


/**
 * Shortcodes
 */

require __DIR__ . '/inc/shortcodes/social-icons.php';


/**
 * Services
 */

require __DIR__ . '/services/generators.php';
