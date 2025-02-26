<?php

/**
 * Barber Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barber Shop
 */

require_once get_template_directory() . '/inc/customizer.php';

function barber_shop_scripts(){

    //wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap', array(), null );
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
			'barber_shop_main_menu' => esc_html__( 'Barber Shop Main Menu', 'barber-shop' )
		)
	);

    $textdomain = 'barber-shop';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', array(
            'height'    => 91,
            'width'     => 204,
            'flex-height'    => true,
            'flex-width'   => true,
        )
    );

    add_theme_support( 'post-thumbnails' );

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


function barber_shop_logo_class(){

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image_array = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $html = '<img src="' . $image_array[0] . '" class="logo-image img-fluid" align="" width="' . $image_array[1] . '" height="' . $image_array[2] . '">';

    return $html;

}
add_filter( 'get_custom_logo', 'barber_shop_logo_class' );


function barber_shop_sidebars(){

    register_sidebar(
        array(
            'name'              => esc_html__( 'Booking sidebar', 'barber-shop' ),
            'id'                => 'sidebar-booking',
            'description'       => esc_html__( 'This is the Booking sidebar at Home. You can add widgets here.', 'barber-shop' ),
            'before_widget'     => '',
            'after_widget'      => '',
            'before_title'      => '',
            'after_title'       => ''
        )
    );

}
add_action( 'widgets_init', 'barber_shop_sidebars' );


function barber_shop_images_preload(){
    ?>

        <link rel="preload" fetchpriority="high" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2025/02/client-doing-hair-cut-barber-shop-salon.webp" />
        <link rel="preload" fetchpriority="high" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2025/02/client-doing-hair-cut-barber-shop-salon-mobile.webp" />
        <link rel="preload" fetchpriority="high" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2025/02/barber-customer-giving-high-five.webp" />
        <link rel="preload" fetchpriority="high" as="image" href="<?php echo home_url(); ?>/wp-content/themes/barber-shop/inc/images/vintage-chair-barbershop.webp" />

    <?php
}
add_action( "wp_head", "barber_shop_images_preload" );


function barber_shop_css(){
    ?>

        <style type="text/css">
            .hero-section{
                background-image: url('<?php echo wp_get_attachment_url( get_theme_mod( 'set_home_top_background' ) ); ?>');
            }
            @media(max-width: 767px){
                .hero-section{
                    background-image: url('<?php echo wp_get_attachment_url( get_theme_mod( 'set_home_top_background_mobile' ) ); ?>');
                }
            }
        </style>

    <?php
}
add_action( "wp_head", "barber_shop_css" );