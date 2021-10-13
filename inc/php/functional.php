<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Disable the Syntax Highlighting feature that is integrated into WordPress v4.9 (CodeMirror library)
 */
function spacexchimp_p009_disable_integrated_codemirror() {
    $user_id = get_current_user_id();
    $new_value = "false";
    update_user_meta( $user_id, 'syntax_highlighting', $new_value );
}
add_action( 'plugins_loaded', 'spacexchimp_p009_disable_integrated_codemirror' );
