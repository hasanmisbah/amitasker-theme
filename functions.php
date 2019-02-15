<?php

/**
* Functions File
*
* @package WordPress
* @subpackage Amitasker
*/

require_once 'inc/functions.php';
add_action( 'after_setup_theme', 'amitasker_setup'); 

if(!function_exists('amitasker_setup')) :
    function amitasker_setup(){
        // Theme CSS And JS File Loading
        add_action( 'wp_enqueue_scripts', 'amitasker_scripts' );
        // Adding Script Attribute for fontawesome
        add_filter( 'script_loader_tag', 'script_data');
    }
endif;




function script_data( $tag, $handle, $src ) {
    if ( 'fontawesome' === $handle ) {
        $tag = '<script type="text/javascript" src="' . esc_url( $src ) . '"data-auto-replace-svg="nest"></script>';
    }
 
    return $tag;
}
require_once 'lib/options.php';