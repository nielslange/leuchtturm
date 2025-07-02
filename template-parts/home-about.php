<?php
/**
 * Template part for displaying the about section on the home page.
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

?>

<section id="about">

	<div class="container">

		<h2 class="heading">About</h2>

		<div class="grid grid--2-cols">

			<div class="grid__item">
				<p>
					I am Niels, a WordPress and WooCommerce engineer with a passion for building thoughtful, effective solutions. With years of experience, including working at <a href="https://automattic.com/" target="_blank">Automattic</a>, the company behind <a href="https://wordpress.com/" target="_blank">WordPress.com</a> and <a href="https://woocommerce.com/" target="_blank">WooCommerce</a>, I believe in clear communication, quality code, and helping you achieve your vision. Let’s get to know each other.
				</p>
				<p>
					<a href="<?php echo home_url(); ?>/about" class="button">More about me</a>
				</p>
			</div>

			<div class="grid__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thom-holmes-k-xKzowQRn8-unsplash.jpg" alt="">
			</div>

		</div>

	</div>

</section>
