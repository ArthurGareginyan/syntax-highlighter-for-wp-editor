<?php

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
    $array['hidden_scrollto'] = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';
    $array['theme'] = !empty( $options['theme'] ) ? $options['theme'] : 'default';
    $array['line_numbers'] = !empty( $options['line_numbers'] ) ? $options['line_numbers'] : '';
    $array['first_line_number'] = !empty( $options['first_line_number'] ) ? $options['first_line_number'] : '0';
    $array['tab_size'] = !empty( $options['tab_size'] ) ? $options['tab_size'] : '4';

    // Sanitize data


    // Modify data
    $array['line_numbers'] = ( $array['line_numbers'] == "on" ) ? 'true' : 'false';

    // Return the processed data
    return $array;
}
