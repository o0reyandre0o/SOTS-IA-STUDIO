<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'SLS_DB' ) ) {
    class SLS_DB {
    public static function create_table() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sots_licenses';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name text NOT NULL,
            description text,
            licence_type text,
            file_number varchar(100),
            tbl_number varchar(100),
            start_date varchar(50),
            end_date varchar(50),
            location text,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta( $sql );
    }

    public function import_raw_data( $text ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sots_licenses';

        // Detectar formato
        $has_tbl_num = ( strpos( $text, 'Tbl Number' ) !== false );
        
        // Patrón de fecha: 29-Jan-26
        $date_pattern = '/\d{2}-[A-Z][a-z]{2}-\d{2}/';
        
        // Patrón para capturar File Number y Fechas
        if ( $has_tbl_num ) {
            // Formato con Tbl Number
            // Ejemplo: EXG 41194 454553 27-Nov-25 27-Nov-26
            $pattern = '/(EX[GR]|TB[RG]?)\s+([A-Z0-9]+)\s+([0-9]+)\s+(\d{2}-[A-Z][a-z]{2}-\d{2})\s+(\d{2}-[A-Z][a-z]{2}-\d{2})/';
        } else {
            // Formato estándar
            // Ejemplo: TBR TB562BS 29-Jan-26 29-Jan-27
            $pattern = '/(TB[RG]?)\s+([A-Z0-9]+)\s+(\d{2}-[A-Z][a-z]{2}-\d{2})\s+(\d{2}-[A-Z][a-z]{2}-\d{2})/';
        }

        preg_match_all( $pattern, $text, $matches, PREG_OFFSET_CAPTURE );

        // Borrado agresivo de encabezados (insensible a mayúsculas y espacios)
        $text = preg_replace('/Name\s+Description\s+Licence\s+Type\s+File\s+Number\s+(\s*Tbl\s+Number\s*)?Start\s+Date\s+End\s+Date\s+Location/i', '', $text);

        preg_match_all( $pattern, $text, $matches, PREG_OFFSET_CAPTURE );

        if ( empty( $matches[0] ) ) {
            return 0;
        }

        // Limpiar tabla antes de importar
        $wpdb->query( "TRUNCATE TABLE $table_name" );

        $count = 0;
        $last_match_end = 0;

        foreach ( $matches[0] as $i => $full_match ) {
            $current_match_start = $full_match[1];
            
            // Texto entre registros
            $pre_text = substr( $text, $last_match_end, $current_match_start - $last_match_end );
            
            // Extraer datos del match
            $prefix = $matches[1][$i][0];
            $file_num = $matches[2][$i][0];
            $tbl_num = $has_tbl_num ? $matches[3][$i][0] : '';
            $start_date = $has_tbl_num ? $matches[4][$i][0] : $matches[3][$i][0];
            $end_date = $has_tbl_num ? $matches[5][$i][0] : $matches[4][$i][0];

            // Limpieza profunda del nombre y descripción
            $pre_text = trim( $pre_text );
            
            // Eliminar cualquier residuo de encabezados que haya quedado
            $pre_text = preg_replace('/^(Name|Description|Licence|Type|File|Number|Start|Date|End|Location|Tbl)\s+/i', '', $pre_text);
            $pre_text = trim($pre_text);

            $pre_lines = explode( "\n", $pre_text );
            
            // El nombre suele ser la primera parte hasta encontrar un salto de línea o mucha minúscula
            $name = '';
            $description = '';

            if ( count( $pre_lines ) > 0 ) {
                $name = trim( $pre_lines[0] );
                // Si el nombre es muy corto, intentar unir con la siguiente línea (casos de nombres largos)
                if ( strlen($name) < 10 && isset($pre_lines[1]) ) {
                    $name .= ' ' . trim($pre_lines[1]);
                    $description = implode( " ", array_slice( $pre_lines, 2 ) );
                } else {
                    $description = implode( " ", array_slice( $pre_lines, 1 ) );
                }
            }

            // El final del match es donde terminan las fechas
            $match_end = $current_match_start + strlen( $full_match[0] );
            
            // La ubicación
            $next_match_start = isset( $matches[0][$i+1] ) ? $matches[0][$i+1][1] : strlen( $text );
            $post_text = substr( $text, $match_end, $next_match_start - $match_end );
            
            $location = $post_text;
            if ( preg_match( '/Islands/', $post_text, $loc_matches, PREG_OFFSET_CAPTURE ) ) {
                $loc_end = $loc_matches[0][1] + strlen( $loc_matches[0][0] );
                $location = substr( $post_text, 0, $loc_end );
                $last_match_end = $match_end + $loc_end;
            } else {
                // Si no hay "Islands", buscar el siguiente inicio de registro por mayúsculas
                $last_match_end = $next_match_start;
            }

            $wpdb->insert( $table_name, array(
                'name' => trim( $name ),
                'description' => trim( $desc_type ),
                'licence_type' => '', // Combinado en descripción por ahora
                'file_number' => $prefix . ' ' . $file_num,
                'tbl_number' => $tbl_num,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'location' => trim( $location )
            ));

            $count++;
        }

        return $count;
    }

    public function search( $term ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'sots_licenses';
        
        $term = '%' . $wpdb->esc_like( $term ) . '%';
        
        return $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM $table_name 
            WHERE name LIKE %s 
            OR description LIKE %s 
            OR location LIKE %s 
            OR file_number LIKE %s
            OR tbl_number LIKE %s
            LIMIT 10",
            $term, $term, $term, $term, $term
        ));
    }
}
}
