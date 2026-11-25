<?php
/**
* Plugin name: Pet on your desktop
* Description: A thing on your desktop
* Author: Me yay
* Version: 1.0.1
*/

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_footer', 'plugin_content');

function plugin_content() {
    echo '<div class="viewport">Wow</div>';
}

add_action( 'wp_enqueue_scripts', 'AddScripts' );
 
function AddScripts() {
    wp_enqueue_style(
        'plugin-style',
        plugin_dir_url(__FILE__) . 'main.css'
    );
    wp_enqueue_script_module(
        'plugin-script',
        plugin_dir_url(__FILE__) . 'main.js'
    );
}