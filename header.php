<?php
/**
* Header template 
*
* @package WordPress
* @subpackage Amitasker
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbarResponsive" <?php body_class(); ?>>

    <!-- start Main navigation -->
    <header id="header">
        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Amitasker</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">about</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#packages" class="nav-link">Packages</a></li>
                        <li class="nav-item"><a href="#team" class="nav-link">Our Team</a></li>
                        <li class="nav-item"><a href="#testimonial" class="nav-link">TESTIMONIAL</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end main navigation -->

    <main id="main-content-area ">