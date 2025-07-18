<?php
function gallery_assets() {
    // Adjust the path to your CSS file
    if (is_post_type_archive('exhibition')){
        wp_enqueue_style('archive-exhibition-style', get_template_directory_uri() . '/build/css/archive-exhibition.css', [], null);
    }
    if (is_singular('exhibition')){
        wp_enqueue_style('mytheme-exhibition-style', get_template_directory_uri() . '/build/css/exhibition.css', [], null);
    }
     if (is_post_type_archive('news')){
        wp_enqueue_style('archive-news-style', get_template_directory_uri() . '/build/css/news-archive.css', [], null);
    }
    if (is_singular('news')){
        wp_enqueue_style('news-style', get_template_directory_uri() . '/build/css/news.css', [], null);
    }
    if (is_page('contact-us')){
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/build/css/contact-us.css', [], null);
    }
    if (is_front_page()){
        wp_enqueue_style('front-page-style', get_template_directory_uri() . '/build/css/front-page.css', [], null);
        wp_enqueue_style('flicky-css', get_template_directory_uri(). '/assets/flickity/flickity.css');
        wp_enqueue_script('flicky-js', get_template_directory_uri(). '/assets/flickity/flickity.pkgd.js', ['jquery'], null, true);
        wp_enqueue_script('flicky-init-js', get_template_directory_uri(). '/assets/flickity/flickity-init.js', ['jquery'], null, true);

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
