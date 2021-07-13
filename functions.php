<?php
/**
 * bafs Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bafs
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_BAFS_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style('bootstrap-grid-css', get_stylesheet_directory_uri() . '/inc/css/bootstrap-grid.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri() . '/inc/css/font-awesome.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('line-awesome-css', get_stylesheet_directory_uri() . '/inc/css/line-awesome.min.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri() . '/inc/css/magnific-popup.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	//wp_enqueue_style('fullpage-css', get_stylesheet_directory_uri() . '/inc/css/jquery.fullpage.min.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
    //wp_enqueue_style('select2-css', get_stylesheet_directory_uri() . '/inc/css/select2.min.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	//wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/inc/css/animate.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('carousel2-css', get_stylesheet_directory_uri() . '/inc/js/owl.carousel2/assets/owl.carousel.min.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');

	wp_enqueue_style('thai-awesome-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');

	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/inc/css/main.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('other-css', get_stylesheet_directory_uri() . '/inc/css/other.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');
	wp_enqueue_style('media-css', get_stylesheet_directory_uri() . '/inc/css/media.css', array('astra-theme-css'), CHILD_THEME_BAFS_VERSION, 'all');

	wp_enqueue_script('sticky-js', get_stylesheet_directory_uri() . '/inc/js/jquery.sticky.js', array('jquery'), '1.0.0');
   // wp_enqueue_script('isotope-js', get_stylesheet_directory_uri() . '/inc/js/isotope.pkgd.min.js', array('jquery'), '1.0.0');
   // wp_enqueue_script('scrolloverflow', get_stylesheet_directory_uri() . '/inc/js/scrolloverflow.min.js', array('jquery'), '1.0.0');
	//wp_enqueue_script('fullpage-js', get_stylesheet_directory_uri() . '/inc/js/jquery.fullpage.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('matchHeight', get_stylesheet_directory_uri() . '/inc/js/jquery.matchHeight.js', array('jquery'), '1.0.0');
	wp_enqueue_script('carousel2', get_stylesheet_directory_uri() . '/inc/js/owl.carousel2/owl.carousel.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('magnific-popup-js', get_stylesheet_directory_uri() . '/inc/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0');
    //wp_enqueue_script('select2-js', get_stylesheet_directory_uri() . '/inc/js/select2.full.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/inc/js/scripts.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);


/*------------------------------------*\
	Custom
\*------------------------------------*/

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('BAFS');
}

add_action('init', 'register_post_types_careers');
function register_post_types_careers()
{
    register_post_type('careers', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Career',
            'singular_name'      => 'Singular career',
            'add_new'            => 'Add career',
            'add_new_item'       => 'New career',
            'edit_item'          => 'Edit post career',
            'new_item'           => 'New career',
            'view_item'          => 'View career',
            'search_items'       => 'Search career',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Careers',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => null,
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'show_in_rest'        => true,
        'taxonomies'          => array('careerscat'),
        'has_archive'         => false,
        'rewrite'             => array('slug' => 'careers', 'with_front' => false),
        'query_var'           => true,
    ));
}