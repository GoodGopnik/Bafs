<?php get_header(); /* Template Name: Vision / Mission */ ?>

<section class="s-header-inner" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<h1 class="main-title"><?php the_field('title_vm'); ?></h1>
			<p><?php the_field('subtitle_vm'); ?></p>
		</div>
	</div>
</section> 

<section class="s-vision">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="s-title"><?php the_field('title_v'); ?></h2>
				<h3><?php the_field('subtitle_v'); ?></h3>
			</div>
			<div class="col">
				<img src="<?php the_field('image_v'); ?>" alt="">
			</div>
		</div>
	</div>
</section>

<?php if( have_rows('blocks_ms') ): ?>
<section class="s-mission">
	<div class="container">

		<h2><?php the_field('title_ms'); ?></h2>

		<div class="row">
		<?php while ( have_rows('blocks_ms') ) : the_row(); ?>

			<div class="col-md-4 col-sm-6">
				<div class="mission-one">
					<div class="mission-one-img">
						<img src="<?php the_sub_field('icon'); ?>" alt="">
					</div>
					<h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>	
				</div>
			</div>

		<?php endwhile; ?>
		</div>

	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
