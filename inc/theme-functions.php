<?php
/**
 * theme-Functions.php
 *
 * @category   Template
 * @package    Amitasker_Theme
 * @author     Hasan Misbah <hasanmisbah01@gmail.com>
 * @license    https://choosealicense.com/licenses/mit/ MIT Lisence
 * @link       https: //github.com/hasanmisbah/amitasker-theme
 * @since      1.0.0
 *
 * @wordpress-theme
 * Theme Name: Amitasker
 * Description: My custom plugin.
 * Version:     1.0.0
 * Author:      Hasan Misbah
 * Text Domain: amitasker
 * License:     MIT
 * License URI: https: //choosealicense.com/licenses/mit/
 */

// apply functions after activating Theme.
add_action( 'after_setup_theme', 'Amitasker_setup' );

// load footer widgets functions File
    require_once get_template_directory().'/inc/functions-footer-widget.php';
    require_once get_template_directory().'/inc/functions-script.php';
    require_once get_template_directory().'/inc/functions-team.php';
    require_once get_template_directory().'/inc/function-services.php';
    require_once get_template_directory().'/inc/customizer/customizer.php';
   // require_once get_template_directory().'/lib/kirki/kirki.php';

if (!function_exists( 'Amitasker_setup')) :
    /**
     * Hooks To Activate After Theme Setup
     * 
     * @return amitasker_scripts,script_data,footer_widgets
     */
    function Amitasker_setup()
    {
        // Theme CSS And JS File Loading
        add_action('wp_enqueue_scripts', 'amitasker_scripts');
        // Adding Script Attribute for fontawesome
        add_filter('script_loader_tag', 'script_data', 10, 5);
        // Registering Sidebar
        add_action('widgets_init', 'footer_widgets');
        // disable Gutenberg for posts
        add_filter('use_block_editor_for_post', '__return_false', 10);
        // disable Gutenberg for post types
        add_filter('use_block_editor_for_post_type', '__return_false', 10);
    }
endif;

if (!function_exists('amitasker')) :
    /**
     * Hooks To Activate After Theme Setup
     *
     * @return void
     */
    function amitasker()
    {
        load_theme_textdomain('amitasker', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        // Image size for single posts
        //add_image_size('single-post-thumbnail', 590, 180);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
            )
        );
    }
endif;
