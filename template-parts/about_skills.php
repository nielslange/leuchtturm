<?php
/**
 * The template for displaying the contributions section on the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

$headline   = get_sub_field( 'headline' );
$categories = get_sub_field( 'categories' );
?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo get_sub_field( 'headline' ); ?></h2>
		<div class="grid grid--2-cols grid--no-alternate">
			<?php foreach ( $categories as $category ) : ?>
				<div class="grid__item">
					<h2><?php echo $category['headline']; ?></h2>
					<?php echo $category['content']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

