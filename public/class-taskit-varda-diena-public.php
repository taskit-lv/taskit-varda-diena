<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://taskit.lv/user/dedalik/
 * @since      1.0.0
 *
 * @package    Taskit_Varda_Diena
 * @subpackage Taskit_Varda_Diena/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Taskit_Varda_Diena
 * @subpackage Taskit_Varda_Diena/public
 * @author     Radiks A. <dedalik@gmail.com>
 */
class Taskit_Varda_Diena_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of the plugin.
	 * @param string $version The version of this plugin.
	 *
	 * @since    1.0.0
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

		// Add shortcode
		$this->init_shortcode();

	}

	function shortcode_content() {
		return '<div class="taskit-varda-diena"></div>';
	}

	function init_shortcode() {
		add_shortcode( 'varda_diena', array( $this, 'shortcode_content' ) );
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Taskit_Varda_Diena_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Taskit_Varda_Diena_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/taskit-varda-diena-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Taskit_Varda_Diena_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Taskit_Varda_Diena_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/taskit-varda-diena-public.js', array( 'jquery' ), $this->version, true );

	}

}
