<?php
/**
 * Editor functionality for the Leuchtturm theme.
 *
 * @package Leuchtturm
 * @since 1.0
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'hide_gutenberg_editor' ) ) {
	/**
	 * Hide Gutenberg editor on home page.
	 *
	 * @param bool    $use_block_editor Whether to use the block editor.
	 * @param WP_Post $post The post object.
	 * @return bool
	 */
	function hide_gutenberg_editor( bool $use_block_editor, WP_Post $post ): bool {
		return ( (int) get_option( 'page_on_front' ) === $post->ID ) ? false : $use_block_editor;
	}
	add_filter( 'use_block_editor_for_post', 'hide_gutenberg_editor', 10, 2 );
}
