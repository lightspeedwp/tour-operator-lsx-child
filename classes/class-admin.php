<?php
namespace africatvl_child\classes;
/**
 * @package   africatvl_child\classes
 * @author    LightSpeed
 * @license   GPL-2.0+
 * @link
 * @copyright 2019 LightSpeed
 */

/**
 * Class Admin
 * @package africatvl_child\classes
 */
class Admin {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object africatvl_child\classes\Admin()
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin by setting localization, filters, and administration functions.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function __construct() {
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object \africatvl_child\classes\Admin()    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
}
