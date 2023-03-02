<?php 


function mytheme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('main', 'main menu');
}
add_action('after_setup_theme', 'mytheme_setup');


function mytheme_asset() 
{
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_script('boostrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', [], '', true);
}
add_action( 'wp_enqueue_scripts', 'mytheme_asset');