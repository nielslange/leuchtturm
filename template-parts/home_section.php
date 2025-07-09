<?php
/**
 * Template part for displaying a section on the home page
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

$section     = $args['section'];
$section_id  = strtolower( $section['title'] );
$title       = $section['title'];
$text        = $section['text'];
$button_link = $section['button_link'];
$button_text = $section['button_text'];
$image       = $section['image'];
$image_url   = $image['sizes']['medium'];
$image_alt   = $image['alt'] ? $image['alt'] : $title;
?>

<section id="<?php echo esc_attr( $section_id ); ?>">
	<div class="container">
		<h2 class="heading"><?php echo esc_html( $title ); ?></h2>
		<div class="grid grid--2-cols">
			<div class="grid__item">
				<?php echo wp_kses_post( $text ); ?>
				<p><a href="<?php echo esc_url( $button_link ); ?>" class="button"><?php echo esc_html( $button_text ); ?></a></p>
			</div>
			<div class="grid__item">
				<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
			</div>
		</div>
	</div>
</section>
