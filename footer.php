<?php
/**
 * The footer template file
 *
 * This is the template file that displays the site's footer including
 * the footer navigation menu and copyright information.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leuchtturm
 * @since 1.0
 * @author Niels Lange
 * @license GPL v2 or later
 */

?>
<footer class="site-footer">

	<?php if ( have_rows( 'bars', 'option' ) ) : ?>
		<section class="partner-section">
			<h2 class="partner-section__title">Our BuGils Group bars</h2>
			<div class="partner-section__grid">
				<?php
				while ( have_rows( 'bars', 'option' ) ) :
					the_row();
					?>
					<?php
					$bar_name = get_sub_field( 'bar_name' );
					$bar_logo = get_sub_field( 'bar_logo' );
					$bar_link = get_sub_field( 'bar_link' );
					?>
					<a href="<?php echo esc_url( $bar_link ); ?>" class="partner-section__link">
						<img class="partner-section__logo" src="<?php echo esc_url( $bar_logo['url'] ); ?>" alt="<?php echo esc_attr( $bar_name ); ?>">
					</a>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; ?>

	<div class="footer-content">
		<div class="footer-content__copyright">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &bull;
			All rights reserved &bull;
			<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<nav class="footer-content__nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'footer-menu',
							'container'      => false,
							'items_wrap'     => '<ul class="footer-content__menu">%3$s</ul>',
							'menu_class'     => 'footer-content__menu-item',
						)
					);
					?>
				</nav>
			<?php endif; ?>
			Developed with
			<abbr title="February 11, 2025 • Jakarta, Indonesia">
			<?php
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo trim( file_get_contents( get_template_directory() . '/assets/images/heart-solid.svg' ) );
			?>
			</abbr>
			by <a href="https://nielslange.de" target="_blank" rel="noopener" class="footer-content__link">Niels Lange</a>
		</div>
	</div>

</footer>

<?php
$enabled = get_field( 'whatsapp_enable', 'option' );

if ( $enabled ) {
	$number = get_field( 'whatsapp_number', 'option' );
	$url    = sprintf( 'https://wa.me/%s', urlencode( $number ) );
	$icon   = esc_url( get_template_directory_uri() . '/assets/images/whatsapp.png' );

	printf(
		'<a href="%s" id="whatsapp" class="button" target="_blank" rel="noopener">
			<img src="%s" alt="WhatsApp icon for direct contact">
		</a>',
		esc_url( $url ),
		$icon
	);
}
?>

<?php wp_footer(); ?>

</body>
</html>
