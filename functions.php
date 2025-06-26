<?php
/**
 * Leuchtturm theme functions.
 *
 * @package Leuchtturm
 */

declare( strict_types = 1 );
defined( 'ABSPATH' ) || exit;

define( 'LEUCHTTURM_VERSION', '1.0.0' );
define( 'LEUCHTTURM_TEMPLATE_DIR', get_template_directory() );
define( 'LEUCHTTURM_TEMPLATE_URI', get_template_directory_uri() );

$inc_files = array(
	'acf',
	'enqueue',
	'menus',
	'pll',
	'setup',
);

foreach ( $inc_files as $file ) {
	$file_path = LEUCHTTURM_TEMPLATE_DIR . "/inc/{$file}.php";
	if ( file_exists( $file_path ) ) {
		require_once $file_path;
	}
}
