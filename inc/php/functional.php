<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render checkboxes and fields for saving settings data to database
 *
 * @since 4.5
 */
function SHighlighterForWPE_setting( $name, $label, $help=null, $field=null, $placeholder=null, $size=null ) {

    // Read options from database and declare variables
    $options = get_option( SHWPE_SETTINGS . '_settings' );
    $value = !empty( $options[$name] ) ? esc_textarea( $options[$name] ) : '';

    // Generate the table
    $checked = !empty( $options[$name] ) ? "checked='checked'" : '';

    if ( $field == "check" ) {
        $input = "<input type='checkbox' name='" . SHWPE_SETTINGS . "_settings[$name]' id='" . SHWPE_SETTINGS . "_settings[$name]' $checked class='$name' >";
    } elseif ( $field == "field" ) {
        $input = "<input type='text' name='" . SHWPE_SETTINGS . "_settings[$name]' id='" . SHWPE_SETTINGS . "_settings[$name]' size='$size' value='$value' placeholder='$placeholder' class='$name' >";
    }

    // Put table to the variables $out and $help_out
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    $input
                </td>
            </tr>";
    if ( !empty( $help ) ) {
        $help_out = "<tr>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    } else {
        $help_out = "";
    }

    // Print the generated table
    echo $out . $help_out;
}
