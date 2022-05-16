<?php
/**
 * Post type
 */

register_rigor_post_type( 'social_icon', 'Ícones sociais', 'Ícone social', 'o', false, 'facebook' );


/**
 * ACF Fields
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key'             => 'group_social_icon',
		'title'           => 'Configurações do ícone social',
		'fields'          => array(
			array(
				'key'           => 'field_social_icon_icon',
				'label'         => 'Ícone',
				'name'          => 'icon',
				'type'          => 'image',
				'required'      => 1,
				'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'      => 'field_social_icon_link',
				'label'    => 'Link',
				'name'     => 'link',
				'type'     => 'url',
				'required' => 1,
			),
		),
		'location'        => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'social_icon',
				),
			),
		),
		'style'           => 'seamless',
		'label_placement' => 'left',
		'hide_on_screen'  => array(
			0 => 'the_content',
		),
	));
}


/**
 * Polylang translatable strings
 */

if ( function_exists( 'pll_register_string' ) ) {
	function social_icons_translatable_strings() {
		$strings = array();

		if ( $strings ) {
			foreach ( $strings as $string ) {
				pll_register_string(
					'social_icons_' . sanitize_title( $string ),
					$string,
					'Ícones sociais'
				);
			}
		}
	}

	add_action( 'init', 'social_icons_translatable_strings' );
}
