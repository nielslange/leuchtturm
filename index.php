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
	<div class="main-inner">
		<div class="main-content">
		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/page' );
		}
		?>
		</div>
	</div>
</main>

<?php
get_footer();
