<?php
/**
 * The template for displaying the home page
 *
 * @package Lauchtturm
 * @since 1.0.0
 */

get_header();

print( '<main>' );
foreach ( get_field( 'sections' ) as $section ) {
	get_template_part( 'template-parts/home_section', null, array( 'section' => $section ) );
}
print( '</main>' );

get_footer();
