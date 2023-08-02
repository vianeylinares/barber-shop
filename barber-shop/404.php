<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Barber Shop
 */
?>
<?php get_header(); ?>
	
<main>
    <div class="container">
        <div class="row" style="display: block; margin-top: 100px; margin-bottom: 100px;">
            <h1>
                <?php esc_html_e( 'Page not found', 'barber-shop' ); ?>
            </h1>
            <p>
                <?php esc_html_e( 'Unfortunately, the page you tried to reach does not exist on this site.', 'barber-shop' ); ?>
            </p>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>