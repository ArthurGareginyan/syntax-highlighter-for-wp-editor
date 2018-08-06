<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback for getting a list of CodeMirror themes
 * @return array of pairs "theme" => "Theme Name" of the CodeMirror themes
 */
function spacexchimp_p009_get_codemirror_theme_pairs() {
    return array(
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
                  'mdn-like'                => 'MDN-like',
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
    );
}

/**
 * Disable the Syntax Highlighting feature that is integrated into WordPress v4.9 (CodeMirror library)
 */
function spacexchimp_p009_disable_integrated_codemirror() {
    $user_id = get_current_user_id();
    $new_value = "false";
    update_user_meta( $user_id, 'syntax_highlighting', $new_value );
}
add_action( 'plugins_loaded', 'spacexchimp_p009_disable_integrated_codemirror' );
