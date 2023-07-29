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
            add_action( 'add_meta_boxes', array( $this, 'barbers_pole_barber_metabox' ) );
            add_action( 'save_post', array( $this,'barbers_pole_meta_save' ) );
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

        public function barbers_pole_barber_metabox(){

            add_meta_box(

                'barbers_pole_barber_metabox',
                'Barber social networks',
                array( $this, 'barbers_pole_barber_callback' ),
                'barber'

            );

        }

        public function barbers_pole_barber_callback($post){

            wp_nonce_field( basename(__FILE__), 'Barbers_Pole_enable_disable_nonce' );

            $facebook = ( get_post_meta( $post->ID, 'facebook', true ) ) ? esc_html( get_post_meta( $post->ID, 'facebook', true ) ) : "" ;
            $instagram = ( get_post_meta( $post->ID, 'instagram', true ) ) ? esc_html( get_post_meta( $post->ID, 'instagram', true ) ) : "" ;
            $whatsapp = ( get_post_meta( $post->ID, 'whatsapp', true ) ) ? esc_html( get_post_meta( $post->ID, 'whatsapp', true ) ) : "" ;

            ?>

            <div>

                <div id="facebook">
                    Facebook:
                    <div>
                        <input type="text" name="facebook" value="<?php echo $facebook; ?>" style="width: 100%; margin-bottom: 10px;" />
                    </div>
                </div>

                <div id="instagram">
                    Instagram:
                    <div>
                        <input type="text" name="instagram" value="<?php echo $instagram; ?>" style="width: 100%; margin-bottom: 10px;" />
                    </div>
                </div>

                <div id="whatsapp">
                    WhatsApp:
                    <div>
                        <input type="text" name="whatsapp" value="<?php echo $whatsapp; ?>" style="width: 100%; margin-bottom: 10px;" />
                    </div>
                </div>

            </div>

            <?php

        }

        public function barbers_pole_meta_save($post_id){

            $is_autosave = wp_is_post_autosave($post_id);
            $is_revision = wp_is_post_revision($post_id);
            $is_valid_nonce = (isset($_POST['Barbers_Pole_enable_disable_nonce']) && wp_verify_nonce($_POST['Barbers_Pole_enable_disable_nonce'], basename(__FILE__)) ) ? "true" : "false";

            if($is_autosave || $is_revision || !$is_valid_nonce){
                return;
            }

            update_post_meta( $post_id, 'facebook', $_POST['facebook'] );
            update_post_meta( $post_id, 'instagram', $_POST['instagram'] );
            update_post_meta( $post_id, 'whatsapp', $_POST['whatsapp'] );

        }

    }

}