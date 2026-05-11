<?php
/**
 * Integración de Buscador de Licencias TBL en el Tema SOTS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Definir constantes adaptadas al tema
define( 'SLS_PATH', get_template_directory() . '/inc/sots-licenses/' );
define( 'SLS_URL', get_template_directory_uri() . '/inc/sots-licenses/' );

// Incluir clases
require_once SLS_PATH . 'class-db.php';
require_once SLS_PATH . 'class-admin.php';
require_once SLS_PATH . 'class-api.php';

class SOTS_License_Theme_Integration {
    public function __construct() {
        $this->db = new SLS_DB();
        $this->admin = new SLS_Admin( $this->db );
        $this->api = new SLS_API( $this->db );

        // Crear la tabla si no existe (al ser tema, lo hacemos en init o setup)
        add_action( 'after_setup_theme', array( 'SLS_DB', 'create_table' ) );

        // Shortcode
        add_shortcode( 'sots_license_search', array( $this, 'render_search_bar' ) );

        // Assets
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
    }

    public function enqueue_assets() {
        wp_enqueue_style( 'sots-search-css', SLS_URL . 'assets/css/search.css', array(), '1.1.0' );
        wp_enqueue_script( 'sots-search-js', SLS_URL . 'assets/js/search.js', array(), '1.1.0', true );
        
        wp_localize_script( 'sots-search-js', 'sls_data', array(
            'root' => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' )
        ));
    }

    public function render_search_bar() {
        ob_start();
        ?>
        <div class="sots-search-container">
            <div class="sots-search-wrapper">
                <input type="text" id="sots-license-search-input" placeholder="Buscar negocio, licencia o ubicación..." autocomplete="off">
                <div class="sots-search-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </div>
            </div>
            <div id="sots-search-results" class="sots-results-dropdown"></div>
        </div>
        <?php
        return ob_get_clean();
    }
}

new SOTS_License_Theme_Integration();
