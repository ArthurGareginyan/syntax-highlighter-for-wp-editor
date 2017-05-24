<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.1
 */
function SHighlighterForWPE_uninstall() {
    delete_option( SHWPE_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, SHWPE_PREFIX . '_uninstall' );
