<?php
/*
Plugin Name: easy-update-urls
Description: Easy Update Urls in WP database
Version: 1.02
Text Domain: easy-update-urls
Author: Bill Minozzi
Author URI: http://billminozzi.com
License:     GPL2
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
// Make sure the file is not directly accessible.
if (!defined('ABSPATH')) {
    die('We\'re sorry, but you can not directly access this file.');
}
$easy_update_urls_plugin_data = get_file_data(__FILE__, array('Version' => 'Version'), false);
$easy_update_urls_plugin_version = $easy_update_urls_plugin_data['Version'];
define('EASY_UPDATE_URLS_VERSION', $easy_update_urls_plugin_version);
define('EASY_UPDATE_URLS_URL', plugin_dir_url(__file__));
define('EASY_UPDATE_URLS_PATH', plugin_dir_path(__file__));
define('EASY_UPDATE_URLS_IMAGES', plugin_dir_url(__file__) . 'assets/images');
// function exist...
add_action('init', "easy_update_urls_init", 1000);
add_action('admin_enqueue_scripts', 'easy_update_urls_enqueue', 1000);
function easy_update_urls_init()
{
    if (is_admin())   
        add_management_page(
            'Easy Update Urls',
            'Easy Update Urls',
            'manage_options',
            'easy_update_urls_admin_page', // slug
            'easy_update_urls_admin_page'
        );
}
function easy_update_urls_enqueue()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
	wp_enqueue_style('easy-update-urls', EASY_UPDATE_URLS_URL . 'assets/css/styles.css');
    wp_register_script('easy-update-urls-js', EASY_UPDATE_URLS_URL . 'assets/js/easy-update-urls.js', false);
    wp_enqueue_script('easy-update-urls-js');
}
function easy_update_urls_admin_page()
{
    require_once EASY_UPDATE_URLS_PATH . "/dashboard/dashboard_container.php";
}
function easy_update_urls_settings_link($links)
{
  $settings_link = '<a href="admin.php?page=easy_update_urls_admin_page">Settings</a>';
  array_unshift($links, $settings_link);
  return $links;
}
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'easy_update_urls_settings_link');
