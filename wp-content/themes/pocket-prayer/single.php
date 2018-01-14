<?php get_header(); ?>

	<!-- END CONTENT -->

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<!-- Intro Section -->
	<section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="<?php the_post_thumbnail_url('full'); ?>">
		<div class="container">
			<div class="row title">
				<h2 class="h2">Prayer</h2>
				<div class="page-breadcrumb">
					<a href="<?php bloginfo('url'); ?>/">Home</a>/<a href="<?php bloginfo('url'); ?>/prayer-themes/">Prayer Themes</a>/<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>
	</section>
	<!-- End Intro Section -->
	
	<?php

		$bible_passage = get_post_meta(get_the_ID(), 'bible passage', true);
		$bible_quote = get_post_meta(get_the_ID(), 'bible quote', true);
		$categories = get_the_category(get_the_ID());
		$category = $categories[0]->cat_name;

	?>

	<!-- Text Prayer -->
	<section class="ptb ptb-sm-80">
		<div class="container">
			<div class="row">
				<!-- Post Bar -->
				<div class="col-lg-12 col-md-12 blog-post-hr">
					<div class="blog-post mb-30">
						<?php if(!empty($bible_passage)) { ?>
						<div class="post-meta">
							<?php echo $bible_passage ?>
						</div>
						<?php } ?>
						
						<?php if(has_excerpt()) { ?>
						<div class="post-header">
							<h2><?php the_excerpt(); ?></h2>
						</div>
						<?php } ?>						

						<?php if(!empty($bible_quote)) { ?>
						<div class="post-media">
							<blockquote>
								<?php echo $bible_quote ?>
							</blockquote>
						</div>
						<?php } ?>

						<div class="post-entry">
						<?php the_content(); ?>
						</div>

						<?php if($category == "audio") { ?>
						<?php $audio_url = get_post_meta(get_the_ID(), 'prayer audio url', true); ?>
						<div class="post-media">
							<audio class="audio" src="<?php echo $audio_url ?>" type="audio/mp3" controls="controls"></audio>
						</div>
						<?php } ?>

						<?php if($category == "image") { ?>
						<?php $image_url = get_post_meta(get_the_ID(), 'prayer image url', true); ?>
						<div class="post-media">
							<img alt="" src="<?php echo $image_url ?>">
						</div>
						<?php } ?>


						<?php if($category == "video") { ?>
						<?php $video_url = get_post_meta(get_the_ID(), 'prayer video url', true); ?>
						<div class="post-media">
							<iframe width="560" height="315" src="<?php echo $video_url ?>" frameborder="0" allowfullscreen></iframe>
						</div>
						<?php } ?>

						<div class="post-tag pull-left">
						<?php the_tags(); ?>
						</div>
					</div>

				</div>
				<!-- End Post Bar -->

			</div>
		</div>
	</section>
	<!-- End Text Prayer -->

	<!-- END CONTENT -->
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>