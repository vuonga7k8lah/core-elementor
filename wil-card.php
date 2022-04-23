<?php

/**
* Tested up to:        5.6.2
* Domain Path:         /languages
* Text Domain:         wil-card
* License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
* License:             GPL-2.0+
* Author URI:          https://wiloke.com
* Author:              wiloke
* Version:             1.0.0
* Description:         Wiloke Card Addon for Elementor
* Plugin URI:          https://wiloke.com
* Plugin Name:         Wiloke Card for Elementor
*/


define("WILOKE_WILOKECARD_VERSION", "1.0.0");
define("WILOKE_WILOKECARD_NAMESPACE", "wil-card");
define("WILOKE_WILOKECARD_VIEWS_PATH", plugin_dir_path(__FILE__));
define("WILOKE_WILOKECARD_VIEWS_URL", plugin_dir_url(__FILE__));


add_action("plugins_loaded", "loadPluginDomain");
if (!function_exists("loadPluginDomain")) {
	function loadPluginDomain()
	{
		load_plugin_textdomain("wil-card", false, plugin_dir_path(__FILE__) . "languages");
	}
}

require_once plugin_dir_path(__FILE__) . "vendor/autoload.php";

new \WilokeCard\Controllers\RegistrationController();
new \WilokeCard\Controllers\HandleAjaxController();