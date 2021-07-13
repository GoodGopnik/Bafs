<?php get_header(); 

if(get_field('header_image')) {
	$bg = get_field('header_image');
} else {
	$bg = get_field('header_image_post','option');
}

?>

<section class="s-header-inner" style='background:url(<?php echo $bg; ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<span class="main-title"><?php the_field('title_post','option'); ?></span>
			<p><?php the_field('subtitle_post','option'); ?></p>
		</div>
	</div>
</section>

<section class="s-spost">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="spost-side">
					<h1 class="s-title"><?php the_title(); ?></h1>
					<?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
				</div>			
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-6">
				<?php the_content(); ?>
			</div>
			<?php endwhile;	endif; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>