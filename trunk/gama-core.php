<?php

/**
 * @link              http://dzeta.biz/plugin/gama-core
 * @since             0.7.0
 * @package           Gama_Core
 *
 * @wordpress-plugin
 * Plugin Name:       Gama Core
 * Plugin URI:        http://dzeta.biz/plugin/gama-core
 * Description:       Gama Core adds Custom Post Types, Taxonomies and Responsive Multi-Level Menu
 * Version:           0.7.0
 * Author:            DZeta
 * Author URI:        http://dzeta.biz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gama-core
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gama-core-activator.php
 */
function activate_gama_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gama-core-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gama-core-deactivator.php
 */
function deactivate_gama_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gama-core-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gama_core' );
register_deactivation_hook( __FILE__, 'deactivate_gama_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gama-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.7.0
 */
function run_gama_core() {

	$plugin = new Gama_Core();
	$plugin->run();

}
run_gama_core();
