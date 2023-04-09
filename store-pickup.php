<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mukesh.com
 * @since             1.0.0
 * @package           Store_Pickup
 *
 * @wordpress-plugin
 * Plugin Name:       store-pickup
 * Plugin URI:        https://store-pickup.com
 * Description:       This is a plugin for adding pickup store to checkout page in woocommerce
 * Version:           1.0.0
 * Author:            Mukesh
 * Author URI:        https://mukesh.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       store-pickup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STORE_PICKUP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-store-pickup-activator.php
 */
function activate_store_pickup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-store-pickup-activator.php';
	Store_Pickup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-store-pickup-deactivator.php
 */
function deactivate_store_pickup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-store-pickup-deactivator.php';
	Store_Pickup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_store_pickup' );
register_deactivation_hook( __FILE__, 'deactivate_store_pickup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-store-pickup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_store_pickup() {

	$plugin = new Store_Pickup();
	$plugin->run();

}
run_store_pickup();
