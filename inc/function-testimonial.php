<?php
// Register Custom Post Type
function Testimonial()
{

    $labels = array(
        'name' => _x('testimonial', 'Post Type General Name', 'amitasker'),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'amitasker'),
        'menu_name' => __('Testimonial', 'amitasker'),
        'name_admin_bar' => __('Testimonial', 'amitasker'),
        'archives' => __('testimonial Archives', 'amitasker'),
        'attributes' => __('testimonial Attributes', 'amitasker'),
        'parent_item_colon' => __('Parent testimonial:', 'amitasker'),
        'all_items' => __('All testimonial', 'amitasker'),
        'add_new_item' => __('Add New testimonial', 'amitasker'),
        'add_new' => __('Add New testimonial', 'amitasker'),
        'new_item' => __('New testimonial', 'amitasker'),
        'edit_item' => __('Edit testimonial', 'amitasker'),
        'update_item' => __('Update testimonial', 'amitasker'),
        'view_item' => __('View testimonial', 'amitasker'),
        'view_items' => __('View testimonials', 'amitasker'),
        'search_items' => __('Search testimonials', 'amitasker'),
        'not_found' => __('No testimonial found', 'amitasker'),
        'not_found_in_trash' => __('No testimonial found in Trash', 'amitasker'),
        'featured_image' => __('Featured Image', 'amitasker'),
        'set_featured_image' => __('Set featured image', 'amitasker'),
        'remove_featured_image' => __('Remove featured image', 'amitasker'),
        'use_featured_image' => __('Use as featured image', 'amitasker'),
        'insert_into_item' => __('Insert into testimonial', 'amitasker'),
        'uploaded_to_this_item' => __('Uploaded to this testimonial', 'amitasker'),
        'items_list' => __('testimonial list', 'amitasker'),
        'items_list_navigation' => __('testimonial list navigation', 'amitasker'),
        'filter_items_list' => __('Filter testimonial list', 'amitasker'),
    );
    $rewrite = array(
        'slug' => 'testimonial',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    );
    $args = array(
        'label' => __('Testimonial', 'amitasker'),
        'description' => __('Clients Testimonial', 'amitasker'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'custom-fields'),
        'taxonomies' => array('testimonial'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-status',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'rewrite' => $rewrite,
        'capability_type' => 'page',
        'show_in_rest' => true,
    );
    register_post_type('testimonial', $args);

}
add_action('init', 'Testimonial', 0);
