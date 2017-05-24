<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render checkboxes and fields for saving settings data to BD
 *
 * @since 4.1
 */
function SHighlighterForWPE_setting( $name, $label, $help=null, $field=null, $placeholder=null, $size=null ) {

    // Read options from BD
    $options = get_option( SHWPE_SETTINGS . '_settings' );

    if ( !empty( $options[$name] ) ) {
        $value = esc_textarea( $options[$name] );
    } else {
        $value = "";
    }

    // Generate the table
    if ( !empty( $options[$name] ) ) {
        $checked = "checked='checked'";
    } else {
        $checked = "";
    }

    if ( $field == "check" ) {
        $input = "<input type='checkbox' name='" . SHWPE_SETTINGS . "_settings[$name]' id='" . SHWPE_SETTINGS . "_settings[$name]' $checked >";
    } elseif ( $field == "field" ) {
        $input = "<input type='text' name='" . SHWPE_SETTINGS . "_settings[$name]' id='" . SHWPE_SETTINGS . "_settings[$name]' size='$size' value='$value' placeholder='$placeholder' >";
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
