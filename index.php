<?php

/*
* Plugin Name: Wp_Import_data
* Description: Test.
* Author: Ajay

*/


add_action('admin_menu', 'wp_import_data_menu');

function wp_import_data_menu()

{
    add_menu_page(
        'Wp Import Data', //page_title.
        'Wp Import Data', //menu_title.
        'manage_options', //capability.
        'wp-import-data', //menu_slug.
        'add_new_fn', //callback function.
        'dashicons-buddicons-buddypress-logo', //dashicon.
        2 //position.

    );
    add_submenu_page(
        'wp-import-data', //parent_slug
        'Add New', //page_title
        'Add New', //menu_title
        'manage_options', //capability
        'wp-import-data', //menu_slug
        'add_new_fn', //callback 
    );
    add_submenu_page(
        'wp-import-data', //parent_slug
        'Add Students', //page_title
        'Add Students', //menu_title
        'manage_options', //capability
        'all-student', //menu_slug
        'add_new_fn2', //callback 
    );
}
function add_new_fn()
{
    ob_start();
    include plugin_dir_path(__FILE__) . 'views/wp_import_data.php';
    $templete = ob_get_contents();
    ob_end_clean();
    echo $templete;
}

function add_new_fn2()
{
    ob_start();
    include plugin_dir_path(__FILE__) . 'views/add_students.php';
    $templete = ob_get_contents();
    ob_end_clean();
    echo $templete;
}

// function add_theme_scripts()
// {
//     wp_enqueue_style('bootstrap-min', plugin_dir_url(__FILE__) . 'assets/css/bootstrap.min.css', array(), '3.4.2',false);
//     wp_enqueue_script('jquery', plugin_dir_url(__FILE__) . 'assets/js/bootstrap.min.js', array(), '3.1.0');
//     wp_enqueue_script('jquery2', plugin_dir_url(__FILE__) . 'assets/js/jquery-3.2.1.slim.min.js', array(), '3.2.1');
//     wp_enqueue_script('jquery-3', plugin_dir_url(__FILE__) . 'assets/js/popper.min.js', array(), '3.1.2');
// }
// add_action('admin_enqueue_scripts', 'add_theme_scripts');


// add_action('wp_ajax_contact_us', 'ajax_contact_us');

// function ajax_contact_us(){
//     wp_send_json_success("test");
// }