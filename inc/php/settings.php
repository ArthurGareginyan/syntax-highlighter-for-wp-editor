<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Tab
 *
 * @since 3.2
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', SHWPE_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin replaces the defaults WordPress Theme and Plugin Editor with an enhanced editor with syntax highlighting and line numbering', SHWPE_TEXT ); ?></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', SHWPE_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', SHWPE_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', SHWPE_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', SHWPE_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', SHWPE_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', SHWPE_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=Syntax Highlighter for Theme/Plugin Editor">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form name="SHighlighterForWPE-form" action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( 'SHighlighterForWPE_settings_group' ); ?>

                    <?php
                        // Get options from the BD
                        $options = get_option( 'SHighlighterForWPE_settings' );

                        // Declare variables
                        $example = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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

    <p><a href="http://wordpress.org/">WordPress</a></p>
</body>
</html>';
                    ?>

                    <div class="postbox" id="Settings">
                        <h3 class="title"><?php _e( 'Main Settings', SHWPE_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', SHWPE_TEXT ); ?></p>

                            <table class="form-table">

                                <tr>
                                    <th>
                                        <?php _e( 'Color theme:', SHWPE_TEXT ); ?>
                                    </th>
                                    <td>
                                        <select name="SHighlighterForWPE_settings[theme]">
                                            <?php
                                                $themes = array('default', '3024-day', '3024-night', 'ambiance-mobile', 'ambiance', 'base16-dark', 'base16-light', 'blackboard', 'cobalt', 'colorforth', 'eclipse', 'elegant', 'erlang-dark', 'lesser-dark', 'liquibyte', 'mbo', 'mdn-like', 'midnight', 'monokai', 'neat', 'neo', 'night', 'paraiso-dark', 'paraiso-light', 'pastel-on-dark', 'rubyblue', 'solarized', 'the-matrix', 'tomorrow-night-bright', 'tomorrow-night-eighties', 'ttcn', 'twilight', 'vibrant-ink', 'xq-dark', 'xq-light', 'zenburn');
                                                foreach ($themes as $option) {
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
                                        <?php _e( 'Theme which you like to view.', SHWPE_TEXT ); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <?php _e( 'Display line numbers:', SHWPE_TEXT ); ?>
                                    </th>
                                    <td>
                                        <input type="checkbox" name="SHighlighterForWPE_settings[line_numbers]" id="SHighlighterForWPE_settings[line_numbers]" <?php if ( !empty($options['line_numbers']) ) { checked( $options['line_numbers'], "on" ); } ?> >
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <?php _e( 'First line number:', SHWPE_TEXT ); ?>
                                    </th>
                                    <td>
                                        <input type="text" name="SHighlighterForWPE_settings[first_line_number]" id="SHighlighterForWPE_settings[first_line_number]" size="1" value="<?php if ( !empty($options['first_line_number']) ) { echo $options['first_line_number']; } else { echo "0"; } ?>" >
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <?php _e( 'The width of Tab:', SHWPE_TEXT ); ?>
                                    </th>
                                    <td>
                                        <input type="text" name="SHighlighterForWPE_settings[tab_size]" id="SHighlighterForWPE_settings[tab_size]" size="1" value="<?php if ( !empty($options['tab_size']) ) { echo $options['tab_size']; } else { echo "4"; } ?>" >
                                    </td>
                                </tr>
                            </table>
                            <?php submit_button( __( 'Save Changes', SHWPE_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="Preview">
                        <h3 class="title"><?php _e( 'Preview', SHWPE_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save Changes" button to update this preview.', SHWPE_TEXT ); ?></p>
                            <textarea readonly id="SHighlighterForWPE"><?php echo $example; ?></textarea>
                            <p><?php _e( 'This is an example of HTML language.', SHWPE_TEXT ); ?></p>
                        </div>
                    </div>

                    <div id="support-addition" class="postbox">
                        <h3 class="title"><?php _e( 'Support', SHWPE_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', SHWPE_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', SHWPE_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', SHWPE_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
