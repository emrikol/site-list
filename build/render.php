<?php
/**
 * Multisite Sites List
 *
 * Outputs a list of sites in a WordPress multisite network.
 * It displays the site title (linked to its URL) followed by the site's tagline.
 *
 * We've got a namespace, so we can disable:
 * phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
 */

namespace emrikol\site_list;

// Check if the current WordPress setup is a multisite.
if ( ! is_multisite() ) {
	echo esc_html__( 'This is not a multisite setup.', 'site-list' );
	return;
}

/**
 * Filters the list of sites retrieved by the `get_sites()` function.
 *
 * This filter allows developers to modify the list of sites before
 * they are processed and rendered in the `ms_sites_list_block_render()` function.
 * It can be useful for modifying, adding, or removing sites based on custom criteria
 * or to inject additional information into the sites' data.
 *
 * @param array $sites An array of `WP_Site` objects representing each site in the WordPress multisite network.
 */
$sites = apply_filters( 'site_list_get_sites', get_sites() );

echo '<ul class="ms-sites-list">';

// Loop through each site and display its details.
foreach ( $sites as $site ) {
	$blog_details = get_blog_details( $site->blog_id );

	// Pass over the site if there's an error.
	if ( false === $blog_details ) {
		continue;
	}

	$site_title       = $blog_details->blogname;
	$site_url         = $blog_details->siteurl;
	$site_description = get_blog_option( $site->blog_id, 'blogdescription' );

	// Display site title (linked) and its tagline.
	echo '<li>';
	echo '<a href="' . esc_url( $site_url ) . '">' . esc_html( $site_title ) . '</a>';
	echo '<p>' . esc_html( $site_description ) . '</p>';
	echo '</li>';
}

echo '</ul>';
