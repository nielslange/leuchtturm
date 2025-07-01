<?php
/**
 * Template part for displaying the gallery section
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

$shortcode = get_field( 'gallery_shortcode' );

?>

<section id="gallery">

	<h2 class="heading">Gallery</h2>

	<div class="container">


	<?php if ( $shortcode ) : ?>
			<?php echo do_shortcode( $shortcode ); ?>
		<?php endif; ?>

	</div>

</section>
