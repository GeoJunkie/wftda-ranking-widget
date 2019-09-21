<?php

/**
 * Fired during plugin activation
 *
 * @link       http://bit.ly/Stray_Taco
 * @since      1.0.0
 *
 * @package    Wftda_Ranking_Widget
 * @subpackage Wftda_Ranking_Widget/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wftda_Ranking_Widget
 * @subpackage Wftda_Ranking_Widget/includes
 * @author     Mike Straw (aka Stray Taco) <stray.taco@ohiorollergirls.com>
 */
class Wftda_Ranking_Widget_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$options = new Wftda_Ranking_Widget_Options;
		$options->initialize();
	}

}
