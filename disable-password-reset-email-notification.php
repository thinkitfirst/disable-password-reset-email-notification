<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              thinkitfirst.com
 * @since             1.0.0
 * @package           Disable_Password_Reset_Email_Notification
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Password Reset Email Notification
 * Plugin URI:        https://github.com/thinkitfirst/disable-password-reset-email-notification
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            John Kirrane
 * Author URI:        thinkitfirst.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-password-reset-email-notification
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DISABLE_PASSWORD_RESET_EMAIL_NOTIFICATION_VERSION', '1.0.0' );

if ( !function_exists( 'wp_password_change_notification' ) ) {
	function wp_password_change_notification() {}
}