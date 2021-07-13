<?php get_header(); /* Template Name: Business details */

if(get_field('header_image')) {
	$bg = get_field('header_image');
} else {
	$bg = get_field('header_image_page','option');
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

<section class="s-dbusiness">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="dbusiness-side">
					<h1 class="s-title"><?php the_title(); ?></h1>
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="col">
				<div class="dbusiness-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile;	endif; ?>
				</div>
			</div>
		</div>

	</div>
</section>

<?php if( have_rows('blocks') ): ?>
<section class="s-dbusiness-add">
	<div class="container">
		<div class="row">
			
			<?php while ( have_rows('blocks') ) : the_row(); ?>
			<div class="col-md-6">
				<a class="business-one" href="<?php the_sub_field('link'); ?>" style='background:url(<?php the_sub_field('img'); ?>) no-repeat scroll center center; background-size: cover;'>
					<h3><?php the_sub_field('title'); ?></h3>
					<span class="btn-link"><i class="fal fa-long-arrow-right"></i></span>
				</a>
			</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>