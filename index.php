<?php
/**
* Plugin name: Pet on your desktop
* Description: A thing on your desktop
* Author: Me yay
* Version: 1.0.0
*/

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_footer', 'plugin_content');

function plugin_content() {
    echo '<div class="viewport">Wow</div>';
}