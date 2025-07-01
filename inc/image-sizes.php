<?php
/**
 * Image sizes functionality for the Leuchtturm theme.
 *
 * @package Leuchtturm
 * @since 1.0
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'leuchtturm_remove_image_sizes' ) ) {
	/**
	 * Remove image sizes for the theme.
	 *
	 * @return void
	 */
	function leuchtturm_remove_image_sizes(): void {
		remove_image_size( 'medium_large' );
		remove_image_size( 'thumbnail' );
		remove_image_size( '1536x1536' );
		remove_image_size( '2048x2048' );
	}
	add_action( 'init', 'leuchtturm_remove_image_sizes' );
}

if ( ! function_exists( 'leuchtturm_filter_intermediate_image_sizes' ) ) {
	/**
	 * Filter intermediate image sizes to keep only large and medium.
	 *
	 * @param array $sizes Array of image sizes.
	 * @return array Filtered array of image sizes.
	 */
	function leuchtturm_filter_intermediate_image_sizes( array $sizes ): array {
		return array_intersect( $sizes, array( 'large', 'medium' ) );
	}
	add_filter( 'intermediate_image_sizes', 'leuchtturm_filter_intermediate_image_sizes' );
}

if ( ! function_exists( 'leuchtturm_filter_intermediate_image_sizes_advanced' ) ) {
	/**
	 * Filter advanced intermediate image sizes to remove unwanted sizes.
	 *
	 * @param array $sizes Array of image sizes.
	 * @return array Filtered array of image sizes.
	 */
	function leuchtturm_filter_intermediate_image_sizes_advanced( array $sizes ): array {
		unset( $sizes['thumbnail'] );
		unset( $sizes['medium_large'] );
		unset( $sizes['1536x1536'] );
		unset( $sizes['2048x2048'] );
		return $sizes;
	}
	add_filter( 'intermediate_image_sizes_advanced', 'leuchtturm_filter_intermediate_image_sizes_advanced' );
}
