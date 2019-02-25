<?php

/**
 *  @package  Amitasker_Theme
*    ============================
*        Admin Page Function
*    ============================
*
*/
add_action('admin_menu', 'amitasker_admin_page');

function amitasker_admin_page(){
    // Generate Admin menu Options For amitasker
    add_menu_page( 'Amitasker Theme Options', 'Amitasker', 'manage_options', 'amitasker', 'amitasker_general', 'dashicons-schedule', 60);
    //Generate Submenu For General Settings
    add_submenu_page('amitasker', 'General Settings', 'General', 'manage_options','amitasker', 'amitasker_general');
    //Generate Submenu For CSS Settings
    add_submenu_page('amitasker', 'CSS Options', 'Custom CSS', 'manage_options','amitasker_css', 'amitasker_admin_css');

    // activate Custom Settings
    add_action('admin_init', 'amitasker_custom_settings');
}

if(!function_exists('amitasker_custom_settings')) : 
        function amitasker_custom_settings (){
            // we will do it later
        }
    endif;


if(!function_exists('amitasker_general')) : 
    function amitasker_general (){
        require_once(get_template_directory().'/inc/admin/amitasker-admin.php');
    }
endif;

if(!function_exists('amitasker_admin_css')) : 
    function amitasker_admin_css (){
        // something i will tell you later
        echo '<h1>Custom CSS</h1>';
    }
endif;