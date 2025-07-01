<?php
/**
 * Theme setup functionality for the Leuchtturm theme.
 *
 * @package Leuchtturm
 * @since 1.0
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'leuchtturm_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	function leuchtturm_theme_setup(): void {
		add_theme_support( 'title-tag' );

		register_nav_menus(
			array(
				'header-menu' => 'Header Menu',
				'mobile-menu' => 'Mobile Menu',
				'footer-menu' => 'Footer Menu',
			)
		);
	}
	add_action( 'after_setup_theme', 'leuchtturm_theme_setup' );
}
