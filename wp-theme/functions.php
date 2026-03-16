<?php
/**
 * Security on the Spot functions and definitions
 */

if ( ! function_exists( 'security_on_the_spot_setup' ) ) :
    function security_on_the_spot_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'security_on_the_spot_setup' );

function security_on_the_spot_scripts() {
    wp_enqueue_style( 'security-on-the-spot-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'security_on_the_spot_scripts' );
