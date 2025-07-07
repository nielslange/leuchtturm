<?php
/**
 * The template for displaying the meetups section on the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

$headline  = get_sub_field( 'headline' );
$locations = get_sub_field( 'locations' );
?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo get_sub_field( 'headline' ); ?></h2>
		<?php foreach ( $locations as $location ) : ?>
			<h3><?php echo $location['headline']; ?></h3>
			<?php echo $location['meetups']; ?>
		<?php endforeach; ?>
	</div>
</section>
