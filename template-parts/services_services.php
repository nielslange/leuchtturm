<?php
/**
 * Template part for displaying the services page content
 *
 * @package Leuchtturm
 */

$headline = get_field( 'headline' );
$services = get_field( 'services' );

?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo $headline; ?></h2>
		<div class="grid grid--2-cols grid--no-alternate">
			<?php foreach ( $services as $service ) : ?>
				<div class="grid__item">
					<h2><?php echo $service['headline']; ?></h2>
					<?php echo $service['content']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

