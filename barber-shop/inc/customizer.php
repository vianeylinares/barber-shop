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
            'title'         => 'Home Top Settings',
            'description'   => 'Home Top Section'
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
                    'label'     => 'Home top background',
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
                'label'			=> 'Home top title',
                'description'	=> 'Home top title',
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
                'label'			=> 'Home top subtitle',
                'description'	=> 'Home top subtitle',
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
                'label'			=> 'Home "about" button',
                'description'	=> 'Home "about" button',
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
                'label'			=> 'Home "what" button',
                'description'	=> 'Home "what" button',
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
                    'label'     => 'Home top small image',
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
                'label'			=> 'Home top hurry title',
                'description'	=> 'Home top hurry title',
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
                'label'			=> 'Home top "book" button',
                'description'	=> 'Home top "book" button',
                'section'		=> 'sec_home_top',
                'type'			=> 'text'
            )
        );

    /* Home Hairdressers section settings */

    $wp_customize->add_section(
        'sec_home_hairdressers', array(
            'title'         => 'Hairdressers Settings',
            'description'   => 'Hairdressers Section'
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
                'label'			=> 'Hairdresser section title',
                'description'	=> 'Hairdresser section title',
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
                'label'             => 'Hairdressers section subtitle',
                'description'       => 'Hairdressers section subtitle',
                'section'           => 'sec_home_hairdressers',
                'type'              => 'textarea'
            )
        );

    /* Home Discount section */

    $wp_customize->add_section(
        'sec_home_discount', array(
            'title'         => 'Discount Settings',
            'description'   => 'Discount Section'
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
                'label'			=> 'Show Discount section?',
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
                    'label'     => 'Discount background image',
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
                'label'			=> 'Discount section title',
                'description'	=> 'Discount section title',
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
                'label'			=> 'Discount section subtitle',
                'description'	=> 'Discount section subtitle',
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
                'label'			=> 'Discount promo code',
                'description'	=> 'Discount promo code',
                'section'		=> 'sec_home_discount',
                'type'			=> 'text'
            )
        );

    /* Home Contact section */

    $wp_customize->add_section(
        'sec_home_contact', array(
            'title'         => 'Contact Settings',
            'description'   => 'Contact Section'
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
                'label'			=> 'Contact section title',
                'description'	=> 'Contact section title',
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
                'label'			=> 'Contact phone',
                'description'	=> 'Contact phone',
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
                'label'			=> 'Contact e-email',
                'description'	=> 'Contact e-mail',
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
                'label'			=> 'Business hours title',
                'description'	=> 'Business hours title',
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
                'label'			=> 'Business hours',
                'description'	=> 'Business hours',
                'section'		=> 'sec_home_contact',
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