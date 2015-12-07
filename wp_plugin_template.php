<?php
/*
Plugin Name: WP Entry List
Plugin URI: https://github.com/RcArtSolutions/wp-entry-list
Description: A simple entry list for R/C car racing events
Version: 0.01
Author: Elias Ruemmler (RC-Art Solutions)
Author URI: http://www.rc-art.de
License: GPL2
*/
/*
Copyright 2015  RC-Art Solutions  (email : info@rc-art.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('RCA_Entry_List'))
{
	class RCA_Entry_List
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$RCA_Entry_List_Settings = new RCA_Entry_List_Settings();

			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		}

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{

		}

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{

		}

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=rca_entry_list">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
	}
}

if(class_exists('RCA_Entry_List'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('RCA_Entry_List', 'activate'));
	register_deactivation_hook(__FILE__, array('RCA_Entry_List', 'deactivate'));

	// instantiate the plugin class
	$rca_entry_list = new RCA_Entry_List();

}
