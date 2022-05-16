<?php
/**
 * Post type
 */

register_rigor_post_type( 'acf_model', 'ACF Model', 'ACF Model', 'o', false, '' );


/**
 * ACF Fields
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key'             => 'group_acf_model',
		'title'           => 'ACF Post Type',
		'fields'          => array(
			array(
				'key'           => 'field_model_name',
				'label'         => 'Nome do Modelo',
				'name'          => 'model_name',
				'type'          => 'text',
				'required'      => 0,
			),
			array(
				'key'      => 'field_model_color',
				'label'    => 'Cor do modelo',
				'name'     => 'model_color',
				'type'     => 'text',
				'required' => 0,
			),
            array(
				'key'      => 'field_model_image',
				'label'    => 'Imagem do modelo',
				'name'     => 'model_image',
				'type'     => 'image',
				'required' => 0,
                'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'        => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'acf_model',
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