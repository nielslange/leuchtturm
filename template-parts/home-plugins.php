<?php
/**
 * Template part for displaying the plugins section on the home page.
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

?>

<section id="plugins">

	<div class="container">

	<h2 class="heading">Plugins</h2>

		<div class="grid grid--2-cols">

			<div class="grid__item">
				<p>
					Over the years, I've published several WordPress plugins on <a href="https://profiles.wordpress.org/nielslange/#content-plugins" target="_blank">WordPress.org</a>. When it comes to plugins, I follow the UNIX philosophy: <strong>One problem, one solution</strong>. Each of my plugins is designed to solve exactly one problem.
				</p>
				<p>
					<a href="<?php echo home_url(); ?>/plugins" class="button">Explore my plugins</a>
				</p>
			</div>

			<div class="grid__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/justin-morgan-ZjX-z2Q5zrk-unsplash.jpg" alt="">
			</div>

		</div>

	</div>

</section>
