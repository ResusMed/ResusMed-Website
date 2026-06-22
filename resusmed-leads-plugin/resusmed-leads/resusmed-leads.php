<?php
/**
 * Plugin Name: ResusMed Leads
 * Plugin URI: https://www.ResusMed.com
 * Description: Custom lead management plugin for ResusMed.
 * Version: 1.0.0
 * Author: ResusMed
 * Author URI: https://www.ResusMed.com
 * Text Domain: resusmed-leads
 */

if (!defined('ABSPATH')) {
    exit;
}

define('RESUSMED_LEADS_VERSION', '1.0.0');
define('RESUSMED_LEADS_PLUGIN_FILE', __FILE__);
define('RESUSMED_LEADS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('RESUSMED_LEADS_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Main plugin load function.
 */
function resusmed_leads_init() {
    // Future plugin files will be loaded here.
}
add_action('plugins_loaded', 'resusmed_leads_init');
