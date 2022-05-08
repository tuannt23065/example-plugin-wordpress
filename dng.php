<?php
/**
 * Plugin Name: DNG Plugin
 *
 * @package           DNG PluginPackage
 * @author            Nguyễn Thành Tuân
 * @copyright         2022 DNG
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       DNG Plugin
 * Plugin URI:        https://tuanntblog.com
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tuannt
 * Author URI:        https://tuanntblog.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://tuanntblog.com
 */

require_once 'vendor/autoload.php';

define( 'DNG_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'DNG_PLUGIN_TEMPLATE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/' );
$thePlugin = DNG\Plugin::get_instance();
register_activation_hook( __FILE__, [ $thePlugin, 'activate' ] );
register_deactivation_hook( __FILE__, [ $thePlugin, 'deactivate' ] );