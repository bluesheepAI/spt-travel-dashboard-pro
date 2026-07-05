<?php
if (!defined('ABSPATH')) {
    exit;
}

class SPT_Loader {

    public function __construct() {

        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));

        add_shortcode('spt_dashboard', array($this, 'dashboard'));

    }

    public function enqueue_assets() {

        wp_enqueue_style(
            'spt-dashboard',
            SPT_PLUGIN_URL . 'assets/css/dashboard.css',
            array(),
            SPT_VERSION
        );

        wp_enqueue_script(
            'spt-dashboard',
            SPT_PLUGIN_URL . 'assets/js/dashboard.js',
            array(),
            SPT_VERSION,
            true
        );

    }

    public function dashboard() {

    ob_start();

    require_once SPT_PLUGIN_PATH . 'templates/dashboard.php';        

    return ob_get_clean();

}

}
