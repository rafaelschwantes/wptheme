<?php
/**
 * Generate versions JSON
 *
 * @param  int  $post_ID
 * @return void
 */
function generate_versions( $post_ID ) {
	if ( 'version' !== get_post_type( $post_ID ) ) {
		return;
	}

	$versions = array();

	$versions_query = new WP_Query( array(
		'post_type'			=> 'version',
		'posts_per_page'	=> -1,
	) );

	if ( $versions_query->have_posts() ) {
		while ( $versions_query->have_posts() ) { $versions_query->the_post();
			array_push(
				$versions,
				array(
					'id'			=> get_the_ID(),
					'title'			=> get_the_title(),
					'transmission'	=> get_field( 'transmission' ),
					'fuel_type'		=> get_field( 'fuel_type' ),
					'model'			=> get_field( 'code', get_field( 'model' ) ),
				)
			);
		}
	} wp_reset_postdata();

	if ( $versions ) {
		$data = 'const versions = ' . json_encode( $versions ) . ';';

		// Save data
		$fp = fopen( get_data_dir() . '/versions.js', 'w' );
		fwrite( $fp, json_encode( $data ) );
		fclose( $fp );

		// Log
		rigor_log(
			'versions',
			'Versions updated with ' . count( $versions ) . ' results.'
		);
	} else {
		// Log
		rigor_log(
			'versions',
			'Something went wrong while updating Versions.'
		);
	}
}

add_action( 'save_post_version', 'generate_versions' );
add_action( 'wp_trash_post', 'generate_versions' );
