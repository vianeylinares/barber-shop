<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barber Shop
 */

?>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Our Branches</h4>
                            </div>

                            <?php

                                $args = array(
                                    'post_type' => 'branch',
                                    'post_status' => array('publish')
                                );

                                $branches = new WP_Query($args);

                                if( $branches->have_posts() ):
                                    while( $branches->have_posts() ): $branches->the_post();
                                        ?>
                                            <div class="col-lg-4 col-md-6 col-11">
                                                <div class="site-footer-thumb">
                                                    <strong class="mb-1"><?php the_title(); ?></strong>

                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                else:
                                    ?>
                                    <p>Nothing to display</p>
                                    <?php
                                endif;

                            ?>

                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p class="copyright-text mb-0">Copyright © 2036 Barber Shop 
                                    - Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>