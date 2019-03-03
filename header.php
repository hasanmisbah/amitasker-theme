<?php
/**
* Header template 
*
* @package Amitasker
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> || <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbarResponsive" <?php body_class(); ?>>

    <!-- start Main navigation -->
    <header id="header">
        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2,
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class'      => 'nav navbar-nav ml-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker()
                        ) );
                    ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- end main navigation -->
    <main id="main-content-area ">