<?php
/**
 * Template part for displaying the cases section on the home page.
 *
 * @package Leuchtturm
 * @since 1.0.0
 */

?>

<section id="cases">


	<div class="container">

		<h2 class="heading">Cases</h2>

		<div class="grid grid--2-cols">

			<div class="grid__item">
				<p>
					Here’s a look at projects where ideas turned into results. Each case shows my approach to solving unique challenges with practical, well-crafted solutions. See what we can achieve together.
				</p>
				<p>
					<a href="<?php echo home_url(); ?>/cases" class="button">See my case studies</a>
				</p>
			</div>

			<div class="grid__item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/patrick-perkins-ETRPjvb0KM0-unsplash.jpg" alt="">
			</div>

		</div>

	</div>

</section>
