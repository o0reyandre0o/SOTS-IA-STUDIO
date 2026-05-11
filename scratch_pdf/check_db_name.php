<?php
require_once('../../../wp-load.php');
global $wpdb;
$table_name = $wpdb->prefix . 'sots_licenses';
$result = $wpdb->get_results("SELECT * FROM $table_name WHERE name LIKE '%A & M LTD%'");
if (count($result) > 0) {
    echo "ID: " . $result[0]->id . "\n";
    echo "NAME: " . $result[0]->name . "\n";
    echo "DESCRIPTION: " . $result[0]->description . "\n";
} else {
    echo "No encontrado.";
}
