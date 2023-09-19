<?php
/**
 * Plugin Name:       Site List
 * Description:       List all sites in a multisite network.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            emrikol
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       site-list
 */

namespace emrikol\site_list;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function block_init() {
	// Register the block using the build directory's metadata.
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'emrikol\site_list\block_init' );
