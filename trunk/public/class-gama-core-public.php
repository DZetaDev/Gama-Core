<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @since      0.7.0
 *
 * @package    Gama_Core
 * @subpackage Gama_Core/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gama_Core
 * @subpackage Gama_Core/public
 * @author     DZeta <dzeta.webdev@gmail.com>
 */
class Gama_Core_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.7.0
	 * @access   private
	 * @var      string    $gama_core    The ID of this plugin.
	 */
	private $gama_core;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.7.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.7.0
	 * @access   private
	 * @var      string    $version    Check the current theme is Gama.
	 */
	private $current_theme;
	private $current_theme_alt;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.7.0
	 * @param      string    $gama_core       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $gama_core, $version ) {

		$this->gama_core = $gama_core;
		$this->version = $version;
		$this->current_theme = wp_get_theme( 'gama' );
		$this->current_theme_alt = wp_get_theme( 'gama-dzeta' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.7.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gama_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gama_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */


		wp_enqueue_style( $this->gama_core, plugin_dir_url( __FILE__ ) . 'css/gama-core-public.css', array(), $this->version, 'all' );
		if ( ! ( $this->current_theme->exists() || $this->current_theme_alt->exists() ) ) {
			wp_enqueue_style( $this->gama_core, plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), '4.3.0', 'all' );
		}
		wp_enqueue_style( $this->gama_core, plugin_dir_url( __FILE__ ) . 'component.css', array(), null, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.7.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gama_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gama_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->gama_core, plugin_dir_url( __FILE__ ) . 'js/gama-core-public.js', array( 'jquery' ), $this->version, false );
		if ( ! ( $this->current_theme->exists() || $this->current_theme_alt->exists() ) ) {
			wp_enqueue_script( $this->gama_core, plugin_dir_url( __FILE__ ) . 'js/modernizr.custom.js', array(), '2.8.3 ', false );
		}
		wp_enqueue_script( $this->gama_core, plugin_dir_url( __FILE__ ) . 'js/jquery.dlmenu.js', array(), '2.8.3 ', true );

	}

}
