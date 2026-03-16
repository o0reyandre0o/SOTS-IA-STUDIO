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

/**
 * Automatically create required pages on theme activation
 */
function security_on_the_spot_create_pages() {
    $pages = array(
        'security-cameras-security-on-the-spot' => array(
            'title' => 'Security Cameras',
            'content' => 'Professional security camera installation services in Miami.',
        ),
        'home-automation-smart-homes-in-miami' => array(
            'title' => 'Home Automation',
            'content' => 'Smart home automation and integration services.',
        ),
        'access-control' => array(
            'title' => 'Access Control',
            'content' => 'Managed entry and access control solutions.',
        ),
        'fire-systems' => array(
            'title' => 'Fire Systems',
            'content' => 'Commercial fire alarm and life safety systems.',
        ),
        'networking-fiber-optics' => array(
            'title' => 'Networking & Fiber Optics',
            'content' => 'Robust networking and structured cabling solutions.',
        ),
        'contact-us' => array(
            'title' => 'Contact Us',
            'content' => 'Get in touch with Miami\'s security experts.',
        ),
        'who-we-are' => array(
            'title' => 'Who We Are',
            'content' => 'Learn more about Security on the Spot.',
        ),
        'audio-video-services' => array(
            'title' => 'Audio & Video Services',
            'content' => 'Professional audio and video integration.',
        ),
    );

    foreach ( $pages as $slug => $page_data ) {
        // Check if page exists
        $page_check = get_page_by_path( $slug );
        
        if ( ! isset( $page_check->ID ) ) {
            wp_insert_post( array(
                'post_type'   => 'page',
                'post_title'  => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_name'   => $slug,
            ) );
        }
    }

    // Flush rewrite rules to prevent 404s
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'security_on_the_spot_create_pages' );

function security_on_the_spot_scripts() {
    wp_enqueue_style( 'security-on-the-spot-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'security_on_the_spot_scripts' );
