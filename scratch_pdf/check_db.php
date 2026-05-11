<?php
require_once('../../../wp-load.php');
global $wpdb;
$table_name = $wpdb->prefix . 'sots_licenses';
$results = $wpdb->get_results("SELECT * FROM $table_name WHERE name LIKE '%ACE ENGINEERING%' OR description LIKE '%ACE ENGINEERING%'");
echo json_encode($results, JSON_PRETTY_PRINT);
