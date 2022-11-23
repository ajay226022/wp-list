<?php
global $wpdb;
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];


$wpdb->insert(
    'wp_import_data',
     array(
    'name' => 'Kumkum',
    'email' => 'kumkum@gmail.com',
    'phone' => '3456734567' 
     )),

?>