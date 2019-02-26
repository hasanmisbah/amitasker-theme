<?php 

add_action('init', 'Services', 0);

if(!function_exists('Services')) :
// Register Custom Post Type
    function Services(){
        $labels = array(
            'name'                  => _x('Services', 'Post Type General Name', 'amitasker'),
            'singular_name'         => _x('service', 'Post Type Singular Name', 'amitasker'),
            'menu_name'             => __('Services', 'amitasker'),
            'name_admin_bar'        => __('Services', 'amitasker'),
            'archives'              => __('Service Archives', 'amitasker'),
            'attributes'            => __('Service Attributes', 'amitasker'),
            'parent_item_colon'     => __('Parent Service:', 'amitasker'),
            'all_items'             => __('All Services', 'amitasker'),
            'add_new_item'          => __('Add New Services', 'amitasker'),
            'add_new'               => __('Add New Service', 'amitasker'),
            'new_item'              => __('New Service', 'amitasker'),
            'edit_item'             => __('Edit Service', 'amitasker'),
            'update_item'           => __('Update Service', 'amitasker'),
            'view_item'             => __('View Service', 'amitasker'),
            'view_items'            => __('View Services', 'amitasker'),
            'search_items'          => __('Search Service', 'amitasker'),
            'not_found'             => __('Not found', 'amitasker'),
            'not_found_in_trash'    => __('Not found in Trash', 'amitasker'),
            'featured_image'        => __('Featured Image', 'amitasker'),
            'set_featured_image'    => __('Set featured image', 'amitasker'),
            'remove_featured_image' => __('Remove featured image', 'amitasker'),
            'use_featured_image'    => __('Use as featured image', 'amitasker'),
            'insert_into_item'      => __('Insert into Service', 'amitasker'),
            'uploaded_to_this_item' => __('Uploaded to this Service', 'amitasker'),
            'items_list'            => __('Service list', 'amitasker'),
            'items_list_navigation' => __('Service list navigation', 'amitasker'),
            'filter_items_list'     => __('Filter Services list', 'amitasker'),
        );
        $args = array(
            'label'                 => __('service', 'amitasker'),
            'description'           => __('Services Details', 'amitasker'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies'            => array('service'),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-editor-justify',
            'show_in_admin_bar'     => false,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => '',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type('Service', $args);
    }
endif;
