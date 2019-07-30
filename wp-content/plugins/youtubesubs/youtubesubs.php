<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://florent-laot.fr/
Description: Display Youtube sub button and count
Version: 1.0.0
Author: Florent Laot
Author URI: https://florent-laot.fr/
*/

// Exit if accessed directly (if the directory path is entered in the url, it won't display the content)
if (!defined('ABSPATH')) {
    exit;
}

// Load CSS and Javascript scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class (the widget)
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget'); // We pass the name of the class as an argument
}

// Hook in function (the different hooks are given in the Wordpress documentation Codex)
add_action('widgets_init', 'register_youtubesubs');