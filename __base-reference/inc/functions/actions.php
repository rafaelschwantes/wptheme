<?php
/**
 * Get something
 */

function get_something() {
	echo 'something';

	wp_die();
}

add_action( 'wp_ajax_get_something', 'get_something' );
add_action( 'wp_ajax_nopriv_get_something', 'get_something' );
