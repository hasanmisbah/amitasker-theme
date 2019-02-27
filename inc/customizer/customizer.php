<?php


if(!function_exists('amitasker_customizer')) :

    function amitasker_customizer($amitasker_customizer){
        /**
         * Register Custom Panel
         * 
         * @param amitasker_customizer $amitasker_customizer
         * @return array
         * 
         * 
        */
        add_action('customize_register', 'home_panel');
        /**
         * Register Custom Panel
         * 
         * @param home_panel
         * @return home_panel
         * 
         * 
        */
        $amitasker_customizer->add_panel('home_panel', array(
            'title' => 'Home Page Settings',
            'description' => 'This is panel Description',
            'priority' => 10,
        ));
        /**
         * Registering Home Section
        */
        $amitasker_customizer->add_section('home-section', array(
            'title'     => 'Home Section',
            'capability'  => 'edit_theme_options',
            'priority'  => 20,
            'panel'=>'home_panel'
        ));
        /**
         * Home Page Hero Text Setting
         */
        $amitasker_customizer->add_setting('hero_text', array(
            'type' => 'theme_mod',
            'default'   => 'Leveling up your Digital Marketing',
            'transport' => 'refresh'
        ));
        /**
         * Home Page Hero Text Control
         */
        $amitasker_customizer->add_control('hero_text', array(
            'section'   => 'home-section',
            'label'     => 'Add Your Hero Text',
            'type'      => 'text'
        ));
        /**
         * Home Page Hero sub Text Setting
         */
         $amitasker_customizer->add_setting('hero_subtext', array(
            'default'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'transport' => 'refresh'
        ));
        /**
         * Home Page Hero sub Text control
         */
        $amitasker_customizer->add_control('hero_subtext', array(
            'section'   => 'home-section',
            'label'     => 'Add Your sub Text',
            'type'      => 'text'
        ));
        /**
         * Home Page Hero Link Setting
         */
        
        $amitasker_customizer->add_setting('hero_link', array(
            'default'   => '',
            'transport' => 'refresh'
        ));

        $amitasker_customizer->add_control('hero_link', array(
            'section'   => 'home-section',
            'label'     => 'Add Button Link',
            'type'      => 'url'
        ));

        $amitasker_customizer->add_setting('hero_btn', array(
            'default'   => '',
            'transport' => 'refresh'
        ));

        $amitasker_customizer->add_control('hero_btn', array(
            'section'   => 'home-section',
            'label'     => 'Button Text Here',
            'type'      => 'text'
        ));

        $amitasker_customizer->add_setting('hero_images', array(
            'default'   => get_template_directory_uri().'/assets/img/social-media-marketing.png',
            'transport' => 'refresh'
        ));

        $amitasker_customizer->add_control(
            new WP_Customize_Image_Control($amitasker_customizer, 'hero_images', array(
                'section' => 'home-section',
                'label'     => 'Hero Images Here',
                'settings' => 'hero_images'
            ))
        );

        /**
         * Registering About Section
        */
        $amitasker_customizer->add_section('about-section', array(
            'title'     => 'About Section',
            'capability'  => 'edit_theme_options',
            'priority'  => 20,
            'panel'=>'home_panel'
        ));
        /**
         * Home Page Hero Text Setting
         */
        $amitasker_customizer->add_setting('about_images', array(
            'type'      => 'theme_mod',
            'default'   => '',
            'transport' => 'refresh'
        ));
        /**
         *  about sections Hero Text Control
         */
        $amitasker_customizer->add_control(
            new WP_Customize_Image_Control($amitasker_customizer, 'about_images', array(
                'section' => 'about-section',
                'label'     => 'About Images Here',
                'settings' => 'about_images'
            ))
        );
        /**
         * About text Setting
         */
         $amitasker_customizer->add_setting('about_text', array(
            'default'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'transport' => 'refresh'
        ));
        /**
         * About text
         */
        $amitasker_customizer->add_control('about_text', array(
            'section'   => 'about-section',
            'label'     => 'Add Your About Text Here',
            'type'      => 'textarea'
        ));



    }
endif;
add_action('customize_register', 'amitasker_customizer');