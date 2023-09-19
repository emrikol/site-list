=== Site List ===
Contributors: emrikol
Tags: multisite, sites, list, block, gutenberg
Requires at least: 6.1
Tested up to: 6.3
Requires PHP: 7.0
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: site-list

List all sites in a multisite network with this block.

== Description ==

The "Site List" plugin provides a block that lists all the sites in a multisite network. Each site is displayed with its title (linked to its URL) followed by the site's tagline. It's a handy block for network administrators and users who want to showcase or quickly navigate between sites in a multisite setup.

== Installation ==

1. Upload the `site-list` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add the "Multisite Site List" block to your posts or pages.

== Frequently Asked Questions ==

= Can I filter the sites listed? =

Yes, the plugin provides a filter `site_list_get_sites` that allows developers to modify the list of sites retrieved by the `get_sites()` function.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release.

