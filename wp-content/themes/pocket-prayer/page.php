<?php get_header(); ?>

	<!-- Content Page -->

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	<?php 
		$hero = get_post_meta(get_the_ID(), 'hero image', true);
		$title = get_the_title();

		if (is_front_page()) {
			$title = get_post_meta(get_the_ID(), 'welcome note', true);
		}

		if (!empty($hero)) { 
	?>
	<!-- Intro Section -->
	<section id="intro">
		<!-- Hero Slider Section -->
		<div class="flexslider fullscreen-carousel hero-slider-1 ">
			<ul class="slides">

				<!--Slide-->
				<li data-slide="light-slide">
					<div class="slide-bg-image overlay-light parallax parallax-section1" data-background-img="<?php echo $hero ?>">
						<div class="js-Slide-fullscreen-height container">
							<div class="intro-content">
								<div class="intro-content-inner">
									<h2 class="h2"><?php echo $title ?></h2>
								</div>
							</div>
						</div>
					</div>
				</li>                   

			</ul>
		</div>
		<!-- End Hero Slider Section -->
	</section>
	<div class="clearfix"></div>
	<!-- End Intro Section -->    
	<?php } ?>  
	<?php endwhile; ?>
	<?php endif; ?> 

	<!-- Work Section -->
	<section class="ptb ptb-sm-80">
		<div class="container">
			
			<?php if(is_page('Prayer Themes')) { ?>
			<div class="row container-grid nf-col-3">

				<?php 

					$args = array(
						'orderby' => 'date'
					);

					$posts = get_posts($args);

					if ($posts) {
						foreach ($posts as $post) {
							
							$subtitle = get_post_meta($post->ID, 'subtitle', true);
							$cta = get_post_meta($post->ID, 'cta', true);
				?>

				<!-- POST -->
				<div class="nf-item spacing">
					<div class="item-box">
						<a href="<?php the_permalink(); ?>">
							<img alt="1" src="<?php the_post_thumbnail_url('full'); ?>" class="item-container" />
							<div class="item-mask">
								<div class="item-caption">
									<h5 class="white"><?php echo $subtitle ?></h5>
									<p class="white"><?php echo $cta ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- END POST -->
				<?php
						} 
						wp_reset_postdata();
					}
				?>			
				
			</div>
			<?php } else { ?>

			<div class="row">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
				
			<?php } ?>
		</div>

	</section>
	<!-- End Work Section -->

	<!-- End Content Page -->

<?php get_footer(); ?>
