/*
 * Settings of CodeMirror editor
 *
 * @package     Syntax Highlighter for Theme/Plugin Editor
 * @uthor       Arthur Gareginyan
 * @link        https://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 * @since       4.1
 */


jQuery(document).ready(function($) {

    "use strict";

    // Get values for variables
    var line_numbers = ( SHighlighterForWPE_scriptParams["line_numbers"] == 'true' );
    var first_line_number = parseInt( SHighlighterForWPE_scriptParams["first_line_number"] );
    var tab_size = parseInt( SHighlighterForWPE_scriptParams["tab_size"] );
    var theme = SHighlighterForWPE_scriptParams["theme"];
    var mode = SHighlighterForWPE_scriptParams["mode"];
    var readonly = SHighlighterForWPE_scriptParams["readonly"];

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
