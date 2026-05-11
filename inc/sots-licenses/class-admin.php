<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'SLS_Admin' ) ) {
    class SLS_Admin {
    private $db;

    public function __construct( $db ) {
        $this->db = $db;
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );
    }

    public function admin_assets( $hook ) {
        if ( 'toplevel_page_sots-license-import' !== $hook ) {
            return;
        }

        // Librería PDF.js
        wp_enqueue_script( 'pdf-js', 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js', array(), '3.11', true );
        wp_enqueue_script( 'sots-admin-import-js', SLS_URL . 'assets/js/admin-import.js', array('pdf-js'), '1.0.0', true );
        
        wp_localize_script( 'sots-admin-import-js', 'sls_admin_data', array(
            'worker_url' => 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js'
        ));
    }

    public function add_admin_menu() {
        add_menu_page(
            'SOTS Licencias',
            'SOTS Licencias',
            'manage_options',
            'sots-license-import',
            array( $this, 'render_admin_page' ),
            'dashicons-search',
            25
        );
    }

    public function render_admin_page() {
        $message = '';
        if ( isset( $_POST['sls_import_nonce'] ) && wp_verify_nonce( $_POST['sls_import_nonce'], 'sls_import_action' ) ) {
            $raw_text = isset( $_POST['sls_raw_data'] ) ? $_POST['sls_raw_data'] : '';
            if ( ! empty( $raw_text ) ) {
                $count = $this->db->import_raw_data( $raw_text );
                $message = '<div class="updated"><p>¡Éxito! Se han importado ' . $count . ' registros correctamente.</p></div>';
            }
        }

        ?>
        <div class="wrap">
            <h1>Importar Licencias desde PDF</h1>
            <?php echo $message; ?>
            
            <div id="sots-drop-zone" style="border: 2px dashed #ccc; padding: 40px; text-align: center; background: #fff; margin: 20px 0; border-radius: 10px; cursor: pointer; transition: all 0.3s;">
                <div class="dashicons dashicons-upload" style="font-size: 50px; width: 50px; height: 50px; color: #ff9900;"></div>
                <h2 style="margin: 10px 0;">Arrastra tu PDF aquí o haz clic para seleccionar</h2>
                <p>El sistema leerá el contenido del PDF y lo preparará para la importación.</p>
                <input type="file" id="sots-pdf-input" accept="application/pdf" style="display: none;">
            </div>

            <div id="sots-import-progress" style="display: none; margin-bottom: 20px;">
                <div style="background: #eee; border-radius: 10px; overflow: hidden;">
                    <div id="sots-progress-bar" style="width: 0%; height: 20px; background: #ff9900; transition: width 0.3s;"></div>
                </div>
                <p id="sots-progress-text" style="text-align: center; margin-top: 5px;">Procesando PDF...</p>
            </div>
            
            <form id="sls-import-form" method="post" action="">
                <?php wp_nonce_field( 'sls_import_action', 'sls_import_nonce' ); ?>
                <textarea id="sls_raw_data" name="sls_raw_data" rows="10" style="width: 100%; font-family: monospace; background: #f9f9f9;" placeholder="El texto del PDF aparecerá aquí automáticamente..."></textarea>
                <p class="submit">
                    <input type="submit" name="submit" id="submit-import" class="button button-primary button-large" value="Confirmar e Importar a la Web" disabled>
                </p>
            </form>
        </div>
        <style>
            #sots-drop-zone.dragover { background: #fffbe6; border-color: #ff9900; }
        </style>
        <?php
    }
}
}
