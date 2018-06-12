<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Base for the _load_scripts hook
 */
function spacexchimp_p009_load_scripts_base( $options ) {

    // Put value of constants to variables for easier access
    $slug = SPACEXCHIMP_P009_SLUG;
    $prefix = SPACEXCHIMP_P009_PREFIX;
    $url = SPACEXCHIMP_P009_URL;
    $version = SPACEXCHIMP_P009_VERSION;

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // CodeMirror library
    wp_enqueue_style( $prefix . '-codemirror-css', $url . 'inc/lib/codemirror/lib/codemirror.css', array(), $version, 'all' );
    wp_enqueue_script( $prefix . '-codemirror-js', $url . 'inc/lib/codemirror/lib/codemirror.js', array(), $version, false );
    wp_enqueue_script( $prefix . '-codemirror-settings-js', $url . 'inc/js/codemirror-settings.js', array(), $version, true );
    $modes = array( 'clike', 'css', 'htmlmixed', 'javascript', 'markdown', 'php', 'xml' );
    foreach ( $modes as $mode ) {
        wp_enqueue_script( $prefix . '-codemirror-mode-' . $mode . '-js', $url . 'inc/lib/codemirror/mode/' . $mode . '/' . $mode . '.js', array(), $version, true );
    }
    $theme = !empty( $options['theme'] ) ? $options['theme'] : 'default';
    if ( $theme != "default" ) {
        wp_enqueue_style( $prefix . '-codemirror-theme-css', $url . 'inc/lib/codemirror/theme/' . $theme . '.css', array(), $version, 'all' );
    }

    // Check the extension of loaded file and change the Mode of CodeMirror
    global $file;
    if ( !empty( $file )) {
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

        $readonly = '';

    } else {
        $mode = 'application/x-httpd-php';
        $readonly = 'true';
    }

    // Dynamic JS. Create JS object and injected it into the JS file
    $theme = !empty( $options['theme'] ) ? $options['theme'] : 'default';
    $first_line_number = !empty( $options['first_line_number'] ) ? $options['first_line_number'] : '0';
    $tab_size = !empty( $options['tab_size'] ) ? $options['tab_size'] : '4';
    if ( !empty( $options['line_numbers'] ) && ( $options['line_numbers'] == "on" ) ) {
        $line_numbers = "true";
    } else {
        $line_numbers = "false";
    }
    $script_params = array(
                           'theme' => $theme,
                           'line_numbers' => $line_numbers,
                           'first_line_number' => $first_line_number,
                           'tab_size' => $tab_size,
                           'mode' => $mode,
                           'readonly' => $readonly
                           );
    wp_localize_script( $prefix . '-codemirror-settings-js', $prefix . '_scriptParams', $script_params );

}

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p009_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = SPACEXCHIMP_P009_SLUG;
    $prefix = SPACEXCHIMP_P009_PREFIX;
    $url = SPACEXCHIMP_P009_URL;
    $settings = SPACEXCHIMP_P009_SETTINGS;
    $version = SPACEXCHIMP_P009_VERSION;

    // If is a Plugin/Theme Editors page
    if ( 'plugin-editor.php' == $hook || 'theme-editor.php' == $hook )  {

        // Read options from database
        $options = get_option( $settings . '_settings' );

        // Style sheet
        wp_enqueue_style( $prefix . '-editor-css', $url . 'inc/css/editor.css', array(), $version, 'all' );

        spacexchimp_p009_load_scripts_base( $options );
    }

    // If is a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page == $hook ) {

        // Read options from database
        $options = get_option( $settings . '_settings' );

        // Bootstrap library
        wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css', array(), $version, 'all' );
        wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css', array(), $version, 'all' );
        wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js', array(), $version, false );

        // Font Awesome library
        wp_enqueue_style( $prefix . '-font-awesome-css', $url . 'inc/lib/font-awesome/css/font-awesome.css', array(), $version, 'screen' );

        // Other libraries
        wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js', array(), $version, false );

        // Style sheet
        wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css', array(), $version, 'all' );

        // JavaScript
        wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), $version, true );

        // Call the function that contain a basis of scripts
        spacexchimp_p009_load_scripts_base( $options );
    }

}
add_action( 'admin_enqueue_scripts', 'spacexchimp_p009_load_scripts_admin' );
