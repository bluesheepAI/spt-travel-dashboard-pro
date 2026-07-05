<?php
if (!defined('ABSPATH')) {
    exit;
}

class SPT_Admin {

    public function __construct() {

        add_action('admin_menu', array($this, 'menu'));

    }

    public function menu() {

        add_menu_page(
            'SPT Dashboard',
            'SPT Dashboard',
            'manage_options',
            'spt-dashboard',
            array($this, 'page'),
            'dashicons-location-alt',
            25
        );

    }

    public function page() {
        ?>

        <div class="wrap">

            <h1>SachaPakistani Travel Dashboard Pro</h1>

            <p>Plugin Control Panel</p>

        </div>

        <?php
    }

}
