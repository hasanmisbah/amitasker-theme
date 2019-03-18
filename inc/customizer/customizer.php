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
            'title' => 'Amitasker Home Page Settings',
            'description' => 'This is panel Description',
            'priority' => 10,
        ));
        /**
         * Registering Home Section
        */
        $amitasker_customizer->add_section('home-section', array(
            'title'     => 'Home Section',
            'capability'  => 'edit_theme_options',
            'priority'  => 10,
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
        /**
         * About Sections Social ICONS And Logo Settings
         */
        $social_data = array(
            'facebook_icon' => 'facebook user name',
            'twitter_icon' => 'twitter user name',
            'instagram_icon' => 'instagram user name'
        );
        foreach ($social_data as $key => $value) :
            $amitasker_customizer->add_setting($key, array(
                'default'   => 'amitasker',
                'transport' => 'refresh'
            ));
            $amitasker_customizer->add_control($key, array(
                'section'   => 'about-section',
                'label'     => $value,
                'type'      => 'text'
            ));  
        endforeach;

        $amitasker_customizer->add_section('company-stats', array(
            'title'     => 'Company Stats',
            'capability'  => 'edit_theme_options',
            'priority'  => 30,
            'panel'=>'home_panel'
        ));

        $company_stats = array(
            'clients_counts'    => 'Your Happy Clients',
            'project_counts'    => 'Your Running Project',
            'project_complete'  => 'Your Completed Project',
            'project_success'   => 'Your Success Rate'
        );

        foreach ($company_stats as $key => $value) :
             $amitasker_customizer->add_setting($key, array(
                'default'   => '5',
                'transport' => 'refresh'
            ));
            $amitasker_customizer->add_control($key, array(
                'section'   => 'company-stats',
                'label'     => $value,
                'type'      => 'number'
            ));
        endforeach;

        /**
         * Services Sections
        */
        $amitasker_customizer->add_section('services-section', array(
            'title'     => 'Services Sections',
            'capability'  => 'edit_theme_options',
            'priority'  => 40,
            'panel'=>'home_panel'
        ));

        $amitasker_customizer->add_setting('services_left_images', array(
            'default'   => '',
            'transport' => 'refresh'
        ));
        $amitasker_customizer->add_control(
            new WP_Customize_Image_Control($amitasker_customizer, 'services_left_images', array(
                'section' => 'services-section',
                'label'     => 'Services Left Images Here',
                'settings' => 'services_left_images'
            ))
        );
        /**
         * Services Icon
        */
        $services = array(
            'services_1' => 'Services 1',
            'services_2' => 'Services 2',
            'services_3' => 'Services 3',
            'services_4' => 'Services 4',
            'services_5' => 'Services 5',
            'services_6' => 'Services 6'
        );
        foreach ($services as $key => $value) :

            $amitasker_customizer->add_setting($key.'_icon', array(
                'default' => '',
                'transport' => 'refresh'
            ));
            $amitasker_customizer->add_control($key.'_icon', array(
                'section'   => 'services-section',
                'label'     => $value.' icon',
                'type'      => 'text'
            ));

            $amitasker_customizer->add_setting($key.'_text', array(
                'default' => '',
                'transport' => 'refresh'
            ));
            $amitasker_customizer->add_control($key.'_text', array(
                'section'   => 'services-section',
                'label'     => $value.' text',
                'type'      => 'text'
            ));
        endforeach;
        /**
         * CTA Section
         */
        $amitasker_customizer->add_section('cta-section', array(
            'title'     => 'Call To Action',
            'capability'  => 'edit_theme_options',
            'priority'  => 40,
            'panel'=>'home_panel'
        ));
        $cta_sections = array(
            'cta_heading' => 'Call To Action Heading',
            'cta_sub_heading' => 'Call To Action sub-Heading',
            'cta_btn_text' => 'Call To Action Button Text',
            'cta_btn_link' => 'Call To Action Button Link',
        );
        foreach ($cta_sections as $key => $value) :
            $amitasker_customizer->add_setting($key.'_text', array(
                'default' => '',
                'transport' => 'refresh'
            ));
            $amitasker_customizer->add_control($key.'_text', array(
                'section'   => 'cta-section',
                'label'     => $value,
                'type'      => ($key == 'cta_btn_link'? 'url' : 'text')
            ));
        endforeach;
        $amitasker_customizer->add_section('skill-section', array(
            'title' => 'Skill Section',
            'capability' => 'edit_theme_options',
            'priority'  => 50,
            'panel'     => 'home_panel'
        ));

        $amitasker_customizer->add_setting('team_left_images', array(
            'default'   => '',
            'transport' => 'refresh'
        ));
        $amitasker_customizer->add_control(
            new WP_Customize_Image_Control($amitasker_customizer, 'team_left_images', array(
                'section' => 'skill-section',
                'label'     => 'Skill Left Images Here',
                'settings' => 'team_left_images'
            ))
        );

        $team_section = array(
            'skill_1' => 'Skill 1',
            'skill_2' => 'Skill 2',
            'skill_3' => 'Skill 3',
            'skill_4' => 'Skill 4',
        );
        foreach ($team_section as $key => $value) {

            $amitasker_customizer->add_setting($key.'_name', array(
               'default'    => '',
               'transport'  => 'refresh' 
            ));
            $amitasker_customizer->add_control($key.'_name', array(
                'section'   => 'skill-section',
                'label'     => $value.' Name',
                'type'      => 'text'
            ));

            $amitasker_customizer->add_setting($key.'_value', array(
               'default'    => '',
               'transport'  => 'refresh' 
            ));
            $amitasker_customizer->add_control($key.'_value', array(
                'section'   => 'skill-section',
                'label'     => $value.' Percentage',
                'type'      => 'number'
            ));
        }

    }
endif;
add_action('customize_register', 'amitasker_customizer');