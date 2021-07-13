<?php get_header(); ?>

<?php if (have_rows('slider_h')) : ?>
<section class="s-header-home">
	<div class="s-main-home owl-carousel">

		<?php while (have_rows('slider_h')) : the_row(); ?>
			<div class="main-home-item" style='background:url(<?php the_sub_field('img'); ?>) no-repeat scroll center center; background-size: cover;'>
				<div class="container">
					<div class="main-home-text-inner">
						<span class="main-title"><?php the_sub_field('title'); ?></span>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

	</div>
	<div class="scroll-down">
		<a href="#our"><span></span><i class="fal fa-chevron-down"></i></a>
	</div>
</section>
<?php endif; ?>

<?php if (have_rows('blocks_our')) : ?>
	<section class="s-our" id="our" style='background:url(<?php the_field('bg_our'); ?>) no-repeat scroll center center; background-size: cover;'>
		<div class="container">

			<div class="row">
				<div class="col">
					<h2 class="s-title"><?php the_field('title_our'); ?></h2>
				</div>
				<div class="col">
					<p><?php the_field('text_our'); ?></p>
				</div>
			</div>

			<div class="row">
				<?php while (have_rows('blocks_our')) : the_row(); ?>

					<div class="col-lg-6">
						<div class="our-one">
							<img src="<?php the_sub_field('img'); ?>" alt="">
							<div class="our-one-text">
								<h3 class="b-title"><?php the_sub_field('title'); ?></h3>
								<a class="btn-link" href="<?php the_sub_field('link'); ?>"><i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			</div>

		</div>
	</section>
<?php endif; ?>

<section class="s-careers">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="s-title"><?php the_field('title_cc'); ?></h2>
			</div>
			<div class="col">
				<p><?php the_field('text_cc'); ?></p>
				<a class="btn-link" href="<?php the_field('link_cc'); ?>"><i class="fal fa-long-arrow-right"></i></a>
			</div>
			<div class="s-careers__img-block">
				<img src="<?php the_field('img_cc'); ?>" alt="">
			</div>
		</div>
	</div>
	<div class="s-careers__bac-img"></div>
</section>


<section class="s-slider-about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<?php
				$images = get_field('slider_a');
				if ($images) : ?>

					<div class="about-slider owl-carousel">
						<?php foreach ($images as $image) : ?>

							<div class="about-slider-one">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>

						<?php endforeach; ?>
					</div>

				<?php endif; ?>
			</div>
			<div class="col-lg-5">
				<div class="slider-item-text">
					<h2 class="s-title"><?php the_field('title_a'); ?></h2>
					<p><?php the_field('text_a'); ?></p>
					<a class="btn-link" href="<?php the_field('link_a'); ?>"><i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="s-slider-corp">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="slider-item-text">
					<h2 class="s-title"><?php the_field('title_corp'); ?></h2>
					<p><?php the_field('text_corp'); ?></p>
					<a class="btn-link" href="<?php the_field('link_corp'); ?>"><i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-7">
				<?php
				$images = get_field('slider_corp');
				if ($images) : ?>

					<div class="about-slider owl-carousel">
						<?php foreach ($images as $image) : ?>

							<div class="about-slider-one">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>

						<?php endforeach; ?>
					</div>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
$ids2 = get_field('news', false, false);
$the_query = new WP_Query(array(
	'post_type'      	=> 'post',
	'posts_per_page'	=> -1,
	'post__in'			=> $ids2,
	'orderby'        	=> 'post__in'
));
if ($the_query->have_posts()) {
?>
	<section class="s-news">
		<div class="container">

			<div class="row">
				<div class="col">
					<h2 class="s-title"><?php the_field('title_n'); ?></h2>
				</div>
			</div>

			<div class="row">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>" class="new-one">
							<?php if (has_post_thumbnail()) : ?>
								<figure>
									<?php the_post_thumbnail(); ?>
								</figure>
							<?php else : ?>
								<figure>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/default.jpg" alt="<?php the_title(); ?>">
								</figure>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
							<span class="date-post-home"><?php the_time('F j, Y'); ?></span>
						</a>
					</div>
					
				<?php endwhile;
				wp_reset_postdata(); ?>
				
			</div>
			<div class="row">
				<div class="col">
					<a class="btn-link" href="<?php the_field('link_n'); ?>"><i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if (get_field('img_f')) : ?>
	<img src="<?php the_field('img_f'); ?>" alt="">
<?php endif; ?>

<?php get_footer(); ?>