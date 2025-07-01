<?php
/**
 * Color customization functionality for the Bugils theme.
 *
 * @package Bugils
 * @since 1.0.0
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'bugils_get_default_colors' ) ) {
	/**
	 * Get the default colors for the Bugils theme.
	 *
	 * @return array The default colors.
	 */
	function bugils_get_default_colors(): array {
		return array(
			'primary_background_even' => '#eceff4',
			'primary_background_odd'  => '#e5e9f0',
			'secondary_background'    => '#3b4252',
			'tertiary_background'     => '#434c5e',
			'primary_text'            => '#3b4252',
			'secondary_text'          => '#eceff4',
		);
	}
}

if ( ! function_exists( 'bugils_customize_register' ) ) {
	/**
	 * Add Customizer Settings for individual colors only.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 * @return void
	 */
	function bugils_customize_register( WP_Customize_Manager $wp_customize ): void {
		$color_defaults = bugils_get_default_colors();

		$wp_customize->add_section(
			'bugils_colors',
			array(
				'title'    => __( 'Theme Colors', 'bugils' ),
				'priority' => 30,
			)
		);

		$color_settings = array(
			'primary_background_even' => array(
				'label'       => __( 'Primary background color (even)', 'bugils' ),
				'description' => __( 'Used for even-numbered content sections.', 'bugils' ),
				'default'     => $color_defaults['primary_background_even'],
			),
			'primary_background_odd'  => array(
				'label'       => __( 'Primary background color (odd)', 'bugils' ),
				'description' => __( 'Used for odd-numbered content sections.', 'bugils' ),
				'default'     => $color_defaults['primary_background_odd'],
			),
			'secondary_background'    => array(
				'label'       => __( 'Secondary background color', 'bugils' ),
				'description' => __( 'Used for the header and footer background.', 'bugils' ),
				'default'     => $color_defaults['secondary_background'],
			),
			'tertiary_background'     => array(
				'label'       => __( 'Tertiary background color', 'bugils' ),
				'description' => __( 'Used for the alternate bar section background.', 'bugils' ),
				'default'     => $color_defaults['tertiary_background'],
			),
			'primary_text'            => array(
				'label'       => __( 'Primary text color', 'bugils' ),
				'description' => __( 'Used for text in content sections.', 'bugils' ),
				'default'     => $color_defaults['primary_text'],
			),
			'secondary_text'          => array(
				'label'       => __( 'Secondary text color', 'bugils' ),
				'description' => __( 'Used for text in the header and footer.', 'bugils' ),
				'default'     => $color_defaults['secondary_text'],
			),
		);

		foreach ( $color_settings as $setting_id => $setting_data ) {
			$wp_customize->add_setting(
				'bugils_color_' . $setting_id,
				array(
					'default'           => $setting_data['default'],
					'transport'         => 'refresh',
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'bugils_color_' . $setting_id,
					array(
						'label'       => $setting_data['label'],
						'description' => $setting_data['description'],
						'section'     => 'bugils_colors',
						'settings'    => 'bugils_color_' . $setting_id,
					)
				)
			);
		}
	}
	add_action( 'customize_register', 'bugils_customize_register' );
}

if ( ! function_exists( 'bugils_output_custom_colors' ) ) {
	/**
	 * Output the custom CSS for theme colors.
	 *
	 * @return void
	 */
	function bugils_output_custom_colors(): void {
		$color_defaults = bugils_get_default_colors();

		$colors = array(
			'primary_background_even' => get_theme_mod( 'bugils_color_primary_background_even', $color_defaults['primary_background_even'] ),
			'primary_background_odd'  => get_theme_mod( 'bugils_color_primary_background_odd', $color_defaults['primary_background_odd'] ),
			'secondary_background'    => get_theme_mod( 'bugils_color_secondary_background', $color_defaults['secondary_background'] ),
			'tertiary_background'     => get_theme_mod( 'bugils_color_tertiary_background', $color_defaults['tertiary_background'] ),
			'primary_text'            => get_theme_mod( 'bugils_color_primary_text', $color_defaults['primary_text'] ),
			'secondary_text'          => get_theme_mod( 'bugils_color_secondary_text', $color_defaults['secondary_text'] ),
		);
		?>
		<style type="text/css">
			:root {
				--primary-background-even: <?php echo esc_attr( $colors['primary_background_even'] ); ?>;
				--primary-background-odd: <?php echo esc_attr( $colors['primary_background_odd'] ); ?>;
				--secondary-background: <?php echo esc_attr( $colors['secondary_background'] ); ?>;
				--tertiary-background: <?php echo esc_attr( $colors['tertiary_background'] ); ?>;
				--primary-text: <?php echo esc_attr( $colors['primary_text'] ); ?>;
				--secondary-text: <?php echo esc_attr( $colors['secondary_text'] ); ?>;
			}
		</style>
		<?php
	}
	add_action( 'wp_head', 'bugils_output_custom_colors' );
}

if ( ! function_exists( 'bugils_customize_preview_js' ) ) {
	/**
	 * Add live preview script for the customizer.
	 *
	 * @return void
	 */
	function bugils_customize_preview_js(): void {
		wp_enqueue_script(
			'bugils-customize-preview',
			get_template_directory_uri() . '/assets/js/customize-preview.js',
			array( 'jquery', 'customize-preview' ),
			'1.0',
			true
		);
	}
	add_action( 'customize_preview_init', 'bugils_customize_preview_js' );
}
