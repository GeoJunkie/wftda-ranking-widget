<?php

/**
 * @link              https://bit.ly/Stray_Taco
 * @since             1.0.0
 * @package           Wftda_Ranking_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       WFTDA Rankings Widget
 * Plugin URI:        https://github.com/GeoJunkie/wftda-ranking-widget
 * Description:       A widget to show a WFTDA league's ranking information in a widget.
 * Version:           1.0.0
 * Author:            Mike Straw (aka Stray Taco)
 * Author URI:        http://bit.ly/Stray_Taco
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
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'WFTDA_RANKING_WIDGET_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wftda-ranking-widget-activator.php
 */
function activate_wftda_ranking_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wftda-ranking-widget-activator.php';
	Wftda_Ranking_Widget_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wftda-ranking-widget-deactivator.php
 */
function deactivate_wftda_ranking_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wftda-ranking-widget-deactivator.php';
	Wftda_Ranking_Widget_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wftda_ranking_widget' );
register_deactivation_hook( __FILE__, 'deactivate_wftda_ranking_widget' );

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
 * @since    1.0.0
 */
function run_wftda_ranking_widget() {

	$plugin = new Wftda_Ranking_Widget();
	$plugin->run();

}
run_wftda_ranking_widget();
