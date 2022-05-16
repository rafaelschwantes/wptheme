<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'ACF General Options',
		'menu_title'	=> 'ACF General Options',
		'menu_slug' 	=> 'acf-general-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'ACF Header Options',
		'menu_title'	=> 'ACF Header Options',
        'menu_slug'     =>  'acf-header-options',
		'parent_slug'	=> 'acf-general-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'ACF Footer Options',
		'menu_title'	=> 'ACF Footer Options',
		'menu_slug'     =>  'acf-footer-options',
		'parent_slug'	=> 'acf-general-options',
	));
	
}

/**
 * ACF Fields
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key'             => 'group_acf_general_options',
		'title'           => 'Configurações ACF General Options',
		'fields'          => array(
			array(
				'key'           => 'field_general_title',
				'label'         => 'Título do site',
				'name'          => 'general_title',
				'type'          => 'text',
				'required'      => 0,
			),
            array(
				'key'      => 'field_general_image',
				'label'    => 'Imagem do site',
				'name'     => 'general_image',
				'type'     => 'image',
				'required' => 0,
                'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'        => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'acf-general-options',
				),
			),
		),
		'style'           => 'seamless',
		'label_placement' => 'left',
		'hide_on_screen'  => array(
			0 => 'the_content',
		),
	));
	
	acf_add_local_field_group( array(
		'key'             => 'group_acf_header_options',
		'title'           => 'Configurações ACF Header Options',
		'fields'          => array(
			array(
				'key'           => 'field_header_title',
				'label'         => 'Título do header',
				'name'          => 'header_title',
				'type'          => 'text',
				'required'      => 0,
			),
            array(
				'key'      => 'field_header_image',
				'label'    => 'Imagem do header',
				'name'     => 'header_image',
				'type'     => 'image',
				'required' => 0,
                'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'        => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'acf-header-options',
				),
			),
		),
		'style'           => 'seamless',
		'label_placement' => 'left',
		'hide_on_screen'  => array(
			0 => 'the_content',
		),
	));
	
	acf_add_local_field_group( array(
		'key'             => 'group_acf_footer_options',
		'title'           => 'Configurações ACF Footer Options',
		'fields'          => array(
			array(
				'key'           => 'field_footer_title',
				'label'         => 'Título do footer',
				'name'          => 'footer_title',
				'type'          => 'text',
				'required'      => 0,
			),
            array(
				'key'      => 'field_footer_image',
				'label'    => 'Imagem do footer',
				'name'     => 'footer_image',
				'type'     => 'image',
				'required' => 0,
                'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'        => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'acf-footer-options',
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