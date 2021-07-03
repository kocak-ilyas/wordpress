<?php

function load_stylesheets()
{
    $themeVersion = wp_get_theme()->get("Version");

    wp_register_style("bootstrap", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css", array(), "5.0.2", false, "all");
    wp_enqueue_style("bootstrap");

    wp_register_style("stylesheet", get_template_directory_uri() . "/style.css", array(), $themeVersion, false, "all");
    wp_enqueue_style("stylesheet");
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// admin panelinde arayüz saçmi için - silebilirsin
add_filter("use_block_editor_for_post_type", "__return_false", 100);

add_theme_support("post-thumbnails"); //öne çıkan görsel
add_image_size("small",100,100,true);
// add_image_size("large",600,600,true);

add_theme_support("menus");
register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme")
    )
);
register_sidebar( //widget
    array(
        "name" => __("Page Sidebar"),
        "id" => __("page-sidebar"),
        "class" => __(""),
        "before_title" => __("<h4>"),
        "after_title" => __("</h4>"),
    )
);


