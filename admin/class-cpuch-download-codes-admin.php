<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/cpuch
 * @since      1.0.0
 *
 * @package    Cpuch_Download_Codes
 * @subpackage Cpuch_Download_Codes/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cpuch_Download_Codes
 * @subpackage Cpuch_Download_Codes/admin
 * @author     Cedric Puchalver <cedric.puchalver@gmail.com>
 */
class Cpuch_Download_Codes_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cpuch_Download_Codes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cpuch_Download_Codes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cpuch-download-codes-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cpuch_Download_Codes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cpuch_Download_Codes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cpuch-download-codes-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the admin menu into the WordPress Dashboard menu.
	 *
	 * @since 0.1
	 */
	public function add_plugin_admin_menu() {
		add_menu_page(
			'CPuch Download Codes',
			'Download Codes',
			'manage_options',
			'cpuch-download-codes',
			array( $this, 'display_plugin_setup_page' ),
			'dashicons-download',
			90
		);
	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since 0.1
	 */
	public function display_plugin_setup_page() {
		include_once 'partials/cpuch-download-codes-admin-display.php';
	}

}
