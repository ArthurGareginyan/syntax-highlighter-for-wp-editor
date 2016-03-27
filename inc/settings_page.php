<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function SHighlighterForWPE_render_submenu_page() {

	// Declare variables
    $options = get_option( 'SHighlighterForWPE_settings' );
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

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Syntax Highlighter for WP Editor', 'SHighlighterForWPE' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'SHighlighterForWPE' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'SHighlighterForWPE' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin replaces the defaults WordPress Theme and Plugin Editor with an enhanced editor with syntax highlighting and line numbering', 'SHighlighterForWPE' ) ?></p>
                            <p> <?php _e( 'To use, select the desired settings, then click "Save Changes". It\'s that simple!', 'SHighlighterForWPE' ) ?></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'SHighlighterForWPE' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'SHighlighterForWPE' ) ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'SHighlighterForWPE' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'SHighlighterForWPE' ) ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'SHighlighterForWPE' ) ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'SHighlighterForWPE' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'SHighlighterForWPE' ) ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'SHighlighterForWPE' ) ?></p>
                            <p><a href="http://www.arthurgareginyan.com/" target="_blank">www.arthurgareginyan.com</a></p>
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

                            <div class="postbox" id="Settings">
                                <h3 class="title"><?php _e( 'Main Settings', 'SHighlighterForWPE' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'There you can configure this plugin.', 'SHighlighterForWPE' ); ?></p>

                                    <table class="form-table">

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'Color theme:', 'SHighlighterForWPE' ); ?>
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
                                        <tr valign='top'>
                                            <td></td>
                                            <td class='help-text'>
                                                <?php _e( 'Theme which you like to view.', 'SHighlighterForWPE' ); ?>
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'Display line numbers:', 'SHighlighterForWPE' ); ?>
                                            </th>
                                            <td>
                                                <input type="checkbox" name="SHighlighterForWPE_settings[line_numbers]" id="SHighlighterForWPE_settings[line_numbers]" <?php if ( !empty($options['line_numbers']) ) { checked( $options['line_numbers'], "on" ); } ?> >
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'First line number:', 'SHighlighterForWPE' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" name="SHighlighterForWPE_settings[first_line_number]" id="SHighlighterForWPE_settings[first_line_number]" size="1" value="<?php if ( !empty($options['first_line_number']) ) { echo $options['first_line_number']; } else { echo "0"; } ?>" >
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th>
                                                <?php _e( 'The width of Tab:', 'SHighlighterForWPE' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" name="SHighlighterForWPE_settings[tab_size]" id="SHighlighterForWPE_settings[tab_size]" size="1" value="<?php if ( !empty($options['tab_size']) ) { echo $options['tab_size']; } else { echo "4"; } ?>" >
                                            </td>
                                        </tr>
                                    </table>
                                    <?php submit_button( __( 'Save Changes', 'SHighlighterForWPE' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', 'SHighlighterForWPE' ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'Click "Save Changes" to update this preview.', 'SHighlighterForWPE' ); ?></p>
                                    <textarea readonly id="SHighlighterForWPE"><?php echo $example; ?></textarea>
                                    <p><?php _e( 'This is an example of HTML language.', 'SHighlighterForWPE' ); ?></p>
                                </div>
                            </div>

                        </form>
                        <!-- END-FORM -->

                    </div>
                </div>
            </div>

        </div>

	</div>
	<?php
}