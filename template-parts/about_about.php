<?php
/**
 * The template for displaying the about section on the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

$headline  = get_sub_field( 'headline' );
$content   = get_sub_field( 'content' );
$image_url = get_sub_field( 'image' )['sizes']['medium'];
$image_alt = get_sub_field( 'image' )['alt'];
?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo $headline; ?></h2>
		<div class="grid grid--2-cols">
			<div class="grid__item">
				<?php echo $content; ?>
			</div>
			<div class="grid__item">
				<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
			</div>
		</div>
	</div>
</section>

