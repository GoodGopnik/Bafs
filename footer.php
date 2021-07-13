<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<?php
astra_content_after();

astra_footer_before();

astra_footer();

if (have_rows('contact_floating', 'option')) : ?>
	<div class="contact-floating contact-floating__footer">
		<i class="las la-times"></i>
		<span><?php the_field('title_contact_float', 'option'); ?></span>
		<ul class="menu-floating">
			<?php while (have_rows('contact_floating', 'option')) : the_row(); ?>
				<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php the_sub_field('icon'); ?>" alt=""></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif;

astra_footer_after();

?>


</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>