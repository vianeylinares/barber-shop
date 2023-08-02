<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
                
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1" style="background-image: url('<?php echo wp_get_attachment_url( get_theme_mod( 'set_home_top_background' ) ); ?>');">

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <h1 class="text-white mb-lg-3 mb-4"><?php echo get_theme_mod( 'set_home_top_title', 'Barber Shop' ); ?></h1>
                    <p class="text-black"><?php echo esc_html( get_theme_mod( 'set_home_top_subtitle', __( 'Get the most professional haircut for you', 'barber-shop' ) ) ); ?></p>
                    <br>
                    <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2"><?php echo esc_html( get_theme_mod( 'set_home_about_button', __( 'About Us', 'barber-shop' ) ) ); ?></a>

                    <a class="btn custom-btn smoothscroll mb-2" href="#section_3"><?php echo esc_html( get_theme_mod( 'set_home_what_button', __( 'What we do', 'barber-shop' ) ) ); ?></a>
                </div>
            </div>
        </div>

        <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'set_home_top_small_image' ) ); ?>" class="custom-block-image img-fluid" alt="">

            <h4><strong class="text-white"><?php echo esc_html( get_theme_mod( 'set_home_top_hurry_legend', __( 'Hurry Up! Get good haircut.' ) ) ); ?></strong></h4>

            <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3"><?php echo esc_html( get_theme_mod( 'set_home_top_hurry_button', __( 'Book a seat' ) ) ); ?></a>
        </div>
</section>

<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 mx-auto">
                <h2 class="mb-4"><?php echo esc_html( get_theme_mod( 'set_hairdressers_title', __( 'Best hairdressers' ) ) ); ?></h2>

                <div class="border-bottom pb-3 mb-5">
                    <p><?php echo esc_html( get_theme_mod( 'set_hairdressers_subtitle', __( 'Gentlemen\'s Barber Shop is new Bootstrap v5 HTML CSS template by TemplateMo for everyone. There is a sidebar menu to navigate the one-page layout. You can feel free to adapt this template for your business.' ) ) ); ?></p>
                </div>
            </div>

            <?php

                if( class_exists( 'Barber' ) ){

                    $args = array(
                        'post_type' => 'barber',
                        'post_status' => array('publish')
                    );

                    $barbers = new WP_Query($args);

                    if( $barbers->have_posts() ):
                        while( $barbers->have_posts() ): $barbers->the_post();
                            ?>
                                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" class="custom-block-bg-overlay-image img-fluid" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">

                                    <div class="team-info d-flex align-items-center flex-wrap">
                                        <p class="mb-0"><?php the_title(); ?></p>

                                        <ul class="social-icon ms-auto">
                                            <?php if( get_post_meta( $post->ID, 'facebook', true ) ): ?>
                                                <li class="social-icon-item">
                                                    <a href="<?php echo esc_url( get_post_meta( $post->ID, 'facebook', true ) ); ?>" class="social-icon-link bi-facebook">
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if( get_post_meta( $post->ID, 'instagram', true ) ): ?>
                                                <li class="social-icon-item">
                                                    <a href="<?php echo esc_url( get_post_meta( $post->ID, 'instagram', true ) ); ?>" class="social-icon-link bi-instagram">
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if( get_post_meta( $post->ID, 'whatsapp', true ) ): ?>
                                                <li class="social-icon-item">
                                                    <a href="<?php echo esc_url( get_post_meta( $post->ID, 'whatsapp', true ) ); ?>" class="social-icon-link bi-whatsapp">
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    else:
                        ?>
                        <p><?php esc_html_e( 'Nothing to display', 'barber-shop' ); ?></p>
                        <?php
                    endif;

                }

            ?>

        </div>
    </div>
</section>

<?php if( get_theme_mod( 'set_discount_show' ) == true ){ ?>
    <section class="featured-section section-padding" style="background-image: url('<?php echo wp_get_attachment_url( get_theme_mod( 'set_discount_background_image' ) ); ?>');">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 mx-auto">
                    <h2 class="mb-3"><?php echo esc_html( get_theme_mod( 'set_discount_title', __( 'Get 32% Discount' ) ) ); ?></h2>

                    <p><?php echo esc_html( get_theme_mod( 'set_discount_subtitle', __( 'on every second week of the month' ) ) ); ?></p>

                    <strong>Promo Code: <?php echo esc_html( get_theme_mod( 'set_discount_promo_code', 'BarBerMo' ) ); ?></strong>
                </div>

            </div>
        </div>
    </section>
<?php } ?>

