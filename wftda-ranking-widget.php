<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/GeoJunkie
 * @since             0.0.1
 * @package           Wftda_Ranking_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       WFTDA Ranking Widget
 * Plugin URI:        https://github.com/GeoJunkie/wftda-ranking-widget
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.1
 * Author:            Mike Straw (aka Stray Taco)
 * Author URI:        https://github.com/GeoJunkie
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wftda-ranking-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.0.1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WFTDA_RANKING_WIDGET_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wftda-ranking-widget-activator.php
 */
function activate_wftdarw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wftda-ranking-widget-activator.php';
	Wftda_Ranking_Widget_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wftda-ranking-widget-deactivator.php
 */
function deactivate_wftdarw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wftda-ranking-widget-deactivator.php';
	Wftda_Ranking_Widget_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wftdarw' );
register_deactivation_hook( __FILE__, 'deactivate_wftdarw' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wftda-ranking-widget.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_wftdarw() {

	$plugin = new Wftda_Ranking_Widget();
	$plugin->run();

}
run_wftdarw();
