<?php
/**
 * custom post edit
 *
 * edit custom post types
 *
 * @package   custom-post-edit
 * @author    Chris Hardin <chris@hardinmarketing.com>
 * @license   GPL-2.0+
 * @link      hardinmarketing.com
 * @copyright 10-9-2014 hardinmarketing.com
 *
 * @wordpress-plugin
 * Plugin Name: custom post edit
 * Plugin URI:  hardinmarketing.com
 * Description: edit custom post types
 * Version:     1.0.0
 * Author:      Chris Hardin
 * Author URI:  hardinmarketing.com
 * Text Domain: custom-post-edit-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

require_once(plugin_dir_path(__FILE__) . "customPostEdit.php");

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook(__FILE__, array("customPostEdit", "activate"));
register_deactivation_hook(__FILE__, array("customPostEdit", "deactivate"));

customPostEdit::get_instance();