<?php

    /*
* Plugin Name: Wp_Import_data
* Description: Test.
* Author: Ajay

*/

    // if(isset($_GET['page']) && $_GET['page'] == 'wp-list-table' && isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    //     global $wpdb;
    //     $query = $wpdb->delete('wp_list_table', array('ID' => $_GET['id']));
    // }

    add_action('admin_menu', 'wp_import_data_menu');

    function wp_import_data_menu()

    {
        add_menu_page(
            'Wp Import Data', //page_title.
            'Wp Import Data', //menu_title.
            'manage_options', //capability.
            'wp-import-data', //menu_slug. 
            'wp_import_data_fn', //callback function.
            'dashicons-tickets-alt', //dashicon.
            2 //position.

        );
    }
    function wp_import_data_fn()
    {
        // $action = isset($_GET['action']) ? trim($_GET['action'])  : "";

        // if ($action == "wp-edit") {

        //     $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : "";


        // } else {
        ob_start();
        include plugin_dir_path(__FILE__) . 'views/wp_import_data.php';
        $templete = ob_get_contents();
        ob_end_clean();
        echo $templete;

        //  
    }
    // }
    // function wp_enqueue_admin_script($hook)
    // {

    //     wp_enqueue_script('wlt_backend', plugin_dir_url(__FILE__) . 'assets/js/wlt_backend.js', array(), '0.1');
    //     wp_enqueue_script('jquery-slim.min.js', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), '3.2.1');
    //     wp_enqueue_script('popper-min', "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js", array(), '3.2.0');
    //     wp_enqueue_script('bootstrap-min', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js", array(), '3.2.0');

    //     wp_enqueue_style('wlt-backend', plugin_dir_url(__FILE__) . 'assets/css/wlt_backend.css', array());
    //     wp_enqueue_style('bootstrap-min', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css", array(), '3.4.1');
    // }

    // add_action('admin_enqueue_scripts', 'wp_enqueue_admin_script');

//     add_action('in_admin_footer', 'wp_create_edit_popup');

//     function wp_create_edit_popup()
//     {
//         add_thickbox();
//    

//         if (is_network_admin()) {
//             add_action('admin_head', '_thickbox_path_admin_subfolder');
//         }
//     }
