<?php
// Register Custom Post Type
function Client_slider()
{

    $labels = array(
        'name' => _x('slider', 'Post Type General Name', 'amitasker'),
        'singular_name' => _x('Slider', 'Post Type Singular Name', 'amitasker'),
        'menu_name' => __('Slider', 'amitasker'),
        'name_admin_bar' => __('Slider', 'amitasker'),
        'archives' => __('Slider Archives', 'amitasker'),
        'attributes' => __('Slider Attributes', 'amitasker'),
        'parent_item_colon' => __('Parent Slide:', 'amitasker'),
        'all_items' => __('All Slider', 'amitasker'),
        'add_new_item' => __('Add New Slide', 'amitasker'),
        'add_new' => __('Add New', 'amitasker'),
        'new_item' => __('New Slide', 'amitasker'),
        'edit_item' => __('Edit Slide', 'amitasker'),
        'update_item' => __('Update Slide', 'amitasker'),
        'view_item' => __('View Slide', 'amitasker'),
        'view_items' => __('View Slide', 'amitasker'),
        'search_items' => __('Search Slide', 'amitasker'),
        'not_found' => __('Not found', 'amitasker'),
        'not_found_in_trash' => __('Not found in Trash', 'amitasker'),
        'featured_image' => __('Featured Image', 'amitasker'),
        'set_featured_image' => __('Set featured image', 'amitasker'),
        'remove_featured_image' => __('Remove featured image', 'amitasker'),
        'use_featured_image' => __('Use as featured image', 'amitasker'),
        'insert_into_item' => __('Insert into Slide', 'amitasker'),
        'uploaded_to_this_item' => __('Uploaded to this Slide', 'amitasker'),
        'items_list' => __('Slider list', 'amitasker'),
        'items_list_navigation' => __('Slide list navigation', 'amitasker'),
        'filter_items_list' => __('Filter Slider list', 'amitasker'),
    );
    $rewrite = array(
        'slug' => 'client',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    );
    $args = array(
        'label' => __('Slider', 'amitasker'),
        'description' => __('Client Slider', 'amitasker'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('slider'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'rewrite' => $rewrite,
        'capability_type' => 'page',
    );
    register_post_type('slider', $args);

}
add_action('init', 'Client_slider', 0);
