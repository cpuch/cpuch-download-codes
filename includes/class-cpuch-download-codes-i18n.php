<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/cpuch
 * @since      1.0.0
 *
 * @package    Cpuch_Download_Codes
 * @subpackage Cpuch_Download_Codes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cpuch_Download_Codes
 * @subpackage Cpuch_Download_Codes/includes
 * @author     Cedric Puchalver <cedric.puchalver@gmail.com>
 */
class Cpuch_Download_Codes_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cpuch-download-codes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
