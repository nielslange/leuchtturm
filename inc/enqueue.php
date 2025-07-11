<?php
/**
 * Script and style enqueuing functionality.
 *
 * @package Leuchtturm
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'leuchtturm_enqueue_scripts' ) ) {
	/**
	 * Enqueues styles and scripts for the theme.
	 *
	 * @return void
	 */
	function leuchtturm_enqueue_scripts(): void {
		// $theme   = wp_get_theme();
		// $version = $theme->get( 'Version' );

		// Enqueue the main style.
		wp_enqueue_style( 'leuchtturm-style', get_stylesheet_uri(), array(), time(), 'all' );

		// Enqueue the menu.js script.
		wp_enqueue_script( 'leuchtturm-menu', get_template_directory_uri() . '/assets/js/menu.js', array(), time(), true );

		// Enqueue the plugin-stats.js script.
		wp_enqueue_script( 'leuchtturm-plugin-stats', get_template_directory_uri() . '/assets/js/plugin-stats.js', array( 'jquery' ), time(), true );

		// Enqueue dashicons.
		wp_enqueue_style( 'dashicons' );
	}
	add_action( 'wp_enqueue_scripts', 'leuchtturm_enqueue_scripts' );
}
