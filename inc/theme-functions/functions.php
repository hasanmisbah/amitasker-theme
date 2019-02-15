<?php
    if(!function_exists(amitasker)) :

        function amitasker(){
            load_theme_textdomain( 'amitasker', get_template_directory() . '/languages' );
             // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );
            /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded  tag in the document head, and expect WordPress to
            * provide it for us.
            */
            add_theme_support( 'title-tag' );
            /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
            */
            add_theme_support( 'post-thumbnails' );

            /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
            add_theme_support( 'html5', array(
                'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
            ) );


        }
    endif;