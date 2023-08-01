<?php

/* Price class definition */

//Exit if accessed directly
if(!defined( 'ABSPATH' )){
    exit;
}

if( ! class_exists( 'Price' ) ){

    class Price{

        public function __construct(){
            add_action( 'init', array( $this, 'price_register_post_type' ) );
            add_action( 'add_meta_boxes', array( $this, 'barbers_pole_price_metabox' ) );
            add_action( 'save_post', array( $this,'barbers_pole_price_meta_save' ) );
        }

        // Register 'price' post type
        public function price_register_post_type(){

            $singular = 'Price';
            $plural = 'Prices';

            $labels = array(
                'all_items' => 'Prices',
                'menu_name' => 'Prices',
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
                            'slug' => 'prices',
                            'with_front' => true,
                            'pages' => true,
                            'feeds' =>  false,      
                    ),
                    'supports' => array(
                            'title',
                            //'editor',
                            //'author',
                            'custom_fields',
                            //'thumbnail'
                    ),
                    //'taxonomies'          => array( 'price-category' ),

            );

            register_post_type( 'price', $args ); 

        }

        public function barbers_pole_price_metabox(){

            add_meta_box(

                'barbers_pole_price_metabox',
                'Price for listing',
                array( $this, 'barbers_pole_price_callback' ),
                'price'

            );

        }

        public function barbers_pole_price_callback($post){

            wp_nonce_field( basename(__FILE__), 'Barbers_Pole_enable_disable_nonce' );

            $price = ( get_post_meta( $post->ID, 'price', true ) ) ? esc_html( get_post_meta( $post->ID, 'price', true ) ) : "" ;

            ?>

            <div>

                <div id="price">
                    Price:
                    <div>
                        <input type="text" name="price" value="<?php echo $price; ?>" style="width: 100%; margin-bottom: 10px;" />
                    </div>
                </div>

            </div>

            <?php

        }

        public function barbers_pole_price_meta_save($post_id){

            $is_autosave = wp_is_post_autosave($post_id);
            $is_revision = wp_is_post_revision($post_id);
            $is_valid_nonce = ( isset($_POST['Barbers_Pole_enable_disable_nonce'] ) && wp_verify_nonce( $_POST['Barbers_Pole_enable_disable_nonce'], basename(__FILE__)) ) ? "true" : "false";

            if($is_autosave || $is_revision || !$is_valid_nonce){
                return;
            }

            update_post_meta( $post_id, 'price', $_POST['price'] );

        }
        
    }

}