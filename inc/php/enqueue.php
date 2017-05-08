<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Create a content for the _load_scripts hook
 *
 * @since 4.0
 */
function SHighlighterForWPE_load_scripts_base() {

    // Read options from BD
    $options = get_option( 'SHighlighterForWPE_settings' );

    // CodeMirror library
    wp_enqueue_script( 'SHighlighterForWPE-codemirror-js', SHWPE_URL . 'inc/lib/codemirror/codemirror-compressed.js' );
    wp_enqueue_style( 'SHighlighterForWPE-codemirror-css', SHWPE_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( 'SHighlighterForWPE-codemirror-setting-js', SHWPE_URL . 'inc/js/codemirror-settings.js', array(), false, true );
    if ( $options['theme'] != "default" ) {
        wp_enqueue_style( 'SHighlighterForWPE-codemirror-theme-css', SHWPE_URL . 'inc/lib/codemirror/theme/' . $options['theme'] . '.css' );
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

    // Create js object and injected it into the js file
    if ( !empty( $options['theme'] ) ) { $theme = $options['theme']; } else { $theme = "default"; };
    if ( !empty( $options['line_numbers'] ) && ( $options['line_numbers'] == "on" ) ) { $line_numbers = "true"; } else { $line_numbers = "false"; };
    if ( !empty( $options['first_line_number'] ) ) { $first_line_number = $options['first_line_number']; } else { $first_line_number = "0"; };
    if ( !empty( $options['tab_size'] ) ) { $tab_size = $options['tab_size']; } else { $tab_size = "4"; };
    $script_params = array(
                           'theme' => $theme,
                           'line_numbers' => $line_numbers,
                           'first_line_number' => $first_line_number,
                           'tab_size' => $tab_size,
                           'mode' => $mode,
                           'readonly' => $readonly,
                           );
    wp_localize_script( 'SHighlighterForWPE-codemirror-setting-js', 'scriptParams', $script_params );
}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.0
 */
function SHighlighterForWPE_load_scripts_admin($hook) {

    // If is a Plugin/Theme Editors page
    if ( 'plugin-editor.php' == $hook || 'theme-editor.php' == $hook )  {

        // Style sheet
        wp_enqueue_style( 'SHighlighterForWPE-editor-css', SHWPE_URL . 'inc/css/editor.css' );
            
        SHighlighterForWPE_load_scripts_base();
    }

    // If is a settings page of this plugin
    if ( 'settings_page_syntax-highlighter-for-wp-editor' == $hook ) {

        // Style sheet
        wp_enqueue_style( 'SHighlighterForWPE-admin-css', SHWPE_URL . 'inc/css/admin.css' );

        // JavaScript
        wp_enqueue_script( 'SHighlighterForWPE-admin-js', SHWPE_URL . 'inc/js/admin.js', array(), false, true );

        // Bootstrap library
        wp_enqueue_style( 'SHighlighterForWPE-bootstrap-css', SHWPE_URL . 'inc/lib/bootstrap/bootstrap.css' );
        wp_enqueue_style( 'SHighlighterForWPE-bootstrap-theme-css', SHWPE_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
        wp_enqueue_script( 'SHighlighterForWPE-bootstrap-js', SHWPE_URL . 'inc/lib/bootstrap/bootstrap.js' );

        // Other libraries
        wp_enqueue_script( 'SHighlighterForWPE-bootstrap-checkbox-js', SHWPE_URL . 'inc/lib/bootstrap-checkbox.js' );

        SHighlighterForWPE_load_scripts_base();
    }
}
add_action( 'admin_enqueue_scripts', 'SHighlighterForWPE_load_scripts_admin' );