<?php if( class_exists( 'Service' ) ){ ?>
    <section class="services-section section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-5"><?php esc_html_e( 'Services', 'barber-shop' ); ?></h2>
                </div>

                <?php

                    $args = array(
                        'post_type' => 'service',
                        'post_status' => array('publish')
                    );

                    $services = new WP_Query($args);

                    if( $services->have_posts() ):
                        while( $services->have_posts() ): $services->the_post();
                            ?>
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" class="services-image img-fluid" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0"><?php the_title(); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    else:
                        ?>
                        <p><?php esc_html_e( 'Nothing to display', 'barber-shop' ) ?></p>
                        <?php
                    endif;

                ?>

            </div>
        </div>
    </section>
<?php } ?>

<section class="booking-section section-padding" id="booking-section" style="background-image: url('<?php echo esc_url( home_url() ); ?>/wp-content/themes/barber-shop/inc/images/vintage-chair-barbershop.jpg');">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <?php
                    if( is_active_sidebar( 'sidebar-booking' ) ){
                        dynamic_sidebar( 'sidebar-booking' );
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php if( class_exists( 'Price' ) ){ ?>
    <section class="price-list-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="price-list-thumb-wrap">
                        <div class="mb-4">
                            <h2 class="mb-2"><?php esc_html_e( 'Price List', 'barber-shop' ); ?></h2>
                        </div>

                        <?php

                            $args = array(
                                'post_type' => 'price',
                                'post_status' => array('publish')
                            );

                            $prices = new WP_Query($args);

                            if( $prices->have_posts() ):
                                while( $prices->have_posts() ): $prices->the_post();
                                    ?>
                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                <?php the_title(); ?>
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$<?php echo esc_html( get_post_meta( $post->ID, 'price', true ) ); ?></strong>
                                            </h6>
                                        </div>
                                    <?php
                                endwhile;
                            else:
                                ?>
                                <p><?php esc_html_e( 'Nothing to display', 'barber-shop' ); ?></p>
                                <?php
                            endif;

                        ?>
                    </div>
                </div>

                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                    <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/barber-shop/inc/images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="vintage chair">
                </div>

            </div>
        </div>
    </section>
<?php } ?>

<section class="contact-section" id="section_5">
    <div class="section-padding section-bg">
        <div class="container">
            <div class="row">   

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center"><?php echo esc_html( get_theme_mod( 'set_home_contact_title', __( 'Say hello' ) ) ); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h5 class="mb-3"><strong>Contact</strong> Information</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: <?php echo esc_url( get_theme_mod( 'set_home_contact_phone', '(+49) 120-240-3600' ) ); ?>" class="site-footer-link">
                            <?php echo esc_html( get_theme_mod( 'set_home_contact_phone', '(+49) 120-240-3600' ) ); ?>
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:<?php echo esc_url( get_theme_mod( 'set_home_contact_email', 'hello@barber.beauty' ) ); ?>" class="site-footer-link">
                            <?php echo esc_html( get_theme_mod( 'set_home_contact_email', 'hello@barber.beauty' ) ); ?>
                        </a>
                    </p>

                    <ul class="social-icon">
                        <?php if( get_theme_mod( 'set_home_contact_facebook' ) != "" ){ ?>
                            <li class="social-icon-item">
                                <a href="<?php echo esc_url( get_theme_mod( 'set_home_contact_facebook' ) ); ?>" class="social-icon-link bi-facebook">
                                </a>
                            </li>
                        <?php } ?>

                        <?php if( get_theme_mod( 'set_home_contact_twitter' ) != "" ){ ?>
                            <li class="social-icon-item">
                                <a href="<?php echo esc_url( get_theme_mod( 'set_home_contact_twitter' ) ); ?>" class="social-icon-link bi-twitter">
                                </a>
                            </li>
                        <?php } ?>

                        <?php if( get_theme_mod( 'set_home_contact_instagram' ) != "" ){ ?>
                            <li class="social-icon-item">
                                <a href="<?php echo esc_url( get_theme_mod( 'set_home_contact_instagram' ) ); ?>" class="social-icon-link bi-instagram">
                                </a>
                            </li>
                        <?php } ?>

                        <?php if( get_theme_mod( 'set_home_contact_youtube' ) != "" ){ ?>
                            <li class="social-icon-item">
                                <a href="<?php echo esc_url( get_theme_mod( 'set_home_contact_youtube' ) ); ?>" class="social-icon-link bi-youtube">
                                </a>
                            </li>
                        <?php } ?>

                        <?php if( get_theme_mod( 'set_home_contact_whatsapp' ) != "" ){ ?>
                            <li class="social-icon-item">
                                <a href="<?php echo esc_url( get_theme_mod( 'set_home_contact_whatsapp' ) ); ?>" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>

                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                    <div class="contact-block">
                        <h6 class="mb-0">
                            <i class="custom-icon bi-shop me-3"></i>

                            <strong><?php echo esc_html( get_theme_mod( 'set_home_contact_business_hours_title', __( 'Open Daily' ) ) ); ?></strong>

                            <span class="ms-auto"><?php echo esc_html( get_theme_mod( 'set_home_contact_business_hours', __( '10:00 AM - 8:00 PM' ) ) ); ?></span>
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>