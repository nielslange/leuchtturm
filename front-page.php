<?php
/**
 * The template for displaying the home page
 *
 * @package Lauchtturm
 * @since 1.0.0
 */

get_header();

echo '<main>';

get_template_part( 'template-parts/home-about' );
get_template_part( 'template-parts/home-happenings' );
get_template_part( 'template-parts/home-menu' );
get_template_part( 'template-parts/home-gallery' );

echo '</main>';

get_footer();
