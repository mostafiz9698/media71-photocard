<?php
/**
 * Plugin Name: Media71 Photo Card
 * Plugin URI: https://github.com/mostafiz9698/media71-photocard
 * Description: Create beautiful news photo cards directly from WordPress posts.
 * Version: 0.1.0
 * Author: Mostafizur Rahman
 * Author URI: https://github.com/mostafiz9698
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: media71-photocard
 * Domain Path: /languages
 *
 * @package Media71PhotoCard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'M71PC_VERSION', '0.1.0' );
define( 'M71PC_PLUGIN_FILE', __FILE__ );
define( 'M71PC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'M71PC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once M71PC_PLUGIN_PATH . 'includes/class-loader.php';

/**
 * Boot the plugin.
 */
function m71pc_boot() {
	$plugin = new Media71\PhotoCard\Loader();
	$plugin->run();
}

m71pc_boot();
