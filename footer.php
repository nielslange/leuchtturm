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
 * @license GPL v3 or later
 */

?>

<footer class="site-footer">

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
			<abbr title="June 26, 2025 • Jakarta, Indonesia">
			&hearts;
			</abbr>
			by <a href="https://nielslange.de" target="_blank" rel="noopener" class="footer-content__link">Niels Lange</a>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
