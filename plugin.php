<?php
/*
Plugin Name: WSUWP Send REST Email
Version: 0.0.1
Description: Send email through REST Email Proxy
Author: washingtonstateuniversity, jeremyfelt
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Plugin-Send-REST-Email
*/

namespace WSU\SendRestEmail;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'plugins_loaded', 'WSU\SendRestEmail\bootstrap' );
/**
 * Loads the rest of the Send REST Email.
 *
 * @since 0.0.1
 */
function bootstrap() {
	include_once __DIR__ . '/includes/mail.php';
}
