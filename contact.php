<?php get_header(); /* Template Name: Contact */ ?>

<section class="s-header-inner" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<h1 class="main-title"><?php the_title(); ?></h1>
			<p><?php the_field('subtitle'); ?></p>
		</div>
	</div>
</section>

<section class="s-contact">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="contact-text">
					<h2 class="s-title"><?php the_field('title_mc'); ?></h2>

					<?php if (have_rows('contacts')) : ?>
						<ul class="menu-contact">
							<?php while (have_rows('contacts')) : the_row(); ?>
								<li>
									<figure><img src="<?php the_sub_field('icon'); ?>"></figure>
									<?php the_sub_field('contact'); ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</div>
			</div>

			<div class="col-md-6">

				<div class="contact-map">
					<?php echo do_shortcode('' . get_field('map') . ''); ?>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="s-contact-form" style='background:url(<?php the_field('image_bg'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="contact-form">
	<h2 class="s-title"><?php the_field('form_title_c'); ?></h2>
		<?php echo do_shortcode('' . get_field('contact_form') . ''); ?>
	</div>
</section>

<?php get_footer(); ?>