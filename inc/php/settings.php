<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SPACEXCHIMP_P009_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( SPACEXCHIMP_P009_SETTINGS . '_settings' );
                    ?>

                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $text ); ?></span>
                    </button>

                    <div class="postbox" id="settings">
                        <h3 class="title"><?php _e( 'Main Settings', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', $text ); ?></p>
                            <table class="form-table">

                                <tr>
                                    <th>
                                        <?php _e( 'Color theme', $text ); ?>
                                    </th>
                                    <td>
                                        <select name="spacexchimp_p009_settings[theme]">
                                            <?php
                                                $themes = array('default', '3024-day', '3024-night', 'ambiance-mobile', 'ambiance', 'base16-dark', 'base16-light', 'blackboard', 'cobalt', 'colorforth', 'eclipse', 'elegant', 'erlang-dark', 'lesser-dark', 'liquibyte', 'mbo', 'mdn-like', 'midnight', 'monokai', 'neat', 'neo', 'night', 'paraiso-dark', 'paraiso-light', 'pastel-on-dark', 'rubyblue', 'solarized', 'the-matrix', 'tomorrow-night-bright', 'tomorrow-night-eighties', 'ttcn', 'twilight', 'vibrant-ink', 'xq-dark', 'xq-light', 'zenburn');
                                                foreach ( $themes as $option ) {
                                                    $selected = selected( $options['theme'], $option );
                                                    echo '<option value="' . $option . '" id="' . $option . '"' . $selected . ' >' . $option . '</option>';
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class='help-text'>
                                        <?php _e( 'You can choose the theme which you like to view.', $text ); ?>
                                    </td>
                                </tr>

                                <?php
                                    spacexchimp_p009_control_switch( 'line_numbers',
                                                                     __( 'Line numbers', $text ),
                                                                     __( 'Display the line numbers in the code block.', $text )
                                                                   );
                                    spacexchimp_p009_control_number( 'first_line_number',
                                                                     __( 'First line number', $text ),
                                                                     __( 'You can set the number of the first line.', $text ),
                                                                     '0'
                                                                   );
                                    spacexchimp_p009_control_number( 'tab_size',
                                                                     __( 'Size of Tab', $text ),
                                                                     __( 'The width (in spaces) of Tab. Default is 4.', $text ),
                                                                     '4'
                                                                   );
                                ?>
                            </table>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-default btn-lg button-save-main" value="<?php _e( 'Save changes', $text ); ?>">

                    <div class="postbox" id="preview">
                        <h3 class="title"><?php _e( 'Preview', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save changes" button to update this preview.', $text ); ?></p>
                            <?php
                                // Put the example in a variable
                                $example = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Code Example</title>
</head>
<body>
    <h1>Code Example</h1>

    <p><?php echo "Hello World!"; ?></p>

    <div class="foobar">
        This    is  an
        example of  smart
        tabs.
    </div>

    <p><a href="https://wordpress.org/">WordPress</a></p>
</body>
</html>';
                            ?>
                            <textarea readonly id="SHighlighterForWPE"><?php echo $example; ?></textarea>
                            <p><?php _e( 'This is an example of HTML language.', $text ); ?></p>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                                        <span class="btn-label">
                                                            <img src="<?php echo SPACEXCHIMP_P009_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                                        </span>
                                                        <?php _e( 'Donate with PayPal', $text ); ?>
                                                </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
