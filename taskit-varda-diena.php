<?php

/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://taskit.lv/user/dedalik/
 * @since             1.0.0
 * @package           Taskit_Varda_Diena
 *
 * @wordpress-plugin
 * Plugin Name:       Latvijas vārda diena
 * Plugin URI:        https://taskit.lv/user/dedalik/
 * Description:       Latvijas vārda diena for Wordpress
 * Version:           1.0.0
 * Author:            Radiks A.
 * Author URI:        https://taskit.lv/user/dedalik/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       taskit-varda-diena
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
define( 'TASKIT_VARDA_DIENA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-taskit-varda-diena-activator.php
 */
function activate_taskit_varda_diena() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-taskit-varda-diena-activator.php';
	Taskit_Varda_Diena_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-taskit-varda-diena-deactivator.php
 */
function deactivate_taskit_varda_diena() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-taskit-varda-diena-deactivator.php';
	Taskit_Varda_Diena_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_taskit_varda_diena' );
register_deactivation_hook( __FILE__, 'deactivate_taskit_varda_diena' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-taskit-varda-diena.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_taskit_varda_diena() {

	$plugin = new Taskit_Varda_Diena();
	$plugin->run();

}
run_taskit_varda_diena();
