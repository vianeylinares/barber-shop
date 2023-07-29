<?php

/* Barber class definition */

//Exit if accessed directly
if(!defined( 'ABSPATH' )){
    exit;
}

if( ! class_exists( 'Barber' ) ){

    class Barber{

        public function __construct(){
            add_action( 'init', array( $this, 'barber_register_post_type' ) );
        }

        // Register 'barber' post type
        public function barber_register_post_type(){

            $singular = 'Barber';
            $plural = 'Barbers';

            $labels = array(
                'all_items' => 'Barbers',
                'menu_name' => 'Barbers',
                'name' => $plural,
                'singular_name' => $singular,
                'add_name' => 'Add New ',
                'add_new_item' => 'Add New ' . $singular,
                'edit' => 'Edit ',
                'edit_item' => 'Edit ' . $singular,
                'new_item' => 'New ' . $singular,
                'view' => 'View ' . $singular,
                'view_item' => 'View ' . $singular,
                'search_term' => 'Search ' . $plural,
                'parent' => 'Parent ' . $singular,
                'not_found' => 'No ' . $plural . ' found',
                'not_found_in_trash' => 'No ' . $plural . ' in Trash',
            );


            $args = array (
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'exclude_from_search' => false,
                    'show_in_nac_menus' => true,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'show_in_admin_bar' => true,
                    'menu_position' => 10,
                    'menu_icon' => 'dashicons-images-alt2',
                    'can_export' => true,
                    'delete_with_user' => false,
                    'hierarchical' => false,
                    'has_archive' => true,
                    'query_var' => true,
                    'capability_type' => 'post',
                    'map_meta_cap' => true,
                    'capabilities' => array(
                        //'create_posts' => 'do_not_allow',
                    ),
                    'rewrite' => array(
                            'slug' => 'barbers',
                            'with_front' => true,
                            'pages' => true,
                            'feeds' =>  false,      
                    ),
                    'supports' => array(
                            'title',
                            //'editor',
                            //'author',
                            'custom_fields',
                            'thumbnail'
                    ),
                    //'taxonomies'          => array( 'barber-category' ),

            );

            register_post_type( 'barber', $args ); 

        }

    }

}