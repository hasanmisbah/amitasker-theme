<?php
/**
 *  @package  Amitasker_Theme
 *    ===============================================
 *    Css and Javascript File Registering and Calling
 *    ================================================
 *
 */
if (!function_exists('Amitasker_scripts')):
    /**
     * Register Stylesheet And Scripts
     *
     * @return Amitasker_scripts
     */
    function Amitasker_scripts()
    {
        // Register All Stylesheet
        wp_register_style('lato', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), '1.0', 'all');
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
        wp_register_style('fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/all.min.css', array(), '1.0', 'all');
        wp_register_style('linearicons', get_template_directory_uri() . '/assets/vendor/linearicons/style.css', array(), '1.0', 'all');
        wp_register_style('hover', get_template_directory_uri() . '/assets/vendor/hover/css/hover-min.css', array(), '1.0', 'all');
        wp_register_style('slick', get_template_directory_uri() . '/assets/vendor/slick-1.8.1/slick/slick.css', array(), '1.0', 'all');
        wp_register_style('slick-theme', get_template_directory_uri() . '/assets/vendor/slick-1.8.1/slick/slick-theme.css', array(), '1.0', 'all');
        wp_register_style('main', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0', 'all');
        wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', 'all');
        //enqueue All StyleSheet
        wp_enqueue_style('lato');
        wp_enqueue_style('style');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('fontawesome');
        wp_enqueue_style('linearicons');
        wp_enqueue_style('hover');
        wp_enqueue_style('slick');
        wp_enqueue_style('slick-theme');
        wp_enqueue_style('main');
        /* Javascript File Loading */
        /*
        First of all we De-register jquery Backdated Version And Then Add latest Version
         */
        // use local modernizr Version
        wp_deregister_script('modernizr');
        wp_register_script('modernizr', get_template_directory_uri() . "/assets/vendor/modernizr/modernizr.min.js", array(), '3.1.1', true);
        // use local jQuery Version
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . "/assets/vendor/jquery/jquery-3.3.1.min.js", array(), '3.1.1', true);
        // Jquery Migrate
        wp_deregister_script('jquery-migrate');
        wp_register_script('jquery-migrate', get_template_directory_uri() . "/assets/vendor/jquery/jquery-migrate-3.0.0.min.js", array('jquery'), '3.1.1', true);
        // Register All Scripts
        wp_register_script('prefixfree', get_template_directory_uri() . '/assets/vendor/prefixfree/prefixfree.min.js', array(), '1.0', true);
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
        wp_register_script('fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/js/all.min.js', array(), '1.0', true);
        wp_register_script('waypoint', get_template_directory_uri() . '/assets/vendor/waypoint/lib/jquery.waypoints.min.js', array('jquery'), '1.0', true);
        wp_register_script('counterup', get_template_directory_uri() . '/assets/vendor/counterup/jquery.counterup.min.js', array('jquery', 'waypoint'), '1.0', true);
        wp_register_script('raphael', get_template_directory_uri() . '/assets/vendor/raphael/raphael.min.js', array(), '1.0', true);
        wp_register_script('slick', get_template_directory_uri() . '/assets/vendor/slick-1.8.1/slick/slick.min.js', array('jquery'), '1.0', true);
        wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick'), '1.0', true);
        //enqueue All Scripts
        wp_enqueue_script('modernizr');
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate');
        wp_enqueue_script('prefixfree');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('fontawesome');
        wp_enqueue_script('waypoint');
        wp_enqueue_script('counterup');
        wp_enqueue_script('raphael');
        wp_enqueue_script('slick');
        wp_enqueue_script('main');
    }
endif;
if (!function_exists('script_data')):
    /**
     * Adding data tag in fontawesome dcript
     *
     * @param tag    $tag    script
     * @param handle $handle fontawesome
     * @param src    $src    data-auto-replace-svg="nest"
     *
     * @return Void
     */
    function Script_data($tag, $handle, $src)
    {
        if ('fontawesome' === $handle) {
            $tag = '<script type="text/javascript" src="' . esc_url($src) . '" data-auto-replace-svg="nest"></script>';
        }
        return $tag;
    }
endif;
