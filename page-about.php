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

		switch ( get_row_layout() ) {
			case 'about':
				get_template_part( 'template-parts/about_about' );
				break;
			case 'skills':
				get_template_part( 'template-parts/about_skills' );
				break;
			case 'contributions':
				get_template_part( 'template-parts/about_contributions' );
				break;
			case 'wordcamps':
				get_template_part( 'template-parts/about_wordcamps' );
				break;
			case 'meetups':
				get_template_part( 'template-parts/about_meetups' );
				break;
		}
	}
}
?>

</main>

<?php
get_footer();
