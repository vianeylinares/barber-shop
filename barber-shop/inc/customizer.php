<?php 
/**
* Barber Shop Theme Customizer
*
* @package Barber Shop
*/

function barber_shop_customizer( $wp_customize ){

    /* Home Top section settings */

    $wp_customize->add_section(
        'sec_home_top', array(
            'title'         => __( 'Home Top Settings', 'barber-shop' ),
            'description'   => __( 'Home Top Section', 'barber-shop' ),
        )
    );

        $wp_customize->add_setting(
            'set_home_top_background',
            array(
                'type'                  => 'theme_mod',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'set_home_top_background',
                array(
                    'label'     => __( 'Home top background', 'barber-shop' ),
                    'section'   => 'sec_home_top',
                    'mime_type' => 'image'
                )
            )
        );

        $wp_customize->add_setting(
            'set_home_top_title', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_top_title'
            )
        );

        $wp_customize->add_control(
            'set_home_top_title', array(
                'label'			=> __( 'Home top title', 'barber-shop' ),
                'description'	=> __( 'Home top title', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_top_subtitle', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_top_subtitle', array(
                'label'			=> __( 'Home top subtitle', 'barber-shop' ),
                'description'	=> __( 'Home top subtitle', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_about_button', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_about_button', array(
                'label'			=> __( 'Home "about" button', 'barber-shop' ),
                'description'	=> __( 'Home "about" button', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_what_button', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_what_button', array(
                'label'			=> __( 'Home "what" button', 'barber-shop' ),
                'description'	=> __( 'Home "what" button', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_top_small_image',
            array(
                'type'                  => 'theme_mod',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'set_home_top_small_image',
                array(
                    'label'     => __( 'Home top small image', 'barber-shop' ),
                    'section'   => 'sec_home_top',
                    'mime_type' => 'image'
                )
            )
        );

        $wp_customize->add_setting(
            'set_home_top_hurry_legend', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_top_hurry_legend', array(
                'label'			=> __( 'Home top hurry title', 'barber-shop' ),
                'description'	=> __( 'Home top hurry title', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_top_hurry_button', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_top_hurry_button', array(
                'label'			=> __( 'Home top "book" button', 'barber-shop' ),
                'description'	=> __( 'Home top "book" button', 'barber-shop' ),
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

    /* Home Hairdressers section settings */

    $wp_customize->add_section(
        'sec_home_hairdressers', array(
            'title'         => __( 'Hairdressers Settings', 'barber-shop' ),
            'description'   => __( 'Hairdressers Section', 'barber-shop' ),
        )
    );

        $wp_customize->add_setting(
            'set_hairdressers_title', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hairdressers_title', array(
                'label'			=> __( 'Hairdresser section title', 'barber-shop' ),
                'description'	=> __( 'Hairdresser section title', 'barber-shop' ),
                'section'		=> 'sec_home_hairdressers',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_hairdressers_subtitle',
            array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_textarea_field'
            )
        );

        $wp_customize->add_control(
            'set_hairdressers_subtitle',
            array(
                'label'             => __( 'Hairdressers section subtitle', 'barber-shop' ),
                'description'       => __( 'Hairdressers section subtitle', 'barber-shop' ),
                'section'           => 'sec_home_hairdressers',
                'type'              => 'textarea'
            )
        );

    /* Home Discount section */

    $wp_customize->add_section(
        'sec_home_discount', array(
            'title'         => __( 'Discount Settings', 'barber-shop' ),
            'description'   => __( 'Discount Section', 'barber-shop' )
        )
    );

        $wp_customize->add_setting(
            'set_discount_show', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_discount_checkbox'
            )
        );

        $wp_customize->add_control(
            'set_discount_show', array(
                'label'			=> __( 'Show Discount section?', 'barber-shop' ),
                'section'		=> 'sec_home_discount',
                'type'			=> 'checkbox'
            )
        );

        $wp_customize->add_setting(
            'set_discount_background_image',
            array(
                'type'                  => 'theme_mod',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'set_discount_background_image',
                array(
                    'label'     => __( 'Discount background image', 'barber-shop' ),
                    'section'   => 'sec_home_discount',
                    'mime_type' => 'image'
                )
            )
        );

        $wp_customize->add_setting(
            'set_discount_title', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_discount_title', array(
                'label'			=> __( 'Discount section title', 'barber-shop' ),
                'description'	=> __( 'Discount section title', 'barber-shop' ),
                'section'		=> 'sec_home_discount',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_discount_subtitle', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_discount_subtitle', array(
                'label'			=> __( 'Discount section subtitle', 'barber-shop' ),
                'description'	=> __( 'Discount section subtitle', 'barber-shop' ),
                'section'		=> 'sec_home_discount',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_discount_promo_code', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_discount_promo_code', array(
                'label'			=> __( 'Discount promo code', 'barber-shop' ),
                'description'	=> __( 'Discount promo code', 'barber-shop' ),
                'section'		=> 'sec_home_discount',
                'type'			=> 'text'
            )
        );

    /* Home Contact section */

    $wp_customize->add_section(
        'sec_home_contact', array(
            'title'         => __( 'Contact Settings', 'barber-shop' ),
            'description'   => __( 'Contact Section', 'barber-shop' )
        )
    );

        $wp_customize->add_setting(
            'set_home_contact_title', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_title', array(
                'label'			=> __( 'Contact section title', 'barber-shop' ),
                'description'	=> __( 'Contact section title', 'barber-shop' ),
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_phone', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_phone', array(
                'label'			=> __( 'Contact phone', 'barber-shop' ),
                'description'	=> __( 'Contact phone', 'barber-shop' ),
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_email', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_email'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_email', array(
                'label'			=> __( 'Contact e-email', 'barber-shop' ),
                'description'	=> __( 'Contact e-mail', 'barber-shop' ),
                'section'		=> 'sec_home_contact',
                'type'			=> 'email'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_business_hours_title', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_business_hours_title', array(
                'label'			=> __( 'Business hours title', 'barber-shop' ),
                'description'	=> __( 'Business hours title', 'barber-shop' ),
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_business_hours', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_business_hours', array(
                'label'			=> __( 'Business hours', 'barber-shop' ),
                'description'	=> __( 'Business hours', 'barber-shop' ),
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_facebook', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_url'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_facebook', array(
                'label'			=> 'Facebook',
                'description'	=> 'Facebook',
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_twitter', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_url'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_twitter', array(
                'label'			=> 'Twitter',
                'description'	=> 'Twitter',
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_instagram', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_url'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_instagram', array(
                'label'			=> 'Instagram',
                'description'	=> 'Instagram',
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_youtube', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_url'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_youtube', array(
                'label'			=> 'YouTube',
                'description'	=> 'YouTube',
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

        $wp_customize->add_setting(
            'set_home_contact_whatsapp', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_url'
            )
        );

        $wp_customize->add_control(
            'set_home_contact_whatsapp', array(
                'label'			=> 'WhatsApp',
                'description'	=> 'WhatsApp',
                'section'		=> 'sec_home_contact',
                'type'			=> 'text'
            )
        );

    /* Copyright section */

    $wp_customize->add_section(
        'sec_copyright', array(
            'title'         => __( 'Copyright Settings', 'barber-shop' ),
            'description'   => __( 'Copyright Section', 'barber-shop' ),
        )
    );

        $wp_customize->add_setting(
            'set_copyright_legend', array(
                'type'					=> 'theme_mod',
                'default'				=> '',
                'sanitize_callback'		=> 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright_legend', array(
                'label'			=> __( 'Copyright legend', 'barber-shop' ),
                'description'	=> __( 'Copyright legend', 'barber-shop' ),
                'section'		=> 'sec_copyright',
                'type'			=> 'text'
            )
        );

}
add_action( 'customize_register', 'barber_shop_customizer' );


function sanitize_top_title( $top_title ){

    $allowed_tags = array(
        'strong'    => array(),
        'em'        => array(),
    );

    $top_title =  trim( wp_kses( $top_title, $allowed_tags ) );

    return $top_title;

}

function sanitize_discount_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}