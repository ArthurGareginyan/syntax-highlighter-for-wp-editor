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

                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $text ); ?></span>
                    </button>

                    <div class="postbox" id="settings">
                        <h3 class="title"><?php _e( 'Main Settings', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', $text ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p009_control_list( 'theme',
                                                                    array(
                                                                           'default'                 => 'Default',
                                                                           '3024-day'                => '3024 day',
                                                                           '3024-night'              => '3024 night',
                                                                           'ambiance-mobile'         => 'Ambiance mobile',
                                                                           'ambiance'                => 'Ambiance',
                                                                           'base16-dark'             => 'Base16 dark',
                                                                           'base16-light'            => 'Base16 light',
                                                                           'blackboard'              => 'Blackboard',
                                                                           'cobalt'                  => 'Cobalt',
                                                                           'colorforth'              => 'Colorforth',
                                                                           'eclipse'                 => 'Eclipse',
                                                                           'elegant'                 => 'Elegant',
                                                                           'erlang-dark'             => 'Erlang dark',
                                                                           'lesser-dark'             => 'Lesser dark',
                                                                           'liquibyte'               => 'Liquibyte',
                                                                           'mbo'                     => 'MBO',
                                                                           'mdn-like'                => 'MDN like',
                                                                           'midnight'                => 'Midnight',
                                                                           'monokai'                 => 'Monokai',
                                                                           'neat'                    => 'Neat',
                                                                           'neo'                     => 'Neo',
                                                                           'night'                   => 'Night',
                                                                           'paraiso-dark'            => 'Paraiso dark',
                                                                           'paraiso-light'           => 'Paraiso light',
                                                                           'pastel-on-dark'          => 'Pastel on dark',
                                                                           'rubyblue'                => 'Rubyblue',
                                                                           'solarized'               => 'Solarized',
                                                                           'the-matrix'              => 'The matrix',
                                                                           'tomorrow-night-bright'   => 'Tomorrow night bright',
                                                                           'tomorrow-night-eighties' => 'Tomorrow night eighties',
                                                                           'ttcn'                    => 'TTCN',
                                                                           'twilight'                => 'Twilight',
                                                                           'vibrant-ink'             => 'Vibrant ink',
                                                                           'xq-dark'                 => 'XQ dark',
                                                                           'xq-light'                => 'XQ light',
                                                                           'zenburn'                 => 'Zenburn'
                                                                         ),
                                                                   __( 'Color theme', $text ),
                                                                   __( 'You can choose the theme which you like to view.', $text ),
                                                                   'default'
                                                                 );
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
