<?php
require_once('../../../wp-load.php');
global $wpdb;
$table_name = $wpdb->prefix . 'sots_licenses';
$count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
echo "Total in DB: $count\n";

$search = 'JASON WASHINGTON';
$result = $wpdb->get_results("SELECT * FROM $table_name WHERE name LIKE '%$search%'");
echo "Search for $search: " . count($result) . " found.\n";
if (count($result) > 0) {
    echo "Name: " . $result[0]->name . "\n";
}
