<?php

namespace WSU\SendRestEmail\Request;

/**
 * Sends an email request to a remote endpoint running REST Email Proxy.
 *
 * @since 0.0.1
 *
 * @param array $data
 * @return bool
 */
function mail( $data ) {
	$data['secret_key'] = apply_filters( 'send_rest_email_secret_key', '' );

	$data = wp_json_encode( $data );

	$rest_url = apply_filters( 'send_rest_email_endpoint', '' );

	if ( empty( $rest_url ) ) {
		return false;
	}

	$args = array(
		'headers' => array(
			'Content-Type' => 'application/json; charset=utf-8',
		),
		'body' => $data,
	);
	$response = wp_remote_post( $rest_url, $args );

	if ( 200 === (int) wp_remote_retrieve_response_code( $response ) ) {
		return true;
	}

	return false;
}
