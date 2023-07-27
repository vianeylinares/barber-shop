<?php
/**
 * The header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barber Shop
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gentlemen's Barber Shop - HTML CSS Template</title>

        <?php wp_head(); ?>
    </head>
    
    <body>

        <div class="container-fluid">
            <div class="row">

                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                        <a class="navbar-brand" href="index.html">
                            <img src="https://devbucket.xyz/barbershop/wp-content/themes/barber-shop/inc/images/templatemo-barber-logo.png" class="logo-image img-fluid" align="">
                        </a>

                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'barber_shop_main_menu',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'container_class'   => '',
                                'container_id'      => '',
                                'menu_class'        => 'nav flex-column',
                                'add_li_class'      => 'nav-item',
                                'add_anchor_class'  => 'nav-link click-scroll'
                                )
                            );
                        ?>

                    </div>
                </nav>