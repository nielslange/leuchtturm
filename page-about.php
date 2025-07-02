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
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/page-about' );
		}
		?>
</main>

<?php
get_footer();
