<?php

require_once(ABSPATH . "wp-admin/includes/class-wp-list-table.php");

class ImportData extends WP_List_Table
{


    public function prepare_items()
    {
        $datas = $this->list_table_data();
        $this->items = $datas;
        $columns = $this->get_columns();
        $this->_column_headers = array($columns);
        
    }
    public function get_columns()
    {
        $columns = array(
            "ID" => "ID",
            "first_name" => "First Name",
            "last_name" => "Last name",
            "address" => "Address",
            "phone" => "Phone"
        );
        return $columns;
    }

    public function column_default($item, $columns)
    {
        // echo"<pre>";
        print_r($item);
        // print_r($item->ID);
        switch ($columns) {
            case 'ID':
                return $item->ID;
                break;
            case 'first_name':
                return $item->first_name;
                break;
            // case 'last_name':
            //     return $item[$columns];
            //     break;
            // case 'address':
            //     return $item[$columns];
            //     break;
            // case 'phone':
            //     return $item[$columns];
            //     break;
            default:
                return "No List Found Value";
        }
    }

    public function list_table_data()
    {
        global $table_prefix, $wpdb;
        $table = $table_prefix . 'import_data';
        $all_datas = $wpdb->get_results("SELECT * FROM $table");
        return  $all_datas;
    }
}


function data_list_table()
{
    $table = new ImportData();
    $table->prepare_items();
    $table->display();
}
data_list_table();
