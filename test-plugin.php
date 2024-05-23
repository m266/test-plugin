<?php
/*
Plugin Name:        Test-Plugin
Plugin URI:         https://github.com/m266/test-plugin
Description:        Test-Plugin
Author:             Hans M. Herbrand
Author URI:         https://www.herbrand.org
Version:            1.1
Date:               2024-05-23
Text Domain:        test-plugin
License:            GNU General Public License v2 or later
License URI:        http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI:  https://github.com/m266/test-plugin
 */

// Plugin-Code
// Externer Zugriff verhindern
defined('ABSPATH') || exit();
// Stand: 23.05.2024
// Check, ob Plugin aktiv/inaktiv ist
// Plugin "Test-Plugin" aktiv?
if (!function_exists('is_plugin_active')) {
require_once ABSPATH . '/wp-admin/includes/plugin.php';
}
if (is_plugin_active('test-plugin/test-plugin.php')) {
function test_plugin_notice() { ?>
<div class="notice notice-error">
<p><?php _e('Die Entwicklung des Plugins "Test-Plugin" wurde eingestellt. Bitte nach dieser Anleitung vorgehen: https://herbrand.org/wordpress/eigene-plugins/wp-h-data-protection/!');?></p>
</div>
<?php
}
add_action( 'load-index.php',
function(){
add_action( 'admin_notices', 'test_plugin_notice' );
}
);
}
?>