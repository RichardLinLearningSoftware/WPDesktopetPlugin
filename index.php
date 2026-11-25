<?php
/**
* Plugin name: Pet on your desktop
* Description: A thing on your desktop
* Author: Me yay
* Version: 1.0.3
*/

$response = wp_remote_get(
    'https://pxokxpvauwrlusxjzwmc.supabase.co/rest/v1/music?select=*',
    array(
        'headers' => array(
            'apikey' => "sb_publishable_rN8JnrzyR1qxnFqwCsFmRg_v9O_h1Aa"
        )
    )
);

$body = wp_remote_retrieve_body($response);
$data = json_decode($body);

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_footer', 'plugin_content');

function plugin_content() {
    ?>
        <div class="viewport"></div>
    <?php
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