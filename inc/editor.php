<?php
/**
 * Editor functionality for the Leuchtturm theme.
 *
 * @package Leuchtturm
 * @since 1.0
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'show_gutenberg_editor' ) ) {
	/**
	 * Hide Gutenberg editor on home page.
	 *
	 * @param bool    $use_block_editor Whether to use the block editor.
	 * @param WP_Post $post The post object.
	 * @return bool
	 */
	function show_gutenberg_editor( bool $use_block_editor, WP_Post $post ): bool {
		// if ( (int) get_option( 'page_on_front' ) === $post->ID ) {
		// $use_block_editor = false;
		// }

		$excludes = array(
			'Home',
			'About',
			'Services',
			'Plugins',
		);

		foreach ( $excludes as $exclude ) {
			if ( $exclude === $post->post_title ) {
				return false;
			}
		}

		// if ( 'Home' === $post->post_title ) {
		// $use_block_editor = false;
		// }

		// if ( 'About' === $post->post_title ) {
		// $use_block_editor = false;
		// }

		// if ( 'Services' === $post->post_title ) {
		// $use_block_editor = false;
		// }

		// if ( 'Plugins' === $post->post_title ) {
		// $use_block_editor = false;
		// }

		return $use_block_editor;
	}
	add_filter( 'use_block_editor_for_post', 'show_gutenberg_editor', 10, 2 );
}
