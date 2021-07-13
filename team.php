<?php get_header(); /* Template Name: Team */ ?>

<section class="s-header-inner" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<h1 class="main-title"><?php the_title(); ?></h1>
			<p><?php the_field('subtitle'); ?></p>
		</div>
	</div>
</section>

<?php if (have_rows('team')) : $t = 1;  ?>
	<section class="s-team">
		<div class="container">

			<div class="row">

				<div class="col">
					<div class="team-col">
						<?php while (have_rows('team')) : the_row(); ?>

							<a class="team-one open-popup" href="#t-<?php echo $t; ?>">
								<img class="t-img" src="<?php the_sub_field('img'); ?>" alt="">
								<div class="team-one-text">
									<div class="s-team__title-block">
										<span class="name"><?php the_sub_field('name'); ?></span>
										<span class="position"><?php the_sub_field('position'); ?></span>
									</div>
									<i class="fal fa-long-arrow-right"></i>
								</div>

								<div id="t-<?php echo $t; ?>" class="team-popup mfp-hide row no-gutters" data-index="<?php echo $t; ?>">
									<div class="col-md-6" style='background:url(<?php the_sub_field('img'); ?>) no-repeat scroll center center; background-size: cover;'>
									</div>
									<div class="col-md-6">
										<div class="p-team-text">
											<span class="p-name"><?php the_sub_field('name'); ?></span>
											<span class="p-position"><?php the_sub_field('position'); ?></span>
											<div class="p-team-content">
												<?php the_sub_field('text'); ?>
											</div>
										</div>

										<div class="team-popup-next">
											<img class="p-img" src="" alt="" />
											<div class="team-popup-next-r">
												<div class="team-popup-next-r__title-block">
													<span class="p-name"></span>
													<span class="p-position"></span>
												</div>
												<i class="fal fa-long-arrow-right"></i>
											</div>
										</div>

									</div>
								</div>
							</a>

						<?php $t++;
						endwhile; ?>
					</div>
				</div>

				<div class="col">
					<div class="team-side" id="aside1">
						<p><?php the_field('text_side'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>