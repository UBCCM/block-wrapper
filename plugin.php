<?php
/**
 * Plugin Name: Block wrapper
 * Description: Create a wrapper to a text and image block
 * Author: Michael Kam
 * Author URI: https://www.ubc.ca/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package MKAM
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
