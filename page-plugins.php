<?php
/**
 * The template for displaying the plugins page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

get_header();
?>

<main>

<?php

if ( have_rows( 'sections' ) ) {
	while ( have_rows( 'sections' ) ) {
		the_row();

		switch ( get_row_layout() ) {
			case 'about':
				get_template_part( 'template-parts/plugins_about' );
				break;
			case 'plugins':
				get_template_part( 'template-parts/plugins_plugins' );
				break;
		}
	}
}
?>

</main>

<?php
get_footer();
