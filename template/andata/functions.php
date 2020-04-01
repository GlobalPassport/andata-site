<?php
function enqueue_styles() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), ' ' );
    wp_register_style('font-style-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_style('font-style-swiper', get_template_directory_uri() .'/assets/css/owl.carousel.min.css');
    wp_register_style('font-style-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap&subset=cyrillic');
    wp_register_style('style-header', get_template_directory_uri() .'/assets/css/header.css');




    wp_enqueue_style( 'bootstrap-style');
    wp_enqueue_style( 'font-style-swiper');
    wp_enqueue_style( 'font-style-fonts');
    wp_enqueue_style( 'style-header');
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() .'/assets/js/jquery.min.js', array('jquery'), ' ' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), ' ' );
    wp_enqueue_script( 'owl-js', get_template_directory_uri() .'/assets/js/owl.js', array('jquery'), ' ' );
    wp_enqueue_script( 'highlight-js', get_template_directory_uri() .'/assets/js/highlight.js', array('jquery'), ' ' );
    wp_enqueue_script( 'site-js', get_template_directory_uri() .'/assets/js/site.js', array('jquery'), ' ' );
    wp_enqueue_script('html5-shim');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');



if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
remove_filter('the_content', 'wpautop');