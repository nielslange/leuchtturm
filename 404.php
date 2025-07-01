<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

get_header();
?>

<main>
	<div class="main-inner">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can\'t be found.', 'leuchtturm' ); ?></h1>
			</header>
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'leuchtturm' ); ?></p>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
