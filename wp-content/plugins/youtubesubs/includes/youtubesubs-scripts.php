<?php
// Add scripts
function yts_add_scripts() {
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');
    // Add Main JS
    wp_enqueue_script('yts-main-script', plugins_url(). '/youtubesubs/js/main.js');
}

// Use of a hook. When wordpress hits the hook 'wp_enqueue_scripts', it loads the function yts_add_scripts
add_action('wp_enqueue_scripts', 'yts_add_scripts');