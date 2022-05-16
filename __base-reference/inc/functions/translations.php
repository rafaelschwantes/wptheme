<?php
/**
 * IMPORTANT!
 *
 * Before adding a string to your theme,
 * please think if it would be common enough to be added to the library
 * (which is included in all themes).
 */

if ( function_exists( 'pll_register_string' ) ) {
	function theme_translatable_strings() {
		$strings = array();

		foreach ( $strings as $string ) {
			pll_register_string(
				'theme_' . sanitize_title( $string ),
				$string,
				'Tema'
			);
		}
	}

	add_action( 'init', 'theme_translatable_strings' );
}
