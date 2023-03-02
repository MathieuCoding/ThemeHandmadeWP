<?php 

function mytheme_asset() 
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('my-css', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'mytheme_asset');