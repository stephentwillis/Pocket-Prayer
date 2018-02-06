<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Intro Section -->
<section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="<?php the_post_thumbnail_url('full'); ?>">
	<div class="container">
		<div class="row title">
			<h2 class="h2">Sorry we can't find the page you're looking for.</h2>
		</div>
	</div>
</section>
<!-- End Intro Section -->

<?php get_footer(); ?>
