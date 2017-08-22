=== REST API Multiple Post Types ===
 Contributors: Shelob9
 Tags: rest api, wp-api, hi roy, caldera
 Requires at least: 4.7
 Tested up to: 4.8.1
 Stable tag: 0.1.0
 License: GPLv2


Query multiple post types using /wp/v2/posts

 == Description ==

 Any post type that works with the WordPress REST API (show_in_rest must be true when declaring post type) will be queryable with /wp/v2/posts

 Example Queries

 * GET wp/v2/posts?type=roy
 * GET wp/v2/posts?type[]=roy&type[]=mike

 A free plugin by [Caldera Labs](http://calderalabs.org?utm_source=dotOrg&utm_medium=plugins&utm_campaign=rest-api-multiple-post-types] the makers of [Caldera Forms](https://calderaforms.com?utm_source=dotOrg&utm_medium=plugins&utm_campaign=rest-api-multiple-post-types) a drag and drop responsive form builder.

 == Installation ==

 This section describes how to install the plugin and get it working.

 e.g.

 1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
 1. Activate the plugin through the 'Plugins' screen in WordPress
 1. Use the Settings->Plugin Name screen to configure the plugin
 1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


 == Frequently Asked Questions ==

 = A question that someone might have =

 An answer to that question.

 = Why Isn't My Post Type Showing Up? =

It must be declared with show_in_rest = true.

 == Screenshots ==

 1. A cool screenshot of some fancy JSONs.

 == Changelog ==

 = 0.1.0 =
 First release.

 == Upgrade Notice ==
