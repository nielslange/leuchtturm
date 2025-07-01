<?php
/**
 * Template part for displaying the happenings section
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

$flyers = get_field( 'happenings_flyer' );

?>

<section id="happenings">

	<h2 class="heading">Happenings</h2>

	<div class="container">

		<div class="flyers">
	<?php
	$first = true;
	foreach ( $flyers as $flyer ) :
		$image_id   = $flyer['ID'];
		$alt        = $flyer['alt'];
		$medium     = wp_get_attachment_image_src( $image_id, 'medium' );
		$medium_url = $medium[0];
		$width      = $medium[1];
		$height     = $medium[2];
		$large      = wp_get_attachment_image_src( $image_id, 'large' );
		$large_url  = $large[0];
		$srcset     = wp_get_attachment_image_srcset( $image_id, 'medium' );
		$sizes      = wp_get_attachment_image_sizes( $image_id, 'medium' );
		?>
		<a href="<?php echo esc_url( $large_url ); ?>" class="glightbox">
			<img <?php echo $first ? 'fetchpriority="high"' : 'loading="lazy"'; ?>
				decoding="async"
				width="<?php echo esc_attr( $width ); ?>"
				height="<?php echo esc_attr( $height ); ?>"
				data-id="<?php echo esc_attr( $image_id ); ?>"
				src="<?php echo esc_url( $medium_url ); ?>"
				alt="<?php echo esc_attr( $alt ); ?>"
				class="wp-image-<?php echo esc_attr( $image_id ); ?>"
				srcset="<?php echo esc_attr( $srcset ); ?>"
				sizes="<?php echo esc_attr( $sizes ); ?>">
		</a>
		<?php
		$first = false;
	endforeach;
	?>
</div>

	</div>

</section>

