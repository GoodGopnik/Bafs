<?php get_header(); /* Template Name: Meeting */

if (get_field('header_image')) {
	$bg = get_field('header_image');
} else {
	$bg = get_field('header_image_careers', 'option');
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

<?php if (have_rows('meeting')) : ?>
	<section class="s-meeting">
		<div class="container">
			<h1><?php the_field('title_meet'); ?></h1>
		</div>
		<div class="s-meeting-wrap">
			<?php while (have_rows('meeting')) : the_row(); ?>
				<div class="s-meeting-one">
					<div class="container">

						<h2 class="s-title"><?php the_sub_field('title'); ?></h2>

						<div class="meeting-box" style='background:url(<?php the_sub_field('img'); ?>) no-repeat scroll center center; background-size: cover;'>
							<?php if (have_rows('team')) : $p = '1'; ?>
								<?php while (have_rows('team')) : the_row(); ?>

									<div class="team-person" style="left: <?php the_sub_field('left'); ?>%; top: <?php the_sub_field('top'); ?>%;">
										<span class="name"><?php the_sub_field('name'); ?></span>
										<span class="position"><?php the_sub_field('position'); ?></span>
										<span class="team-person__number"><?php echo $p; ?></span>
									</div>

								<?php $p++;
								endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="container">
						<div class="meeting-box__mob">
							<?php if (have_rows('team')) : $p2 = '1'; ?>
								<?php while (have_rows('team')) : the_row(); ?>

									<div class="team-person__mob">
										<span><?php echo $p2; ?></span>
										<div class="team-person__wrap">
											<p class="name"><?php the_sub_field('name'); ?></p>
											<p class="position"><?php the_sub_field('position'); ?></p>
										</div>
									</div>

								<?php $p2++;
								endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>