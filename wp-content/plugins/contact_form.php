<?php
/*
Plugin Name: Contact Form
Description: This is a simple plugin
Author: Niladri
Version: 1.1.1
Author URI: www.google.com

*/


register_activation_hook(__FILE__,'form_data_activate');
register_deactivation_hook(__FILE__,'form_data_deactivate');

function form_data_activate(){
  global $wpdb;
  global $table_prefix;
  $table=$wpdb->prefix.'form_data';
  $sql="CREATE TABLE {$table} (
    id int(50) NOT NULL,
    name varchar(255) DEFAULT NULL
  )";
  $wpdb->query($sql);
//   $exits=$wpdb->query("select 1 from {$table}");
//   if($exits==true){
//     die();
//   }else{
//     echo "not exists";
//   }

  
  
  
  
}

function form_data_deactivate(){
    global $wpdb;
  global $table_prefix;
  $table=$table_prefix.'form_data';
  $sql="drop table $table";
  $wpdb->query($sql);
}
add_action('admin_menu','form_data_menu');
function form_data_menu(){
    add_menu_page('Form Data','Form Data',8,__FILE__,"form_data_list");

}
add_shortcode( 'form_data_shortcode', 'form_data_list' );
function form_data_list(){
    include('form_data_list.php');
}

?>