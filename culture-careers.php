<?php get_header(); /* Template Name: Culture & Careers */

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
			<h1 class="main-title"><?php the_field('title_header'); ?></h1>
			<?php endif; ?>
			<?php if(get_field('text_header')): ?>
			<p><?php the_field('text_header'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="s-careers-headline">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="s-title"><?php the_field('title_cc'); ?></h2>
			</div>
			<div class="col">
				<?php the_field('text_cc'); ?>
			</div>
		</div>
	</div>
</section>

<section class="s-careers-half">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="s-title"><?php the_field('title_cc_b1'); ?></h2>
				<?php the_field('text_cc_b1'); ?>
			</div>
			<div class="col">
				<img src="<?php the_field('img_cc_b1'); ?>" alt="">
			</div>
		</div>
	</div>
	<img src="<?php the_field('img2_cc_b1'); ?>" alt="">
</section>

<section class="s-careers-half2">
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="<?php the_field('img_cc_b2'); ?>" alt="">
			</div>
			<div class="col">
				<h2 class="s-title"><?php the_field('title_cc_b2'); ?></h2>
				<?php the_field('text_cc_b2'); ?>
			</div>
		</div>
		<?php the_field('text2_cc_b2'); ?>
	</div>
	<?php
	$images = get_field('slider_cc_b2');
	if ($images) : ?>

		<div class="about-slider owl-carousel">
			<?php foreach ($images as $image) : ?>

				<div class="about-slider-one">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>

			<?php endforeach; ?>
		</div>

	<?php endif; ?>
</section>

<section class="s-careers-all">
	<div class="container">
		<h3><?php the_field('title_cc_all'); ?></h3>

		<?php
		$ids2 = get_field('careers', false, false);
		$the_query = new WP_Query(array(
			'post_type'      	=> 'careers',
			'posts_per_page'	=> -1,
			'post__in'			=> $ids2,
			'orderby'        	=> 'post__in'
		));
		if ($the_query->have_posts()) { $n = 1;
		?>

		<div class="careers-all">
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<div class="careers-one">
					<div class="careers-left">
						<h3><span><?php if($n < 10) { echo '0'.$n; } else { echo $n; } ?></span> <?php the_title(); ?></h3>
						<span class="careers-location"><i class="fal fa-map-marker-alt"></i><?php the_field('location'); ?></span>
						<?php
					    $my_excerpt = get_the_excerpt();
						if ( has_excerpt() ){
							echo wpautop( $my_excerpt );
						}
						else {
							echo '<p>'.wp_trim_words(get_the_content(), 15, '').'</p>';
						}
					  	?>
				  	</div>
				  	<div class="careers-right">
						<a class="btn-link" href="<?php the_permalink(); ?>"><i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>

			<?php $n++; endwhile;
			wp_reset_postdata(); ?>
		</div>

		<?php } ?>

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
</section>

<?php get_footer(); ?>