<?php
/**
 * Template part for displaying the plugins page content
 *
 * @package Leuchtturm
 */

$headline = get_sub_field( 'headline' );
$plugins  = get_sub_field( 'plugins' );
?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo get_sub_field( 'headline' ); ?></h2>
		<div id="plugins_stats">Loading...</div>
	</div>
</section>
