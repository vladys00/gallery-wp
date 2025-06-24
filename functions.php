<?php
function gallery_assets() {
    // Adjust the path to your CSS file
    if (is_post_type_archive('exhibition')){
        wp_enqueue_style('archive-exhibition-style', get_template_directory_uri() . '/build/css/archive-exhibition.css', [], null);
    }
    if (is_singular('exhibition')){
        wp_enqueue_style('mytheme-exhibition-style', get_template_directory_uri() . '/build/css/exhibition.css', [], null);
    }
    if (is_front_page()){
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/build/css/front-page.css', [], null);
    }
    
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/build/css/index.css', [], null);
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/build/js/index.js', ['jquery'], null, true);
    wp_enqueue_script('alert-script', get_template_directory_uri() . '/build/js/alert.js', ['jquery'], null, true);
    
}

add_action('wp_enqueue_scripts', 'gallery_assets');

function gallery_features(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gallery_features');
