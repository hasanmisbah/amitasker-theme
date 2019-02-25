<?php
/**
 *  @package  Amitasker_Theme
 *    ============================
 *        Footer 4 Collumn widgets
 *    ============================
 *
 */

//registering Sidebar
if (!function_exists('Footer_widgets')):
    /**
     * Register Widgets
     *
     * @return Footer_widgets
     */
    function Footer_widgets()
{
        $sidebars = array(
            'footer-1' => 'Footer top widget 1',
            'footer-2' => 'Footer top widget 2',
            'footer-3' => 'Footer top widget 3',
            'footer-4' => 'Footer top widget 4',
        );

        foreach ($sidebars as $id => $sidebar):
            register_sidebar(
                array(
                    'name' => __($sidebar, 'amitasker'),
                    'id' => $id,
                    'descriptions' => __($sidebar, 'amitasker'),
                    'before_widget' => '<div id="%1$s" class="footer-content">',
                    'after_widget' => '</div>',
                    'before_title' => '<h4 class="footer-title">',
                    'after_title' => '</h4>',

                )
            );
        endforeach;
    }
endif;
    