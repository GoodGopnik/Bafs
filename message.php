<?php get_header(); /* Template Name: Message */ ?>

<section class="s-header-inner" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner title-name__message-from-chairman">
			<h1 class="main-title"><?php the_title(); ?></h1>
			<p><?php the_field('stitle'); ?></p>
		</div>
	</div>
</section>

<section class="s-message">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<img src="<?php the_field('person_photo'); ?>" alt="">
			</div>

			<div class="col-md-6">
				<div class="message-text">
					<?php the_field('content'); ?>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
