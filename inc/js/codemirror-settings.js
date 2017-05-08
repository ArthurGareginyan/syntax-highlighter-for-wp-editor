/*
 * Settings of CodeMirror editor
 *
 * @package     Syntax Highlighter for Theme/Plugin Editor
 * @uthor       Arthur Gareginyan
 * @link        http://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 * @since       4.0
 */


jQuery(document).ready(function($) {

    "use strict";

    // Get values for variables
    var line_numbers = ( scriptParams["line_numbers"] == 'true' );
    var first_line_number = parseInt( scriptParams["first_line_number"] );
    var tab_size = parseInt( scriptParams["tab_size"] );
    var theme = scriptParams["theme"];
    var mode = scriptParams["mode"];
    var readonly = scriptParams["readonly"];

    // Find textareas on page
    $('textarea').each(function(index, elements) {

        // Change editor to CodeMirror
        var editor = CodeMirror.fromTextArea( elements , {
                                lineNumbers: line_numbers,
                                firstLineNumber: first_line_number,
                                matchBrackets: true,
                                indentUnit: tab_size,
                                readOnly: readonly,
                                theme: theme,
                                mode: mode
        });

        // Refresh CodeMirror editor
        editor.refresh();

    });

});
