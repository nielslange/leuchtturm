<?php
/**
 * Template part for displaying a section
 *
 * @package Lauchtturm
 * @since 1.0.0
 */

$section = $args['section'];
$id      = strtolower( $section['title'] );
?>
<section id="<?php echo esc_attr( $id ); ?>">
	<div class="container">
	<h2 class="heading"><?php echo esc_html( $section['title'] ); ?></h2>
	<div class="grid grid--2-cols">
		<div class="grid__item">
		<?php echo wp_kses_post( $section['text'] ); ?>
		<p><a href="<?php echo esc_url( $section['button_link'] ); ?>" class="button">
			<?php echo esc_html( $section['button_text'] ); ?>
		</a></p>
		</div>
		<div class="grid__item">
		<img src="<?php echo esc_url( $section['image']['sizes']['medium'] ); ?>"
			alt="<?php echo esc_attr( $section['image']['alt'] ); ?>">
		</div>
	</div>
	</div>
</section>
