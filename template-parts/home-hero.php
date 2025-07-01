<?php
/**
 * Template part for displaying the hero section
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

$background = get_field( 'hero_background' )['url'];
$logo       = get_field( 'hero_logo' )['sizes']['medium'] ?? null;
$teaser     = get_field( 'hero_teaser' ) ?? null;
?>

<section id="hero" style="background-image: url('<?php echo esc_url( $background ); ?>');">

	<div class="container">

		<?php if ( $teaser ) : ?>
			<div class="teaser lead"><?php echo wp_kses_post( $teaser ); ?></div>
		<?php endif; ?>

	</div>

</section>
