<?php
/**
 * The template for displaying the home page
 *
 * @package Lauchtturm
 * @since 1.0.0
 */

get_header();

print( '<main>' );
$sections = get_field( 'sections' );
foreach ( $sections as $section ) {
	get_template_part( 'template-parts/section', null, array( 'section' => $section ) );
}
print( '</main>' );

get_footer();
