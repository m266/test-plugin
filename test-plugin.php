<?php
/*
Plugin Name:        Test-Plugin
Plugin URI:         https://github.com/m266/test-plugin
Description:        Test-Plugin
Author:             Hans M. Herbrand
Author URI:         https://www.herbrand.org
Version:            1.3
Date:               2024-05-24
Text Domain:        test-plugin
License:            GNU General Public License v2 or later
License URI:        http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI:  https://github.com/m266/test-plugin
 */

// Plugin-Code
// Externer Zugriff verhindern
defined('ABSPATH') || exit();
// Plugin ersetzen
register_activation_hook(__FILE__, 'test_plugin_activate'); // Funktions-Name anpassen
function test_plugin_activate()
{ // Funktions-Name anpassen
    $to = get_option('admin_email');
    $subject = 'Plugin "Test-Plugin"'; // Plugin-Name anpassen
    $message = 'Bitte beachten:
Nach dieser Anleitung vorgehen: https://herbrand.org/wordpress/eigene-plugins/wp-h-data-protection/!';
    wp_mail($to, $subject, $message);
}