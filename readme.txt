=== WP Custom Data ===
Contributors: kapooo
Tags: data, custom, theme, custom data, custom fields, widget 
Donate link: http://www.aceinnova.com/
Requires at least: 3.0.1
Tested up to: 4.3.1
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Through WP Custom Data you can easily use your custom fields with any theme or plugin.

== Description ==

WP Custom Data is a Wordpress widget which adds custom fields in your Wordpress site. The custom fields can be simply usable in every section of your theme or in every plugin. For example if you want to add your address to the footer but the theme has not got an address field, you can simply install the WP Custom Data, enable the plugin, go in the widget section, add the WP Custom Data in any section (no matter where), write the address in one or more rows and save. Now Wordpress knows your address and you can use this fields wherever you want. Do you want to use it in the footer? Open footer.php and write the PHP code:

`$list = get_option('wp-custom-data');` 

where you want then, to display the address (the custom fields), use 

`echo $list['rowX'];` 

where X is the number of the row in the WP Custom Data where you have written the address. 


== Installation ==

= How to Install =

1. Upload the entire 'wp-custom-data' folder to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use WP Custom Data in the Widget section

= How to Use =

1. Add the widget in any section (e.g. Default Sidebar)
2. Write your data in the rows
3. To display your data, use the PHP code: 
4. `$list = get_option('wp-custom-data');`
5. `echo $list['rowX'];`
6. where X is the number of the row you want display


== Frequently Asked Questions ==

Do you have questions or issues about WP Custom Data? 

= Does WP Custom Data support Multisite network? = 
Yes, it supports multisite network
= Is there a support forum? =
Yes, where [Support Forum](http://wordpress.org/support/plugin/wp-custom-data)



== Screenshots ==

1. WP Custom Data Widget

== Changelog ==

= 1.1 =

* Release Date - 6th November, 2015 *
* First Release

== Upgrade Notice ==

= 1.1 =

First Release


