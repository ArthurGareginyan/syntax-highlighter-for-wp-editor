<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p009_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;
    $list = array(
        'first_line_number' => (integer) '0', // _control_number
        'hidden_scrollto' => (integer) '0', // _control_hidden
        'line_numbers' => (boolean) '', // _control_switch
        'tab_size' => (integer) '4', // _control_number
        'theme' => (string) 'default', // _control_list
    );
    foreach ( $list as $name => $default ) {

        // Set default value if option is empty
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;

        // Cast and validate by type of option
        if ( is_string( $default ) === true ) {
            $array[$name] = (string) $array[$name];
        } elseif ( is_int( $default ) === true ) {
            $array[$name] = (integer) $array[$name];
        } elseif ( is_bool( $default ) === true ) {
            $array[$name] = filter_var( $array[$name], FILTER_VALIDATE_BOOLEAN );
        }
    }

    // Sanitize data
    $array['theme'] = sanitize_text_field( $array['theme'] );

    // Modify data


    // Return the processed data
    return $array;
}
