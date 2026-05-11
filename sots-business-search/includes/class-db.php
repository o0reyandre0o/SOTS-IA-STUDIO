<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

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
        
        // Limpieza global de encabezados repetitivos en todo el PDF (con flag /u para espacios raros y \p{Z} para espacios unicode)
        $headers_regex = '/(?:Name[\p{Z}\s]*Description[\p{Z}\s]*Licence[\p{Z}\s]*Type[\p{Z}\s]*(?:Tbl[\p{Z}\s]*Number[\p{Z}\s]*)?File[\p{Z}\s]*Number[\p{Z}\s]*Start[\p{Z}\s]*Date[\p{Z}\s]*End[\p{Z}\s]*Date[\p{Z}\s]*Location|Tbl Number|File Number|Start Date|End Date)/iu';
        $text = preg_replace($headers_regex, ' ', $text);
        
        // Patrón para capturar File Number y Fechas de forma mucho más permisiva
        // Prefijos (TBR, EXG, etc.): de 2 a 5 letras mayúsculas
        // File Number: alfanumérico, puede contener guiones o barras
        // Tbl Number: solo números o guiones
        // Fechas: 1 o 2 dígitos para día, 3 letras para mes, 2 o 4 dígitos para año
        
        if ( $has_tbl_num ) {
            // Formato con Tbl Number
            $pattern = '/([A-Z]{2,5})\s+([A-Za-z0-9\-\/]+)\s+([0-9\-]+)\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})/';
        } else {
            // Formato estándar
            $pattern = '/([A-Z]{2,5})\s+([A-Za-z0-9\-\/]+)\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})/';
        }

        preg_match_all( $pattern, $text, $matches, PREG_OFFSET_CAPTURE );

        if ( empty( $matches[0] ) ) {
            return 0;
        }

        // Limpiar tabla antes de importar (como solicitó el usuario para actualización mensual)
        $wpdb->query( "TRUNCATE TABLE $table_name" );

        $count = 0;
        $last_match_end = 0;

        foreach ( $matches[0] as $i => $full_match ) {
            $current_match_start = $full_match[1];
            
            // Texto entre el final del registro anterior y el inicio de los números de licencia actuales
            // Aquí suelen estar: Nombre, Descripción y Tipo de Licencia
            $pre_text = substr( $text, $last_match_end, $current_match_start - $last_match_end );
            
            // Extraer datos del match
            $prefix = $matches[1][$i][0];
            $file_num = $matches[2][$i][0];
            $tbl_num = $has_tbl_num ? $matches[3][$i][0] : '';
            $start_date = $has_tbl_num ? $matches[4][$i][0] : $matches[3][$i][0];
            $end_date = $has_tbl_num ? $matches[5][$i][0] : $matches[4][$i][0];

            // Limpieza profunda del nombre y descripción
            $pre_text = trim( $pre_text );
            
            // BORRADO DEFINITIVO DE ENCABEZADOS:
            // Quitamos el ^ para que atrape el bloque de palabras del encabezado aunque haya un caracter invisible (BOM) antes
            $pre_text = preg_replace('/(?:(?:NAME|DESCRIPTION|LICENCE|TYPE|FILE|NUMBER|START|DATE|END|LOCATION|TBL)\s*){5,}/iu', '', $pre_text);
            $pre_text = trim($pre_text);

            $pre_lines = explode( "\n", $pre_text );
            
            // El nombre suele ser la primera parte hasta encontrar un salto de línea o mucha minúscula
            $name = '';
            $description = '';

            if ( count( $pre_lines ) > 0 ) {
                $name = trim( $pre_lines[0] );
                $next_line = isset($pre_lines[1]) ? trim($pre_lines[1]) : '';
                
                // Unir con la siguiente línea si el nombre termina en "&" o si la siguiente línea está en MAYÚSCULAS
                $is_next_line_caps = ($next_line !== '' && strtoupper($next_line) === $next_line && strlen($next_line) > 2);
                $ends_with_ampersand = (substr($name, -1) === '&');

                if ( (strlen($name) < 15 || $is_next_line_caps || $ends_with_ampersand) && $next_line !== '' ) {
                    $name .= ' ' . $next_line;
                    $description = implode( " ", array_slice( $pre_lines, 2 ) );
                } else {
                    $description = implode( " ", array_slice( $pre_lines, 1 ) );
                }
            }

            // El final del match es donde terminan las fechas
            $match_end = $current_match_start + strlen( $full_match[0] );
            
            // La ubicación está DESPUÉS de las fechas, hasta el inicio del siguiente registro
            // o hasta el final de la sección de ubicación típica (que termina en "Islands")
            $next_match_start = isset( $matches[0][$i+1] ) ? $matches[0][$i+1][1] : strlen( $text );
            $post_text = substr( $text, $match_end, $next_match_start - $match_end );
            
            // Buscar "Islands" como fin de ubicación
            $location = $post_text;
            if ( preg_match( '/Islands/', $post_text, $loc_matches, PREG_OFFSET_CAPTURE ) ) {
                $loc_end = $loc_matches[0][1] + strlen( $loc_matches[0][0] );
                $location = substr( $post_text, 0, $loc_end );
                
                // Actualizar last_match_end para que el siguiente registro empiece DESPUÉS de la ubicación
                $last_match_end = $match_end + $loc_end;
            } else {
                $last_match_end = $next_match_start;
            }

            $wpdb->insert( $table_name, array(
                'name' => trim( $name ),
                'description' => trim( $description ),
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
        
        $words = explode(' ', trim($term));
        $conditions = array();
        $values = array();

        foreach ( $words as $word ) {
            $word = trim($word);
            if ( empty($word) ) continue;
            
            $like = '%' . $wpdb->esc_like( $word ) . '%';
            $conditions[] = "(name LIKE %s OR description LIKE %s OR location LIKE %s OR file_number LIKE %s OR tbl_number LIKE %s)";
            // Insertar 5 veces para los 5 %s
            array_push($values, $like, $like, $like, $like, $like);
        }

        if ( empty($conditions) ) return array();

        $where_clause = implode(' AND ', $conditions);
        $query = "SELECT * FROM $table_name WHERE $where_clause LIMIT 20";
        
        return $wpdb->get_results( $wpdb->prepare( $query, $values ) );
    }
}
