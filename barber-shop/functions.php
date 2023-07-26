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

}
add_action( 'wp_enqueue_scripts', 'barber_shop_scripts' );