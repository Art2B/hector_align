<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Art2B/hector_align
 * @since             1.0.0
 * @package           Hector_Align
 *
 * @wordpress-plugin
 * Plugin Name:       Hector Align
 * Plugin URI:        https://github.com/Art2B/hector_align
 * Description:       Hector align your featured images by giving them classes
 * Version:           1.0.0
 * Author:            Arthur Battut
 * Author URI:        https://twitter.com/abattut
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hector-align-activator.php
 */
function activate_hector_align() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hector-align-activator.php';
	Hector_Align_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hector-align-deactivator.php
 */
function deactivate_hector_align() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hector-align-deactivator.php';
	Hector_Align_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hector_align' );
register_deactivation_hook( __FILE__, 'deactivate_hector_align' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hector-align.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hector_align() {
	$plugin = new Hector_Align();
	$plugin->run();

}
run_hector_align();