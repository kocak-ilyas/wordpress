<?php

function morello_theme_support()
{
    // adds dynamic title tag support
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "morello_theme_support");


add_theme_support("menus");
register_nav_menus(
    array(
        'top-menu' => __("Page Sidebar", "theme"),
        'footer-menu' => __("Footer Menu", "theme")
    )
);

function morello_register_styles()
{
    wp_enqueue_style('morello-style', get_template_directory_uri() . '/style.css', array("morello-bootstrap"), wp_get_theme()->get('Version'), 'all'); //  array() ???
    wp_enqueue_style('morello-bootstrap', get_template_directory_uri() . '/style/css/bootstrap.min.css', array(), "3.3.4", 'all');
    wp_enqueue_style('morello-plugins', get_template_directory_uri() . '/style/css/plugins.css', array(), "3.0.0", 'all');
    wp_enqueue_style('morello-settings', get_template_directory_uri() . '/style/revolution/css/settings.css', array(), "5.0.0", 'all');
    wp_enqueue_style('morello-layers', get_template_directory_uri() . '/style/revolution/css/layers.css', array(), "5.0.0", 'all');
    wp_enqueue_style('morello-navigation', get_template_directory_uri() . 'style/revolution/css/navigation.css', array(), "5.0", 'all');
    wp_enqueue_style('morello-blue', get_template_directory_uri() . 'style/css/color/blue.css', array(), "1.0", 'all');
    wp_enqueue_style('morello-icons', get_template_directory_uri() . 'style/type/icons.css', array(), "1.0", 'all');
    wp_enqueue_style("morello-googleWorkSans", "https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900,300,200,100", array(), "9", "all");
    wp_enqueue_style("morello-googleLora", "https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic", array(), "1.0", "all");
}
add_action('wp_enqueue_scripts', 'morello_register_styles');

function morello_register_scripts()
{
    wp_enqueue_script("morello-jquery", get_stylesheet_uri() . "/style/js/jquery.min.js", array(), "1.11.3", true);
    wp_enqueue_script("morello-bootstrap", get_stylesheet_uri() . "/style/js/bootstrap.min.js", array(), "3.3.2", true);
    wp_enqueue_script("morello-themepunch", get_stylesheet_uri() . "/style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0", array(), "1.6.9", true);
    wp_enqueue_script("morello-revolution", get_stylesheet_uri() . "/style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0", array(), "5.2.4", true);
    wp_enqueue_script("morello-slideanims", get_stylesheet_uri() . "/style/revolution/js/extensions/revolution.extension.slideanims.min.js", array(), "1.1.2", true);
    wp_enqueue_script("morello-layeranimation", get_stylesheet_uri() . "/style/revolution/js/extensions/revolution.extension.layeranimation.min.js", array(), "2.2.1", true);
    wp_enqueue_script("morello-navigation", get_stylesheet_uri() . "/style/revolution/js/extensions/revolution.extension.navigation.min.js", array(), "1.2.4", true);
    wp_enqueue_script("morello-carousel", get_stylesheet_uri() . "/style/revolution/js/extensions/revolution.extension.carousel.min.js", array(), "1.0.2", true);
    wp_enqueue_script("morello-video", get_stylesheet_uri() . "/style/revolution/js/extensions/revolution.extension.video.min.js", array(), "1.7", true);
    wp_enqueue_script("morello-plugins", get_stylesheet_uri() . "/style/js/plugins.js", array(), "", true);
    wp_enqueue_script("morello-scripts", get_stylesheet_uri() . "/style/js/scripts.js", array(), "", true);
}
add_action('wp_enqueue_scripts', 'morello_register_scripts');

register_sidebars(
    array(
        "name" => __("Page Sidebar"),
        "id" => __("page-sidebar"),
        // "class" => __("text-warning"),
        "before_title" => __(' <li><a href="#!">'),
        "after_title" => __("</a></li>"),
    )
);
