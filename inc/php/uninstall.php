<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function SHighlighterForWPE_uninstall() {
    delete_option( 'SHighlighterForWPE_settings' );
}
register_uninstall_hook( __FILE__, 'SHighlighterForWPE_uninstall' );
