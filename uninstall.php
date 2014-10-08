<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   custom-post-edit
 * @author    Chris Hardin <chris@hardinmarketing.com>
 * @license   GPL-2.0+
 * @link      hardinmarketing.com
 * @copyright 10-9-2014 hardinmarketing.com
 */

// If uninstall, not called from WordPress, then exit
if (!defined("WP_UNINSTALL_PLUGIN")) {
	exit;
}

// TODO: Define uninstall functionality here