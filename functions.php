<?php

/**
 * Functions File
 *
 * @package WordPress
 * @subpackage Amitasker
 */

add_action('after_setup_theme', 'amitasker_setup');

if (!function_exists('amitasker_setup')):
    function amitasker_setup()
{

        // Theme CSS And JS File Loading
        add_action('wp_enqueue_scripts', 'amitasker_scripts');

        // Adding Script Attribute for fontawesome
        add_filter('script_loader_tag', 'script_data', 10, 5);

        // Registering Sidebar
        add_action('widgets_init', 'footer_widgets');
    }
endif;

if (!function_exists('amitasker')):

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
        add_image_size('single-post-thumbnail', 590, 180);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

    }
endif;

if (!function_exists('amitasker_scripts')):

    function amitasker_scripts()
{

        /*
        Stylesheet
         */
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

//adding attribute on Fontawesome Scripts
if (!function_exists('script_data')):

    function script_data($tag, $handle, $src)
{
        if ('fontawesome' === $handle) {
            $tag = '<script type="text/javascript" src="' . esc_url($src) . '"data-auto-replace-svg="nest"></script>';
        }

        return $tag;
    }
endif;

//registering Sidebar
if (!function_exists('footer_widgets')):
    function footer_widgets()
{
        $sidebars = array(
            'footer-1' => 'Footer top widget 1',
            'footer-2' => 'Footer top widget 2',
            'footer-3' => 'Footer top widget 3',
            'footer-4' => 'Footer top widget 4',
        );

        foreach ($sidebars as $id => $sidebar):
            register_sidebar(array(
                'name' => __($sidebar, 'amitasker'),
                'id' => $id,
                'descriptions' => __($sidebar, 'amitasker'),
                'before_widget' => '<div id="%1$s" class="footer-content">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="footer-title">',
                'after_title' => '</h4>'

            ));
        endforeach;
    }
endif;

// Register Custom Post Type
if (!function_exists('Team')):
    function Team()
{

        $labels = array(
            'name' => _x('Team Member', 'Post Type General Name', 'amitasker'),
            'singular_name' => _x('team-member', 'Post Type Singular Name', 'amitasker'),
            'menu_name' => _x('team Member', 'Admin Menu text', 'amitasker'),
            'name_admin_bar' => _x('Team', 'Add New on Toolbar', 'amitasker'),
            'archives' => __('Team Archives', 'amitasker'),
            'attributes' => __('Team Attributes', 'amitasker'),
            'parent_item_colon' => __('Parent Team:', 'amitasker'),
            'all_items' => __('All team Member', 'amitasker'),
            'add_new_item' => __('Add New Team Member', 'amitasker'),
            'add_new' => __('Add New member', 'amitasker'),
            'new_item' => __('New Team member', 'amitasker'),
            'edit_item' => __('Edit Team member', 'amitasker'),
            'update_item' => __('Update Team member', 'amitasker'),
            'view_item' => __('View Team member', 'amitasker'),
            'view_items' => __('View team member', 'amitasker'),
            'search_items' => __('Search Team member', 'amitasker'),
            'not_found' => __('Not found', 'amitasker'),
            'not_found_in_trash' => __('Not found in Trash', 'amitasker'),
            'featured_image' => __('Featured Image', 'amitasker'),
            'set_featured_image' => __('Set featured image', 'amitasker'),
            'remove_featured_image' => __('Remove featured image', 'amitasker'),
            'use_featured_image' => __('Use as featured image', 'amitasker'),
            'insert_into_item' => __('Insert into Team member', 'amitasker'),
            'uploaded_to_this_item' => __('Uploaded to this Team member', 'amitasker'),
            'items_list' => __('Member list', 'amitasker'),
            'items_list_navigation' => __('member list navigation', 'amitasker'),
            'filter_items_list' => __('Filter team member list', 'amitasker'),
        );
        $rewrite = array(
            'slug' => 'team-member',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );
        $args = array(
            'label' => __('Team', 'amitasker'),
            'description' => __('', 'amitasker'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-admin-users',
            'supports' => array('title', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('team-member'),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'exclude_from_search' => true,
            'show_in_rest' => true,
            'publicly_queryable' => false,
            'capability_type' => 'post',
            'rewrite' => $rewrite,
        );

        register_post_type('post_type', $args);

    }
    add_action('init', 'Team', 0);

    // disable Gutenberg
    // disable for posts
    add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
    add_filter('use_block_editor_for_post_type', '__return_false', 10);

endif;
