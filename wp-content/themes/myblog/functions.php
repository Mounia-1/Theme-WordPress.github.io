<?php

function myblog_supports (){

    add_theme_support(' title_tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    }

    function myblog_register_assets () {

        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css'); 
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', ['pooper', 'jquery'], false, true);
        wp_register_script('pooper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }


function myblog_title_separator () {
    return '|' ;
}

function myblog_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function myblog_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
add_action('after_setup_theme', 'myblog_supports');
add_action('wp_enqueue_scripts', 'myblog_register_assets');
add_filter('document_title_separator', 'myblog_title_separator');
add_filter('nav_menu_css_class', 'myblog_menu_class');
add_filter('nav_menu_link_attributes', 'myblog_menu_link_class');