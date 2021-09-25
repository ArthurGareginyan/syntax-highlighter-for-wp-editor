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

    // Set default value if option is empty
    $list = array(
        'first_line_number' => '0', // _control_number
        'hidden_scrollto' => '0', // _control_hidden
        'line_numbers' => '', // _control_switch
        'tab_size' => '4', // _control_number
        'theme' => 'default', // _control_list
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    //$array['first_line_number'] = esc_textarea( $array['first_line_number'] );
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );
    //$array['line_numbers'] = esc_textarea( $array['line_numbers'] );
    //$array['tab_size'] = esc_textarea( $array['tab_size'] );
    //$array['theme'] = esc_textarea( $array['theme'] );

    // Modify data
    $array['line_numbers'] = ( $array['line_numbers'] == 'on' || $array['line_numbers'] == '1' || $array['line_numbers'] == 'true' ) ? 'true' : 'false';

    // Return the processed data
    return $array;
}
