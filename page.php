<?php get_header();

if (get_field('header_image_n')) {
	$bg = get_field('header_image_n');
} else {
	$bg = get_field('header_image_page', 'option');
}

?>

<section class="s-header-inner" style='background:url(<?php echo $bg; ?>) no-repeat scroll center center; background-size: cover;'>
	<div class="container">
		<div class="header-inner">
			<?php if (get_field('title_header_n')) : ?>
				<span class="main-title"><?php the_field('title_header_n'); ?></span>
			<?php endif; ?>
			<?php if (get_field('text_header_n')) : ?>
				<p><?php the_field('text_header_n'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="s-dpage hide" id="s-dpage">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile;
		endif; ?>

		<?php if( have_rows('btn_downloads') ): ?>
		<ul class="btn-dl">
		<?php while ( have_rows('btn_downloads') ) : the_row(); ?>

			<li>
				<?php
				$file = get_sub_field('file');
				//if( $file ):

				    // Extract variables.
				    $url = $file['url'];
				    $title = $file['title'];
				    $caption = $file['caption'];
				    $icon = $file['icon'];

					// part where to get the filesize
					$filesize = filesize( get_attached_file( $file['id'] ) );
					$filesize = size_format($filesize, 2);

				    // Display image thumbnail when possible.
				    if( $file['type'] == 'image' ) {
				        $icon =  $file['sizes']['thumbnail'];
				    } ?>

				    <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
				    	<div>
					        <span class="file-name"><?php the_sub_field('title'); ?></span>
					        <span class="size"><?php echo $filesize; ?></span>
				        </div>
				        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/down-arrow2.png" />
				    </a>

				<?php //endif; ?>	
			</li>

		<?php endwhile; ?>
		</ul>
		<?php endif; ?>

	</div>
	<span class="content_toggle" id="contentToggle" href="#">
			Load more
			<i class="fal fa-angle-double-down"></i>
		</span>
</section>


<?php get_footer(); ?>