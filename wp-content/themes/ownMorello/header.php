<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="<?php echo  $logo[0] ?>"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- <body class="full-layout"> -->
    <div class="content-wrapper">
        <div class="navbar navbar-default default extended centered" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="social-wrapper text-left">
                        <ul class="social">

                            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
                            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
                            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
                            <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
                            <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
                        </ul>
                        <!--/.social -->
                    </div>
                    <!--/.social-wrapper -->
                    <div class="navbar-brand text-center">
                        <a href="index.html"><img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" alt="" /></a>
                    </div>
                    <ul class="info text-right">
                        <li><i class="ion-android-mail"></i><a href="mailto:hello@email.com" class="email-link">hello@email.com</a>
                        </li>
                        <li><i class="ion-headphone"></i>00 (123) 456 78 90</li>
                    </ul>
                    <!-- /.info -->
                    <div class="nav-bars-wrapper">
                        <div class="nav-bars-inner">
                            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
                        </div>
                        <!-- /.nav-bars-inner -->
                    </div>
                    <!-- /.nav-bars-wrapper -->
                </div>
                <!-- /.nav-header -->
            </div>
            <!--/.container -->
            <div class="navbar-collapse collapse">
                
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu(
                            array(
                                "theme_location" => "top-menu",
                                // "menu_class" => "navigation",
                        
                            )
                        ) ?>
                    </ul>
                
                <!--/.container -->
            </div>
            <!--/.nav-collapse -->

        </div>
        <!--/.navbar -->


        <!-- <a class="site-title pt-lg-4 mb-0" href="index.html">
            <?php echo get_bloginfo("name"); ?>
        </a>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                if (function_exists("the_custom_logo")) {
                    $custom_logo_id = get_theme_mod("custom_logo");
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="mb-3 mx-auto logo" src="<?php echo  $logo[0] ?>" alt="logo">
                <?php
                wp_nav_menu(
                    array(
                        "menu" => "primary",
                        "container" => "",
                        "theme_location" => "primary",
                        "items_wrap" => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                    )
                )
                ?>
                <hr>
                <?php dynamic_sidebar("sidebar-1"); ?>
            </div>
        </nav>   
            <h1 class="heading">
                <?php the_title(); ?>
            </h1> -->