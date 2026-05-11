<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class SLS_API {
    private $db;

    public function __construct( $db ) {
        $this->db = $db;
        add_action( 'rest_api_init', array( $this, 'register_routes' ) );
    }

    public function register_routes() {
        register_rest_route( 'sots/v1', '/search', array(
            'methods' => 'GET',
            'callback' => array( $this, 'handle_search' ),
            'permission_callback' => '__return_true'
        ));
    }

    public function handle_search( $request ) {
        $term = $request->get_param( 'q' );
        
        if ( empty( $term ) || strlen( $term ) < 2 ) {
            return new WP_REST_Response( array(), 200 );
        }

        $results = $this->db->search( $term );
        
        return new WP_REST_Response( $results, 200 );
    }
}
