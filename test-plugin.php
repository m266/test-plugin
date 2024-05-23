<?php
/*
Plugin Name:        Test-Plugin
Plugin URI:         https://github.com/m266/test-plugin
Description:        Test-Plugin
Author:             Hans M. Herbrand
Author URI:         https://www.herbrand.org
Version:            1.2
Date:               2024-05-23
Text Domain:        test-plugin
License:            GNU General Public License v2 or later
License URI:        http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI:  https://github.com/m266/test-plugin
 */

// Plugin-Code
// Externer Zugriff verhindern
defined('ABSPATH') || exit();
// Erinnerung an Git Updater
register_activation_hook(__FILE__, 'wphgb_activate'); // Funktions-Name anpassen
function wphgb_activate()
{ // Funktions-Name anpassen
    $to = get_option('admin_email');
    $subject = 'Plugin "WP H-Guestbook"'; // Plugin-Name anpassen
    $message = 'Falls nicht vorhanden:
Bitte das Plugin "Git Updater" hier https://herbrand.org/tutorials/github/git-updater/ herunterladen,
installieren und aktivieren, um weiterhin Updates zu erhalten!';
    wp_mail($to, $subject, $message);
}