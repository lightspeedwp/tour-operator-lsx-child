<?php
namespace tour_operator_child\classes;

/**
 * @package   tour_operator_child\classes
 * @author    LightSpeed
 * @license   GPL-2.0+
 * @link
 * @copyright 2019 LightSpeed
 */

/**
 * Class Core
 * @package tour_operator_child\classes
 */
class Core {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object tour_operator_child\classes\Core()
	 */
	protected static $instance = null;

	/**
	 * @var object tour_operator_child\classes\Setup();
	 */
	public $setup;

	/**
	 * @var object tour_operator_child\classes\Admin();
	 */
	public $admin;

	/**
	 * @var object tour_operator_child\classes\Frontend();
	 */
	public $frontend;

	/**
	 * @var object tour_operator_child\classes\Search();
	 */
	public $search;

	/**
	 * Initialize the plugin by setting localization, filters, and administration functions.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function __construct() {
		require_once( get_stylesheet_directory() . '/classes/class-setup.php' );
		$this->setup = Setup::get_instance();

		require_once( get_stylesheet_directory() . '/classes/class-admin.php' );
		$this->admin = Admin::get_instance();

		require_once( get_stylesheet_directory() . '/classes/class-frontend.php' );
		$this->frontend = Frontend::get_instance();
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object tour_operator_child\classes\Core()    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;

	}
}
