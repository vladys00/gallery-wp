<?php
function gallery_assets() {
    // Adjust the path to your CSS file
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/build/css/index.css', [], null);
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/build/js/index.js', ['jquery'], null, true);
    wp_enqueue_script('alert-script', get_template_directory_uri() . '/build/js/alert.js', ['jquery'], null, true);
}

add_action('wp_enqueue_scripts', 'gallery_assets');
?>