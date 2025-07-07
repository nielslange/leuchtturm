<?php
/**
 * The template for displaying an individual page
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

		if ( 'about' === get_row_layout() ) {
			get_template_part( 'template-parts/about_about' );
		}

		if ( 'contributions' === get_row_layout() ) {
			get_template_part( 'template-parts/about_contributions' );
		}

		if ( 'wordcamps' === get_row_layout() ) {
			get_template_part( 'template-parts/about_wordcamps' );
		}

		if ( 'meetups' === get_row_layout() ) {
			get_template_part( 'template-parts/about_meetups' );
		}
	}
}
?>

</main>

<?php
get_footer();
