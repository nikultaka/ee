<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/> -->
        <meta name="description" content="Essential Elegance Inc">
        <meta name="keywords" content="Essential Elegance Inc">
        <meta name="author" content="Essential Elegance Inc">
        <title>Essential Elegance Inc</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/ee-favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/ee.css">
        <!--[if IE 9]>
          <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->

        <!--[if gte IE 9]>
        
            .gradient {
               filter: none;
            }

        <![endif]-->

        <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->



    </head>
    <body>

        <header class="layer-100 over-hidden">

            <!-- Navigation -->
            <nav class="navbar fixed-top" id="mainNav">

                <div class="container-fluid">

                    <div class="row">
                        <div class="logo navbar-brand">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img class="img-responsive" alt="Essential Elegance Inc" src="<?php echo get_theme_mod( 'm1_logo' ); ?>">
                            </a>
                        </div>

                        <div class="top-bar-info">

                            <!-- <div class="social">
                                            <ul>
                                                    <li><a href="#"><i class="ee-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ee-twitter"></i></a></li>
                                                    <li><a href="#"><i class="ee-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="ee-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="ee-instagram"></i></a></li>
                                                    <li><a href="#"><i class="ee-houzz"></i></a></li>
                                            </ul>
                                    </div> -->

                            <div class="info-box">
                                <ul>
                                    <li>
                                        <i class="ee-mobile"></i>
                                       <?php echo get_site_option( 'wcp_contact_number' ); ?>  /  <?php echo get_site_option( 'wcp_office_number' ); ?>
                                    </li>
                                    <li>
                                        <i class="ee-email"></i>
                                        <a href="mailto:<?php echo get_site_option( 'wcp_email' );?>"><?php echo get_site_option( 'wcp_email' );?></a>
                                    </li>
<!--                                    info@eeleganceinc.com-->
                                </ul>
                            </div>

                            <div class="side-menu">

                                <a class="header-menu-toggle" href="#">
                                    <i class="ee-menu"></i>	
                                </a>

                                <!-- <div class="side-bar">
                                        
                                </div> -->

                                <div class="header-nav">

                                    <div class="side-bar">
                                        <a href="#0" class="header-nav__close" title="close"><i class="ee-close"></i></a>

                                        <div class="header-nav__content">


                                            <ul class="sub-menu">
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'my-custom-menu',
                                                    'container_class' => 'custom-menu-class'));
                                                ?>
                                                <!--						                    <li><a href="index.html" title="home">Home</a></li>
                                                                                                                    <li><a href="#" title="Portfolio">Portfolio</a></li>
                                                                                                                    <li><a href="about.html" title="about us">About Us</a></li>
                                                                                                                    <li><a href="#" title="testimonials">Testimonials</a></li>
                                                                                                                    <li><a href="#" title="contact">Contact</a></li>-->
                                            </ul>

                                            <div class="sub-menu-box">

                                                <div class="sub-social">
                                                    <ul>
                                                        <li><a href="<?php echo get_site_option( 'wcp_fb_link' );?>"><i class="ee-facebook"></i></a></li>
                                                        <li><a href="<?php echo get_site_option( 'wcp_tw_link' );?>"><i class="ee-twitter"></i></a></li>
                                                        <li><a href="<?php echo get_site_option( 'wcp_lin_link' );?>"><i class="ee-linkedin"></i></a></li>
                                                        <li><a href="<?php echo get_site_option( 'wcp_fb_link' );?>"><i class="ee-pinterest"></i></a></li>
                                                        <li><a href="<?php echo get_site_option( 'wcp_in_link' );?>"><i class="ee-instagram"></i></a></li>
                                                        <li><a href="<?php echo get_site_option( 'wcp_fb_link' );?>"><i class="ee-houzz"></i></a></li>
                                                    </ul>
                                                </div>

                                                <p class="copy">© Essential Elegance Inc. 2017.</p>
                                                <p class="continuum"> Design & Developed by <a class="orange" target="_blank" href="#">Continuum</a></p>

                                            </div>



                                        </div> <!-- end header-nav__content -->

                                    </div>  <!-- end header-nav -->
                                </div>

                            </div> 





                        </div>
                    </div>	
                </div>
            </nav>
            <!-- Navigation -->


