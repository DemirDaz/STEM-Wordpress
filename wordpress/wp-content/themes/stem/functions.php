<?php


// Load css and js
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js() {

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');


function custom_css() {
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css', array(), time());
}
add_action('wp_enqueue_scripts', 'custom_css');


function custom_css_home() {
    wp_enqueue_style('custom-css-home', get_template_directory_uri() . '/styles/home.css', array(), time());
}
add_action('wp_enqueue_scripts', 'custom_css_home');

function custom_css_activities() {
    wp_enqueue_style('custom-css-activities', get_template_directory_uri() . '/styles/activities.css', array(), time());
}
add_action('wp_enqueue_scripts', 'custom_css_activities');


// Theme Options
add_theme_support('menus');


//Menus
register_nav_menus(
      array(
          'top-menu' => 'Top Menu Location',
          'mobile-menu' => 'Mobile Menu Location'
      )
);


?>