<?php
/**
 * Menus functionality
 *
 * @package Leuchtturm
 * @since 1.0
 * @author Niels Lange
 * @license GPL v3 or later
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'leuchtturm_menus' ) ) {
	/**
	 * Registers navigation menus.
	 *
	 * @return void
	 */
	function leuchtturm_menus(): void {
		register_nav_menus(
			array(
				'header-menu' => 'Header Menu',
				'mobile-menu' => 'Mobile Menu',
				'footer-menu' => 'Footer Menu',
			)
		);
	}
	add_action( 'after_setup_theme', 'leuchtturm_menus' );
}
