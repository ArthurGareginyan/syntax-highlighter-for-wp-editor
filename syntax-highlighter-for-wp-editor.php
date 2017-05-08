<?php
/**
 * Plugin Name: Syntax Highlighter for Theme/Plugin Editor
 * Plugin URI: https://github.com/ArthurGareginyan/syntax-highlighter-for-wp-editor
 * Description: Replaces the defaults WordPress Theme and Plugin Editor with an enhanced editor with syntax highlighting and line numbering.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.0
 * License: GPL3
 * Text Domain: syntax-highlighter-for-wp-editor
 * Domain Path: /languages/
 *
 * Copyright 2016-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "Syntax Highlighter for Theme/Plugin Editor".
 *
 * "Syntax Highlighter for Theme/Plugin Editor" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "Syntax Highlighter for Theme/Plugin Editor" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Syntax Highlighter for Theme/Plugin Editor".  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Define global constants
 *
 * @since 3.2
 */
defined('SHWPE_DIR') or define('SHWPE_DIR', dirname(plugin_basename(__FILE__)));
defined('SHWPE_BASE') or define('SHWPE_BASE', plugin_basename(__FILE__));
defined('SHWPE_URL') or define('SHWPE_URL', plugin_dir_url(__FILE__));
defined('SHWPE_PATH') or define('SHWPE_PATH', plugin_dir_path(__FILE__));
defined('SHWPE_TEXT') or define('SHWPE_TEXT', 'syntax-highlighter-for-wp-editor');
defined('SHWPE_VERSION') or define('SHWPE_VERSION', '4.0');

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( SHWPE_PATH . 'inc/php/core.php' );
require_once( SHWPE_PATH . 'inc/php/enqueue.php' );
require_once( SHWPE_PATH . 'inc/php/version.php' );
require_once( SHWPE_PATH . 'inc/php/functional.php' );
require_once( SHWPE_PATH . 'inc/php/page.php' );
require_once( SHWPE_PATH . 'inc/php/messages.php' );
require_once( SHWPE_PATH . 'inc/php/uninstall.php' );
