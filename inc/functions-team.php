<?php
/**
 *  @package  Amitasker_Theme
 *    ===============================================
 *              Custom Post Type For Team
 *    ================================================
 *
 */

if (!function_exists('team')):
    /**
     * Function For Creating Team Member
     *
     * @return team
     */
    function team()
    {
        $labels = array(
            'name'                  => _x('Team Member', 'Post Type General Name', 'amitasker'),
            'singular_name'         => _x('team-member', 'Post Type Singular Name', 'amitasker'),
            'menu_name'             => _x('Team Member', 'Admin Menu text', 'amitasker'),
            'name_admin_bar'        => _x('Team', 'Add New on Toolbar', 'amitasker'),
            'archives'              => __('Team Archives', 'amitasker'),
            'attributes'            => __('Team Attributes', 'amitasker'),
            'parent_item_colon'     => __('Parent Team:', 'amitasker'),
            'all_items'             => __('All team Member', 'amitasker'),
            'add_new_item'          => __('Add New Team Member', 'amitasker'),
            'add_new'               => __('Add New member', 'amitasker'),
            'new_item'              => __('New Team member', 'amitasker'),
            'edit_item'             => __('Edit Team member', 'amitasker'),
            'update_item'           => __('Update Team member', 'amitasker'),
            'view_item'             => __('View Team member', 'amitasker'),
            'view_items'            => __('View team member', 'amitasker'),
            'search_items'          => __('Search Team member', 'amitasker'),
            'not_found'             => __('Not found', 'amitasker'),
            'not_found_in_trash'    => __('Not found in Trash', 'amitasker'),
            'featured_image'        => __('Featured Image', 'amitasker'),
            'set_featured_image'    => __('Set featured image', 'amitasker'),
            'remove_featured_image' => __('Remove featured image', 'amitasker'),
            'use_featured_image'    => __('Use as featured image', 'amitasker'),
            'insert_into_item'      => __('Insert into Team member', 'amitasker'),
            'uploaded_to_this_item' => __('Uploaded to this Team member', 'amitasker'),
            'items_list'            => __('Member list', 'amitasker'),
            'items_list_navigation' => __('member list navigation', 'amitasker'),
            'filter_items_list'     => __('Filter team member list', 'amitasker'),
        );
        $rewrite = array(
            'slug'          => 'team-member',
            'with_front'    => true,
            'pages'         => true,
            'feeds'         => true,
        );
        $args = array(
            'label'                 => __('Team', 'amitasker'),
            'description'           => __('', 'amitasker'),
            'labels'                => $labels,
            'menu_icon'             => 'dashicons-admin-users',
            'supports'              => array('custom-fields'),
            'taxonomies'            => array('team-member'),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 20,
            'show_in_admin_bar'     => false,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'hierarchical'          => true,
            'exclude_from_search'   => true,
            'show_in_rest'          => true,
            'publicly_queryable'    => false,
            'capability_type'       => 'post',
            'rewrite'               => $rewrite,
        );
        register_post_type('post_type', $args);
    }
    add_action('init', 'team', 0);
endif;
