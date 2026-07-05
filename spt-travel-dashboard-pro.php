<?php
/**
 * Plugin Name: SachaPakistani Travel Dashboard Pro
 * Plugin URI: https://sachapakistani.com
 * Description: Premium GPS Travel Dashboard for WordPress.
 * Version: 1.0.0
 * Author: Kashif Khan
 * Author URI: https://sachapakistani.com
 * License: GPL2
 * Text Domain: spt-dashboard
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SPT_VERSION', '1.0.0');
define('SPT_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('SPT_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once SPT_PLUGIN_PATH . 'includes/class-loader.php';

new SPT_Loader();
