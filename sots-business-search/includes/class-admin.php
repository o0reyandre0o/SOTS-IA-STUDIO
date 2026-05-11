<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class SLS_Admin {
    private $db;

    public function __construct( $db ) {
        $this->db = $db;
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
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
                $message = '<div class="updated"><p>¡Éxito! Se han importado ' . $count . ' registros.</p></div>';
            } else {
                $message = '<div class="error"><p>Por favor, pega el texto del PDF.</p></div>';
            }
        }

        ?>
        <div class="wrap">
            <h1>Importar Datos de Licencias (TBL)</h1>
            <?php echo $message; ?>
            <p>Pega aquí el texto copiado de los PDFs de licencias comerciales. El sistema detectará automáticamente el formato y actualizará la base de datos.</p>
            
            <form method="post" action="">
                <?php wp_nonce_field( 'sls_import_action', 'sls_import_nonce' ); ?>
                <textarea name="sls_raw_data" rows="20" style="width: 100%; font-family: monospace;" placeholder="Pega el texto aquí..."></textarea>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Limpiar Base de Datos e Importar">
                </p>
            </form>

            <div style="margin-top: 40px; padding: 20px; background: #fff; border: 1px solid #ccd0d4;">
                <h2>Instrucciones</h2>
                <ol>
                    <li>Abre el PDF de las licencias.</li>
                    <li>Selecciona todo el texto (Ctrl+A) y cópialo (Ctrl+C).</li>
                    <li>Pégalo en el cuadro de arriba.</li>
                    <li>Haz clic en "Limpiar Base de Datos e Importar".</li>
                    <li><strong>Nota:</strong> Esto borrará los datos actuales y los reemplazará con los nuevos.</li>
                </ol>
            </div>
        </div>
        <?php
    }
}
