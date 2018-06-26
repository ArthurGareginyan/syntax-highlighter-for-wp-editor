/*
 * Settings of CodeMirror editor
 *
 * @package     Syntax Highlighter for Theme/Plugin Editor
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2018 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Get values for variables
    var line_numbers = ( spacexchimp_p009_scriptParams["line_numbers"] == 'true' );
    var first_line_number = parseInt( spacexchimp_p009_scriptParams["first_line_number"] );
    var tab_size = parseInt( spacexchimp_p009_scriptParams["tab_size"] );
    var theme = spacexchimp_p009_scriptParams["theme"];
    var mode = spacexchimp_p009_scriptParams["mode"];
    var readonly = spacexchimp_p009_scriptParams["readonly"];

    // Find textareas on page and replace them with the CodeMirror editor
    $('textarea').each(function(index, elements) {
        var editor = CodeMirror.fromTextArea( elements, {
            lineNumbers: line_numbers,
            firstLineNumber: first_line_number,
            matchBrackets: true,
            indentUnit: tab_size,
            readOnly: readonly,
            theme: theme,
            mode: mode
        });
    });

});
