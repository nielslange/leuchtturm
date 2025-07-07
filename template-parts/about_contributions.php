<?php
/**
 * The template for displaying the contributions section on the about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leuchtturm
 */

$headline      = get_sub_field( 'headline' );
$contributions = get_sub_field( 'contributions' );
?>

<section>
	<div class="container">
		<h2 class="heading"><?php echo get_sub_field( 'headline' ); ?></h2>
		<ul id="user-badges" class="item-list badges-grid" role="main">
			<?php foreach ( $contributions as $contribution ) : ?>
				<li><div class="dashicons <?php echo $contribution['icon_class']; ?>"></div> <?php echo $contribution['label']; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
