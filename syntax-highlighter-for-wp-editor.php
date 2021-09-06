<?php
/**
 * Plugin Name: Syntax Highlighter for Theme/Plugin Editor
 * Plugin URI: https://github.com/ArthurGareginyan/syntax-highlighter-for-wp-editor
 * Description: Replaces the defaults WordPress Theme/Plugin Editor with an enhanced editor with syntax highlighting, line numbering, etc.
 * Author: Space X-Chimp
 * Author URI: https://www.spacexchimp.com
 * Version: 4.50
 * License: GPL3
 * Text Domain: syntax-highlighter-for-wp-editor
 * Domain Path: /languages/
 *
 * Copyright 2016-2021 Space X-Chimp ( website : https://www.spacexchimp.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗██████╗  █████╗  ██████╗███████╗    ██╗  ██╗      ██████╗██╗  ██╗██╗███╗   ███╗██████╗
 * ██╔════╝██╔══██╗██╔══██╗██╔════╝██╔════╝    ╚██╗██╔╝     ██╔════╝██║  ██║██║████╗ ████║██╔══██╗
 * ███████╗██████╔╝███████║██║     █████╗       ╚███╔╝█████╗██║     ███████║██║██╔████╔██║██████╔╝
 * ╚════██║██╔═══╝ ██╔══██║██║     ██╔══╝       ██╔██╗╚════╝██║     ██╔══██║██║██║╚██╔╝██║██╔═══╝
 * ███████║██║     ██║  ██║╚██████╗███████╗    ██╔╝ ██╗     ╚██████╗██║  ██║██║██║ ╚═╝ ██║██║
 * ╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝╚══════╝    ╚═╝  ╚═╝      ╚═════╝╚═╝  ╚═╝╚═╝╚═╝     ╚═╝╚═╝
 *
 */


/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function spacexchimp_p009_define_constants( $constant_name, $value ) {
    $constant_name = 'SPACEXCHIMP_P009_' . $constant_name;
    if ( ! defined( $constant_name ) )
        define( $constant_name, $value );
}
spacexchimp_p009_define_constants( 'FILE', __FILE__ );
spacexchimp_p009_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p009_define_constants( 'BASE', plugin_basename( __FILE__ ) );
spacexchimp_p009_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
spacexchimp_p009_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
spacexchimp_p009_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p009_define_constants( 'NAME', $plugin_data['name'] );
spacexchimp_p009_define_constants( 'VERSION', $plugin_data['version'] );
spacexchimp_p009_define_constants( 'TEXT', $plugin_data['text'] );
spacexchimp_p009_define_constants( 'PREFIX', 'spacexchimp_p009' );
spacexchimp_p009_define_constants( 'SETTINGS', 'spacexchimp_p009' );

/**
 * A useful function that returns an array with the contents of the plugin constants
 */
function spacexchimp_p009_plugin() {
    $array = array(
        'file'     => SPACEXCHIMP_P009_FILE,
        'dir'      => SPACEXCHIMP_P009_DIR,
        'base'     => SPACEXCHIMP_P009_BASE,
        'url'      => SPACEXCHIMP_P009_URL,
        'path'     => SPACEXCHIMP_P009_PATH,
        'slug'     => SPACEXCHIMP_P009_SLUG,
        'name'     => SPACEXCHIMP_P009_NAME,
        'version'  => SPACEXCHIMP_P009_VERSION,
        'text'     => SPACEXCHIMP_P009_TEXT,
        'prefix'   => SPACEXCHIMP_P009_PREFIX,
        'settings' => SPACEXCHIMP_P009_SETTINGS
    );
    return $array;
}

/**
 * Put value of plugin constants into an array for easier access
 */
$plugin = spacexchimp_p009_plugin();

/**
 * Load the plugin modules
 */
require_once( $plugin['path'] . 'inc/php/core.php' );
require_once( $plugin['path'] . 'inc/php/options.php' );
require_once( $plugin['path'] . 'inc/php/upgrade.php' );
require_once( $plugin['path'] . 'inc/php/versioning.php' );
require_once( $plugin['path'] . 'inc/php/enqueue.php' );
require_once( $plugin['path'] . 'inc/php/functional.php' );
require_once( $plugin['path'] . 'inc/php/controls.php' );
require_once( $plugin['path'] . 'inc/php/page.php' );
require_once( $plugin['path'] . 'inc/php/messages.php' );
