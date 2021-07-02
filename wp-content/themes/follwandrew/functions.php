<?php
function followandrew_theme_support()
{
    // adds dynamic title tag support
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "followandrew_theme_support");

function followandrew_menus()
{
    $locations = array(
        "primary" => "Desktop Primary Left Sidebar",
        "footer" => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action("init", "followandrew_menus");

function followandrew_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("followandrew-style", get_stylesheet_uri(), array("followandrew-bootstrap"), $version, "all");
    wp_enqueue_style("followandrew-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("followandrew-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
add_action('wp_enqueue_scripts', 'followandrew_register_styles');

function followandrew_register_scripts()
{
    wp_enqueue_script("followandrew-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);

    wp_enqueue_script("followandrew-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);

    wp_enqueue_script("followandrew-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", array(), "5.0.2", true);

    wp_enqueue_script("followandrew-main", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}
add_action("wp_enqueue_script", "followandrew_register_scripts");


function followandrew_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => "",
            "after_title" => "",
            "before_widget" => '<ul class="social-list list-inline py-3 mx-auto">',
            "after_widget" => "</ul>",
            "name" => "Sidebar area",
            "id" => "sidebar-1",
            "description" => "Sidebar Widget Area"
        )
    );

    register_sidebar(
        array(
            'before_title' => "",
            "after_title" => "",
            "before_widget" => '<ul class="social-list list-inline py-3 mx-auto">',
            "after_widget" => "</ul>",
            "name" => "Footer area",
            "id" => "footer-1",
            "description" => "Footer Widget Area"
        )
    );
}
add_action("widget_init", "followandrew_widget_areas");
