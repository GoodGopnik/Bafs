<?php get_header(); /* Template Name: Core Value */ ?>

<section class="s-header-inner" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<h1 class="main-title"><?php the_title(); ?></h1>
			<p><?php the_field('subtitle'); ?></p>
		</div>
	</div>
</section> 

<?php if( have_rows('core') ): ?>
<section class="s-core-v" style='background:url(<?php the_field('bg_core'); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="row">
			
			<?php while ( have_rows('core') ) : the_row(); ?>
			<div class="col">
				<div class="core-one">
					<span class="core-one__span"><?php the_sub_field('letter'); ?></span>
					<h3 class="core-one__h3"><?php the_sub_field('title'); ?></h3>
					<div class="core-one__hover"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>