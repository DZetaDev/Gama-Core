<?php

/**
 * Fired when the plugin is uninstalled.
 * @since      0.7.0
 *
 * @package    Gama_Core
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
