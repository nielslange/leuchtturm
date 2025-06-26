<?php
/**
 * Setup functionality
 *
 * @package Leuchtturm
 * @since 1.0
 * @author Niels Lange
 * @license GPL v3 or later
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'leuchtturm_theme_setup' ) ) {
	/**
	 * Adds theme support for various features.
	 *
	 * @return void
	 */
	function leuchtturm_theme_setup(): void {
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'leuchtturm_theme_setup' );
}
