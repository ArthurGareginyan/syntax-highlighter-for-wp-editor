<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generator of the help text under options
 */
function spacexchimp_p009_control_help( $help=null ) {

    // Return if help text not defined
    if ( empty( $help ) ) {
        return;
    }

    // Generate a part of table
    $out = "<tr>
                <td></td>
                <td class='help-text'>
                    $help
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;
}

/**
 * Generator of the field option for saving plugin settings to database
 */
function spacexchimp_p009_control_field( $name, $label, $help=null, $placeholder=null ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $value = !empty( $options[$name] ) ? esc_textarea( $options[$name] ) : '';

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <input
                        type='text'
                        name='" . $plugin['settings'] . "_settings[$name]'
                        id='" . $plugin['settings'] . "_settings[$name]'
                        value='$value'
                        placeholder='$placeholder'
                        class='control-field $name'
                    >
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p009_control_help( $help );
}

/**
 * Generator of the switch option for saving plugin settings to database
 */
function spacexchimp_p009_control_switch( $name, $label, $help=null ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $checked = !empty( $options[$name] ) ? "checked='checked'" : '';

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <input
                        type='checkbox'
                        name='" . $plugin['settings'] . "_settings[$name]'
                        id='" . $plugin['settings'] . "_settings[$name]'
                        $checked
                        class='control-switch $name'
                    >
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p009_control_help( $help );
}

/**
 * Generator of the number option for saving plugin settings to database
 */
function spacexchimp_p009_control_number( $name, $label, $help=null, $default=null ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $value = !empty( $options[$name] ) ? esc_attr( $options[$name] ) : $default;

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                        <div class='input-group control-number $name'>
                            <span class='input-group-btn'>
                                <button type='button' class='btn btn-danger' data-type='minus' data-field='example'>
                                    <i class='fa fa-minus' aria-hidden='true'></i>
                                </button>
                            </span>
                            <input
                                type='number'
                                name='" . $plugin['settings'] . "_settings[$name]'
                                id='" . $plugin['settings'] . "_settings[$name]'
                                value='$value'
                                maxlength='4'
                                class='form-control text-center'
                            >
                            <span class='input-group-btn'>
                                <button type='button' class='btn btn-success' data-type='plus' data-field='example'>
                                    <i class='fa fa-plus' aria-hidden='true'></i>
                                </button>
                            </span>
                        </div>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p009_control_help( $help );
}

/**
 * Generator of the list option for saving plugin settings to database
 */
function spacexchimp_p009_control_list( $name, $items, $label, $help, $default ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p009_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $option = !empty( $options[$name] ) ? $options[$name] : '';
    $list_item = '';

    foreach ( $items as $item_key => $item_value ) {
        if ( empty( $option ) AND $item_key == $default ) {
            $selected = "selected='selected'";
        } elseif ( $option == $item_key ) {
            $selected = "selected='selected'";
        } else {
            $selected = "";
        }
        $list_item .= "<option
                               id='$item_key'
                               value='$item_key'
                               $selected
                       >$item_value</option>";
    }

    // Generate a part of table
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    <select
                            name='" . $plugin['settings'] . "_settings[$name]'
                            class='control-list $name'
                    >
                        $list_item
                    </select>
                </td>
            </tr>";

    // Print the generated part of table
    echo $out;

    // Print a help text
    spacexchimp_p009_control_help( $help );
}
