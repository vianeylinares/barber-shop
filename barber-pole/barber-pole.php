<?php
/*
 * Plugin name: Barber's Pole
 * Plugin URI: 
 * Description: Barber's activities
 * Author: VL
 * Version: 1.0.0
 * License: Open
 * 
 */

//Exit if accessed directly
if(!defined('ABSPATH')){
       exit;
}

if( ! class_exists ( 'Barbers_Pole' ) ){

    class Barbers_Pole{

        function __construct(){

            $this->define_constants();

            require_once( Barbers_Pole_PATH . 'post-types/class.barber.php' );
            $barber = new Barber();

            require_once( Barbers_Pole_PATH . 'post-types/class.service.php' );
            $service = new Service();

            require_once( Barbers_Pole_PATH . 'post-types/class.price.php' );
            $price = new Price();

            require_once( Barbers_Pole_PATH . 'post-types/class.branch.php' );
            $branch = new Branch();

        }

        public function define_constants(){
            define( 'Barbers_Pole_PATH', plugin_dir_path(__FILE__) );
            define( 'Barbers_Pole_URL', plugin_dir_url(__FILE__) );
            define( 'Barbers_Pole_VERSION', '1.0.0' );
        }

        public static function activate(){
            update_option( 'rewrite_rules', '');
        }

        public static function deactivate(){
            flush_rewrite_rules();
        }

        public static function uninstall(){
            //delete_option( 'Barbers_Pole_options' );
        }

    }

}

if( class_exists( 'Barbers_Pole' ) ){

    register_activation_hook( __FILE__, array( 'Barbers_Pole', 'activate' ) );
    register_deactivation_hook( __FILE__, array( 'Barbers_Pole', 'deactivate' ) );
    register_uninstall_hook( __FILE__, array( 'Barbers_Pole', 'uninstall' ) );

    $barbers_pole = new Barbers_Pole();

}