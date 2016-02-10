<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/Art2B/hector_align
 * @since      1.0.0
 *
 * @package    Hector_Align
 * @subpackage Hector_Align/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hector_Align
 * @subpackage Hector_Align/admin
 * @author     Arthur Battut
 */
class Hector_Align_Admin {

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hector-align-admin.css', array(), $this->version, 'all' );
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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hector_align-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add align custom post fields to images
	 *
	 * @since 1.0.0
	 */
		public function hector_align_metabox() {
		  // Image alignement
		  $alignment_prefix = '_hector_';

		  $cmb_hector = new_cmb2_box( array(
		    'id'            => $alignment_prefix . 'box',
		    'title'         => __( 'Image alignement', 'cmb2' ),
		    'object_types'  => array('attachment'),
		  ));
		  $cmb_hector->add_field(array(
		    'name'    => 'Image Alignment',
		    'id'      => $alignment_prefix . 'alignment',
		    'desc'    => 'Select to which side align the image',
		    'type'    => 'select',
		    'default'	=> 'center',
		    'options' => array(
		        'center'  => 'Center',
		        'top'  		=> 'Top',
		        'bottom' 	=> 'Bottom',
		    ),
		  ));
		}
}
