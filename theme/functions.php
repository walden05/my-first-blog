<?php


function blog_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('blog_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blog_files');

function blog_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'blog_features');