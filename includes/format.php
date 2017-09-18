<?php

namespace WSU\SendRestEmail\Format;

add_filter( 'retrieve_password_message', 'WSU\SendRestEmail\Format\password_reset_message', 10 );

/**
 * Filter the password reset message so that the URL will pass wp_kses_post
 * in the REST request handler.
 *
 * @since 0.0.2
 *
 * @param string $message
 *
 * @return string
 */
function password_reset_message( $message ) {
	$message = str_replace( '<http', ' http', $message );
	$message = str_replace( ">\r\n", " \r\n", $message );

	return $message;
}
