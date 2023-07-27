<?php

/**
 * Barber Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barber Shop
 */

function barber_shop_scripts(){

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap', array(), null );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '', 'all' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/inc/css/bootstrap-icons.css', array(), '', 'all' );
    wp_enqueue_style( 'barber-shop-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/inc/js/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'click-scroll', get_template_directory_uri() . '/inc/js/click-scroll.js', array(), '', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/inc/js/custom.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'barber_shop_scripts' );


function barber_shop_config(){

	register_nav_menus(
		array(
			'barber_shop_main_menu' => 'Barber Shop Main Menu'
		)
	);

    add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'barber_shop_config', 0 );


function barber_shop_menu_add_class_on_li($classes, $item, $args) {

    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;

}
add_filter('nav_menu_css_class', 'barber_shop_menu_add_class_on_li', 1, 3);


function barber_shop_menu_add_class_on_a($classes, $item, $args) {

    if(isset($args->add_anchor_class)) {
        $classes['class'] = $args->add_anchor_class;
    }
    return $classes;

}
add_filter('nav_menu_link_attributes', 'barber_shop_menu_add_class_on_a', 1, 3);


if( ! function_exists( 'wp_body_open' ) ){

    function wp_body_open(){
        do_action( 'wp_body_open' );
    }

}