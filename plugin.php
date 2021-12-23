<?php
/**
 * Plugin Name: CTA Block
 * Plugin URI: https://johnflottmeyer.github.io
 * Description: A Gutenburg block to include in-content calls to action
 * Author: John Flottmeyer
 * Author URI: https://johnflottmeyer.github.iore
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CTA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
