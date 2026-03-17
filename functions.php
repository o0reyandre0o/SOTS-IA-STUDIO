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
            'template' => 'page-security-cameras-security-on-the-spot.php'
        ),
        'home-automation-smart-homes-in-miami' => array(
            'title' => 'Home Automation',
            'content' => 'Smart home automation and integration services.',
            'template' => 'page-home-automation-smart-homes-in-miami.php'
        ),
        'access-control' => array(
            'title' => 'Access Control',
            'content' => 'Managed entry and access control solutions.',
            'template' => 'page-access-control.php'
        ),
        'fire-systems' => array(
            'title' => 'Fire Systems',
            'content' => 'Commercial fire alarm and life safety systems.',
            'template' => 'page-fire-systems.php'
        ),
        'networking-fiber-optics' => array(
            'title' => 'Networking & Fiber Optics',
            'content' => 'Robust networking and structured cabling solutions.',
            'template' => 'page-networking-fiber-optics.php'
        ),
        'contact-us' => array(
            'title' => 'Contact Us',
            'content' => 'Get in touch with Miami\'s security experts.',
            'template' => 'page-contact-us.php'
        ),
        'who-we-are' => array(
            'title' => 'Who We Are',
            'content' => 'Learn more about Security on the Spot.',
            'template' => 'page-who-we-are.php'
        ),
        'audio-video-services' => array(
            'title' => 'Audio & Video Services',
            'content' => 'Professional audio and video integration.',
            'template' => 'page-audio-video-services.php'
        ),
        'commercial-warehouse' => array(
            'title' => 'Commercial & Warehouse Properties',
            'content' => 'Security solutions for commercial and warehouse properties.',
        ),
        'restaurants' => array(
            'title' => 'Restaurants',
            'content' => 'Security solutions for restaurants.',
        ),
        'small-businesses' => array(
            'title' => 'Small Businesses',
            'content' => 'Security solutions for small businesses.',
        ),
        'retail' => array(
            'title' => 'Retail',
            'content' => 'Security solutions for retail stores.',
        ),
        'families' => array(
            'title' => 'Families',
            'content' => 'Security solutions for families and homes.',
        ),
        'car-workshops' => array(
            'title' => 'Car Workshops',
            'content' => 'Security solutions for car workshops.',
        ),
        'control-integration' => array(
            'title' => 'Control Integration',
            'content' => 'Smart home control integration services.',
        ),
        'lighting-control' => array(
            'title' => 'Lighting Control',
            'content' => 'Smart lighting control solutions.',
        ),
        'multi-zone-audio' => array(
            'title' => 'Multi-Zone Audio',
            'content' => 'Multi-zone audio system installation.',
        ),
        'home-theater' => array(
            'title' => 'Home Theater',
            'content' => 'Professional home theater installation.',
        ),
        'video-wall-installation' => array(
            'title' => 'Video-Wall Installation',
            'content' => 'Professional video wall installation services.',
        ),
        'intercom-systems' => array(
            'title' => 'Intercom Systems',
            'content' => 'Advanced intercom system installation.',
        ),
        'entry-exit-systems' => array(
            'title' => 'Entry/Exit Systems',
            'content' => 'Secure entry and exit system solutions.',
        ),
    );

    foreach ( $pages as $slug => $page_data ) {
        // Check if page exists
        $page_check = get_page_by_path( $slug );
        
        if ( ! isset( $page_check->ID ) ) {
            $page_id = wp_insert_post( array(
                'post_type'   => 'page',
                'post_title'  => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_name'   => $slug,
            ) );

            if ( $page_id && isset( $page_data['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        } else {
            // If page exists, ensure template is set
            if ( isset( $page_data['template'] ) ) {
                update_post_meta( $page_check->ID, '_wp_page_template', $page_data['template'] );
            }
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
