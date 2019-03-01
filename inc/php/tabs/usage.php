<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Usage Tab Content
 */
?>
    <div class="postbox">
        <h3 class="title"><?php _e( 'Usage Instructions', $text ); ?></h3>
        <div class="inside">
            <p><?php _e( 'To replace the default Theme/Plugin editor with an enhanced editor that provided by this plugin, simply follow these steps:', $text ); ?></p>
            <ol class="custom-counter">
                <li><?php _e( 'Go to the "Settings" tab on this page.', $text ); ?></li>
                <li><?php _e( 'Select the desired settings.', $text ); ?></li>
                <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                <li><?php _e( 'Enjoy your fancy Theme/Plugin Editor.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
            </ol>
            <p class="note">
                <?php
                    printf(
                        __( 'If you want more options, then %s let us know %s and we will be happy to add them.', $text ),
                        '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                        '</a>'
                    );
                ?>
            </p>
        </div>
    </div>
<?php
