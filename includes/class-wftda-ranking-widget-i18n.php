<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://bit.ly/Stray_Taco
 * @since      1.0.0
 *
 * @package    Wftda_Ranking_Widget
 * @subpackage Wftda_Ranking_Widget/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wftda_Ranking_Widget
 * @subpackage Wftda_Ranking_Widget/includes
 * @author     Mike Straw (aka Stray Taco) <stray.taco@ohiorollergirls.com>
 */
class Wftda_Ranking_Widget_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wftda-ranking-widget',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
