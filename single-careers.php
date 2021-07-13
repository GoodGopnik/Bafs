<?php get_header(); 

if(get_field('header_image')) {
	$bg = get_field('header_image');
} else {
	$bg = get_field('header_image_careers','option');
}

?>

<section class="s-header-inner" style='background:url(<?php echo $bg; ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<?php if(get_field('title_header')): ?>
			<span class="main-title"><?php the_field('title_header'); ?></span>
			<?php endif; ?>
			<?php if(get_field('text_header')): ?>
			<p><?php the_field('text_header'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="s-scareers">
	<div class="container">
		<div class="row">

		<div class="col-md-6">
			<div class="careers-content">
				<a class="back" href="javascript:history.back();"><i class="fal fa-chevron-left"></i> Back</a>
				<h1 class="s-title"><?php the_title(); ?></h1>
				<?php if(get_field('location')): ?>
				<span class="careers-location"><i class="fal fa-map-marker-alt"></i><?php the_field('location'); ?></span>
				<?php endif; ?>	
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>							
			</div>
		</div>

		<div class="col-md-6">
			<div class="careers-contact">
				<h2><?php the_field('title_careers_contact','option'); ?></h2>
				<?php if (have_rows('contacts_careers','option')) : ?>
					<ul class="menu-contact">
						<?php while (have_rows('contacts_careers','option')) : the_row(); ?>
							<li>
								<figure><img src="<?php the_sub_field('icon'); ?>"></figure>
								<div class="careers-contact__block-contact">
									<?php the_sub_field('contact'); ?>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>


<?php get_footer(); ?>