<?php
/**
 * The template for displaying the wordcamps section on the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

$headline = get_sub_field( 'headline' );
$years    = get_sub_field( 'years' );

?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo $headline; ?></h2>
		<?php foreach ( $years as $year ) : ?>
			<h3><?php echo $year['headline']; ?></h3>
			<?php echo $year['events']; ?>
		<?php endforeach; ?>
	</div>
</section>

