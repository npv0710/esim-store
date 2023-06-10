<?php
/**
* Plugin Name: Mapping Esim Store
* Plugin URI: http://esimquocte.vn
* Description: This is the very simple plugin I ever created.
* Version: 1.0
* Author: Cao Bien
* Author URI: http://esimquocte.vn
**/
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Esim Store',
        'Esim Store',
        'manage_options',
        plugin_dir_path(__FILE__) . 'view/table-mapping.php',
        null,
        'dashicons-editor-table',
        20
    );
}
?>
