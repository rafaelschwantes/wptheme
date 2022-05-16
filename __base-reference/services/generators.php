<?php
/**
 * EXAMPLE: Simple JSON generator
 * Generate job opportunities
 */

function generate_job_opportunities() {
	/**
	 * Call service
	 */

	$job_opportunities = curl_call_service(
		'https://recruitmentmanagement.gruposalvadorcaetano.pt/RecruitmentManagement/AjaxServlet',
		array(
			'cmd'        => 'getJobOps',
			'formatType' => 'json',
			'id_ent'     => 5,
		)
	);


	/**
	 * If valid, handle response
	 */

	if ( $job_opportunities ) {
		// Save data
		$fp = fopen( get_data_dir() . '/job_opportunities.json', 'w' );
		fwrite( $fp, json_encode( $job_opportunities->info ) );
		fclose( $fp );

		// Log
		rigor_log(
			'job_opportunities',
			'Job opportunities updated with ' . count( $job_opportunities->info ) . ' results.'
		);
	} else {
		// Log
		rigor_log(
			'job_opportunities',
			'Something went wrong while fetching Job Opportunities.'
		);
	}
}

add_action( 'hook_generate_job_opportunities', 'generate_job_opportunities' );
// Debug
// add_action( 'wp_head', 'generate_job_opportunities' );


/**
 * EXAMPLE: GET request with access token
 * Get car by plate
 */

function get_car_by_plate( $plate ) {
	/**
	 * Call service
	 */

	$response = curl_call_service(
		'https://demowsosbgsc.rigorcg.pt/WsOSBGSC/services/OSBService/getCarByPlate/',
		array(
			'plate'      => $plate,
			'returnType' => 'json',
		),
		'slash',
		array(
			'accessToken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbnZpcm9tZW50IjoyMCwiY29tcGFueSI6IlJpZ29yIn0.fquIb95F_ZS7Wul_nKjEXView3fkyIoPD9hIgQHeIk4',
		)
	);


	/**
	 * If valid, handle response
	 */

	if ( $response && isset( $response->code ) && 0 === $response->code ) {
		return $response->vehicle;
	} else {
		// Log
		rigor_log( 'car', 'Something went wrong while fetching car with plate ' . $plate . '.' );
	}
}

// Debug
// add_action( 'wp_head', function() {
// 	$car = get_car_by_plate( '82-ZZ-46' );
// 	var_dump( $car );
// } );


/**
 * EXAMPLE: POST
 * Set marking service
 */

function set_marking_service( $plateNr, $data ) {
	/**
	 * Call service
	 */

	$response = curl_call_service(
		'https://demowsosbgsc.rigorcg.pt/WsOSBGSC/services/OSBService/setMarkingService/',
		array(
			'plateNr'    => $plateNr,
			'returnType' => 'json',
		),
		'slash',
		array(
			'accessToken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbnZpcm9tZW50IjoyMCwiY29tcGFueSI6IlJpZ29yIn0.fquIb95F_ZS7Wul_nKjEXView3fkyIoPD9hIgQHeIk4',
		),
		$data
	);


	/**
	 * If valid, handle response
	 */

	if ( $response && isset( $response->code ) && 0 === $response->code ) {
		return $response;
	} else {
		// Log
		rigor_log( 'marking', 'Something went wrong while setting the marking service for ' . $plateNr . '.' );

	}
}

// Debug
// add_action( 'wp_head', function() {
// 	$response = set_marking_service( '90-09-LD', json_encode( array(
// 		'name'                     => 'teste',
// 		'email'                    => 'daniel.sousa@rigorcg.pt',
// 		'phone'                    => '911111111',
// 		'site'                     => 'CAETANO RETAIL',
// 		'idNewsletter'             => null,
// 		'model'                    => 'Golf IV',
// 		'plateNr'                  => '90-09-LD',
// 		'km'                       => 100000,
// 		'idBrand'                  => 10,
// 		'brand'                    => 'Volkswagen',
// 		'idMsoBrand'               => 10,
// 		'idInstallation'           => 340,
// 		'serviceDate'              => '2022-04-07',
// 		'serviceHour'              => '10:45',
// 		'obs'                      => '',
// 		'workIds'                  => [-8360913],
// 		'maintenanceList'          => [],
// 		'complementaryList'        => [],
// 		'tyreWidth'                => 0,
// 		'tyreHeight'               => 0,
// 		'tyreDiameter'             => 0,
// 		'tyreLoad'                 => 0,
// 		'tyreSpeed'                => '',
// 		'idMobility'               => 8,
// 		'maintenanceVarId'         => 3373,
// 		'simulatedInfo'            => false,
// 		'campaingOrSimpleRevision' => 'Revisão',
// 		'campaignTimeDMS'          => 0,
// 		'url'                      => 'https://demomarcacoescaetanogo.rigorcg.pt',
// 		'idWash'                   => 1,
// 	) ) );
// 	var_dump( $response );
// } );
