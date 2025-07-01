<?php
/**
 * Template part for displaying the menu section
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

?>

<section id="menu">

	<h2 class="heading">Menu</h2>

	<div class="container">

		<?php if ( have_rows( 'menu_sections' ) ) : ?>

			<div class="grid grid--gap-sm grid--4-cols">
				<?php
				while ( have_rows( 'menu_sections' ) ) :
					the_row();
					?>
					<div>
						<h3><?php the_sub_field( 'section_title' ); ?></h3>

						<?php if ( have_rows( 'menu_items' ) ) : ?>
							<figure class="wp-block-table is-style-stripes">
								<table class="has-fixed-layout">
									<tbody>
										<?php
										while ( have_rows( 'menu_items' ) ) :
											the_row();
											?>
											<tr>
												<td><?php the_sub_field( 'item_label' ); ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							</figure>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( have_rows( 'menu_menus' ) ) : ?>
			<div class="grid grid--gap-sm grid--2-cols mt-2">
				<?php
				while ( have_rows( 'menu_menus' ) ) :
					the_row();
					$title = get_sub_field( 'menu_title' );
					$pdf   = get_sub_field( 'menu_pdf' );
					if ( $pdf['url'] ) :
						?>
						<a href="<?php echo esc_url( $pdf['url'] ); ?>" class="button center" target="_blank" rel="noopener noreferrer">
							<?php echo esc_html( $title ); ?>
						</a>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>

</section>
