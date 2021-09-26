<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://taskit.lv/user/dedalik/
 * @since      1.0.0
 *
 * @package    Taskit_Varda_Diena
 * @subpackage Taskit_Varda_Diena/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Taskit_Varda_Diena
 * @subpackage Taskit_Varda_Diena/includes
 * @author     Radiks A. <dedalik@gmail.com>
 */
class Taskit_Varda_Diena_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'taskit-varda-diena',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
