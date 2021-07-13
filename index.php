<?php get_header(); ?>

<section class="s-header-inner bg-overlay" style='background:url(<?php the_field('header_image_n', get_option('page_for_posts')); ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<h1 class="main-title"><?php single_post_title(); ?> </h1>
			<p><?php the_field('text_header_n', get_option('page_for_posts')); ?></p>
		</div>
	</div>
</section>

<section class="s-posts-all">
	<div class="container">
		<div class="row">
			
			<?php if (have_posts()): while (have_posts()) : the_post();

				if ( has_post_thumbnail()) {
					$bg = get_the_post_thumbnail_url();
				} else {
					$bg = get_field('bg_post_def','option');
				}

			?>

			<div class="col-md-4">
				<a class="post-one" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>">
					<div class="post-one-text">
						<h3><?php the_title(); ?></h3>
						<span class="date-post"><?php the_time('j F. Y'); ?></span>
						<?php
					    $my_excerpt = get_the_excerpt();
						if ( has_excerpt() ){
							echo wpautop( $my_excerpt );
						}
						else {
							echo '<p>'.wp_trim_words(get_the_content(), 15, '[...]').'</p>';
						}
					  	?>
					  	<span class="link-post">En savoir plus<i class="fal fa-chevron-right"></i></span>
					</div>
				</a>
			</div>

			<?php endwhile; endif; ?>

		</div>

		<div class="blog-pagination">
			<?php the_posts_pagination(); ?>
		</div>

	</div>	
</section>

<?php get_footer(); ?>
