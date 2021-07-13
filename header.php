<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div 
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>
	<?php 
	astra_header_before(); 

	astra_header(); 

	astra_header_after();

	astra_content_before(); 
	?>



	<?php if( have_rows('contact_floating','option') ): ?>
	<div class="contact-floating">
		<i class="las la-times"></i>
		<span><?php the_field('title_contact_float','option'); ?></span>
		<ul class="menu-floating">
		<?php while ( have_rows('contact_floating','option') ) : the_row(); ?>
			<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php the_sub_field('icon'); ?>" alt=""></a></li>
		<?php endwhile; ?>
		</ul>			
	</div>
	<?php endif; ?>

	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
