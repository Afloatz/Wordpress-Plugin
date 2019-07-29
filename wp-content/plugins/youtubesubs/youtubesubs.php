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