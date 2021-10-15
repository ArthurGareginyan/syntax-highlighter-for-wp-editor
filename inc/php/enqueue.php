<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback to enqueue the CodeMirror library
 */
function spacexchimp_p009_load_scripts_codemirror() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p009_options();

    // Enqueue main files of the CodeMirror library
    wp_enqueue_style( $plugin['prefix'] . '-codemirror-css', $plugin['url'] . 'inc/lib/codemirror/lib/codemirror.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-js', $plugin['url'] . 'inc/lib/codemirror/lib/codemirror.js', array(), $plugin['version'], false );

    // Enqueue settings file
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-settings-js', $plugin['url'] . 'inc/js/codemirror-settings.js', array(), $plugin['version'], true );

    // Enqueue addons
    $addons = array(
                    'display' => array( 'autorefresh' )
                   );
    foreach ( $addons as $addons_group_name => $addons_group ) {
        foreach ( $addons_group as $addon ) {
            wp_enqueue_script( $plugin['prefix'] . '-codemirror-addon-' . $addon . '-js', $plugin['url'] . 'inc/lib/codemirror/addon/' . $addons_group_name . '/' . $addon . '.js', array(), $plugin['version'], false );
        }
    }

    // Enqueue modes
    $modes = array(
                    'clike',
                    'css',
                    'htmlmixed',
                    'javascript',
                    'markdown',
                    'php',
                    'xml'
                  );
    foreach ( $modes as $mode ) {
        wp_enqueue_script( $plugin['prefix'] . '-codemirror-mode-' . $mode . '-js', $plugin['url'] . 'inc/lib/codemirror/mode/' . $mode . '/' . $mode . '.js', array(), $plugin['version'], true );
    }

    // Enqueue theme
    if ( $options['theme'] != 'default' ) {
        wp_enqueue_style( $plugin['prefix'] . '-codemirror-theme-css', $plugin['url'] . 'inc/lib/codemirror/theme/' . $options['theme'] . '.css', array(), $plugin['version'], 'all' );
    }

}

/**
 * Callback for the dynamic JavaScript
 */
function spacexchimp_p009_load_scripts_dynamic_js() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p009_options();

    // Check the extension of loaded file and change the Mode of CodeMirror
    global $file;
    if ( ! empty( $file )) {
        $ext = substr( $file, strrpos( $file, '.' ) + 1 );

        switch ( $ext ) {
            case 'css':
                $mode = 'text/css';
                break;

            case 'html':
                $mode = 'text/html';
                break;

            case 'xml':
                $mode = 'text/xml';
                break;

            case 'js':
                $mode = 'text/javascript';
                break;

            case 'php':
                $mode = 'application/x-httpd-php';
                break;

            case 'txt':
                $mode = 'text/x-markdown';
                break;
        }

        $readonly = false;

    } else {
        $mode = 'application/x-httpd-php';
        $readonly = true;
    }

    // Create an array (JS object) with all the settings
    $script_params = array(
                           'theme' => $options['theme'],
                           'line_numbers' => $options['line_numbers'],
                           'first_line_number' => $options['first_line_number'],
                           'tab_size' => $options['tab_size'],
                           'mode' => $mode,
                           'readonly' => $readonly
                           );

    // Inject the array into the JavaScript file
    wp_localize_script( $plugin['prefix'] . '-codemirror-settings-js', $plugin['prefix'] . '_scriptParams', $script_params );
}

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p009_load_scripts_admin( $hook ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // If is a Plugin/Theme Editors page
    if ( 'plugin-editor.php' == $hook || 'theme-editor.php' == $hook )  {

        // Load jQuery library
        wp_enqueue_script( 'jquery' );

        // Style sheet
        wp_enqueue_style( $plugin['prefix'] . '-editor-css', $plugin['url'] . 'inc/css/editor.css', array(), $plugin['version'], 'all' );

        // Call the function that enqueue the CodeMirror library
        spacexchimp_p009_load_scripts_codemirror();

        // Call the function that contains the dynamic JavaScript
        spacexchimp_p009_load_scripts_dynamic_js();
    }

    // If is a settings page of this plugin
    $settings_page = 'settings_page_' . $plugin['slug'];
    if ( $settings_page == $hook ) {

        // Load jQuery library
        wp_enqueue_script( 'jquery' );

        // Bootstrap library
        wp_enqueue_style( $plugin['prefix'] . '-bootstrap-css', $plugin['url'] . 'inc/lib/bootstrap/bootstrap.css', array(), $plugin['version'], 'all' );
        wp_enqueue_style( $plugin['prefix'] . '-bootstrap-theme-css', $plugin['url'] . 'inc/lib/bootstrap/bootstrap-theme.css', array(), $plugin['version'], 'all' );
        wp_enqueue_script( $plugin['prefix'] . '-bootstrap-js', $plugin['url'] . 'inc/lib/bootstrap/bootstrap.js', array(), $plugin['version'], false );

        // Font Awesome library
        wp_enqueue_style( $plugin['prefix'] . '-font-awesome-css', $plugin['url'] . 'inc/lib/font-awesome/css/font-awesome.css', array(), $plugin['version'], 'screen' );

        // Other libraries
        wp_enqueue_script( $plugin['prefix'] . '-bootstrap-checkbox-js', $plugin['url'] . 'inc/lib/bootstrap-checkbox.js', array(), $plugin['version'], false );

        // Style sheet
        wp_enqueue_style( $plugin['prefix'] . '-admin-css', $plugin['url'] . 'inc/css/admin.css', array(), $plugin['version'], 'all' );

        // JavaScript
        wp_enqueue_script( $plugin['prefix'] . '-admin-js', $plugin['url'] . 'inc/js/admin.js', array(), $plugin['version'], true );

        // Call the function that enqueue the CodeMirror library
        spacexchimp_p009_load_scripts_codemirror();

        // Call the function that contains the dynamic JavaScript
        spacexchimp_p009_load_scripts_dynamic_js();
    }

}
add_action( 'admin_enqueue_scripts', $plugin['prefix'] . '_load_scripts_admin' );
