<?php get_header(); /* Template Name: Business */

if (get_field('header_image')) {
	$bg = get_field('header_image');
} else {
	$bg = get_field('header_image_page', 'option');
}

?>

<section class="s-header-inner" style='background:url(<?php echo $bg; ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<?php if (get_field('title_header')) : ?>
				<span class="main-title"><?php the_field('title_header'); ?></span>
			<?php endif; ?>
			<?php if (get_field('text_header')) : ?>
				<p><?php the_field('text_header'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="s-project">
	<div class="container">
		<h2 class="s-title"><?php the_field('title_p'); ?></h2>
		<img src="<?php the_field('img_p'); ?>" alt="">

		<?php if (have_rows('project')) : ?>
			<div class="tabs-projects">

				<div class="tabs s-project__tabs">

					<?php while (have_rows('project')) : the_row(); ?>
						<span class="tab s-project__tab"><?php the_sub_field('location'); ?></span>
					<?php endwhile; ?>

				</div>

				<div class="tab_content">

					<?php while (have_rows('project')) : the_row(); ?>
						<div class="tab_item">
							<div class="row">
								<div class="col">
									<div class="project-map">
										<img src="<?php the_sub_field('map'); ?>" alt="">

										<?php if (have_rows('location2')) : ?>
											<div class="location-map-wrap">
												<?php while (have_rows('location2')) : the_row(); ?>

													<div class="location-map tab" style="left: <?php the_sub_field('left'); ?>%; top: <?php the_sub_field('top'); ?>%;"><i class="fas fa-map-marker-alt"></i><span><?php the_sub_field('title'); ?></span>
													</div>

												<?php endwhile; ?>
											</div>
										<?php endif; ?>

									</div>
								</div>
								<div class="col">

									<?php if (have_rows('location2')) : ?>
										<?php while (have_rows('location2')) : the_row(); ?>
											<div class="project-one tab_item">

												<h3 class="s-title"><?php the_sub_field('title'); ?></h3>

												<?php if (have_rows('location_content')) : ?>
													<?php while (have_rows('location_content')) : the_row(); ?>
														<h4><?php the_sub_field('stitle'); ?></h4>
														<?php if (have_rows('project_list')) : ?>
															<ul>
																<?php while (have_rows('project_list')) : the_row(); ?>

																	<div class="project-one__block-ul">
																		<div class="project-one__strong-block">
																			<p><?php the_sub_field('strong'); ?></p>
																		</div>
																		<div class="project-one__span-block">
																			<p><?php the_sub_field('normal'); ?></p>
																		</div>
																	</div>

																<?php endwhile; ?>
															</ul>
														<?php endif; ?>
													<?php endwhile; ?>
												<?php endif; ?>

											</div>
										<?php endwhile; ?>
									<?php endif; ?>

								</div>
							</div>
						</div>
					<?php endwhile; ?>

				</div>

			</div>

	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>