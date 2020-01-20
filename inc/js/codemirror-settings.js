/*
 * CodeMirror editor settings
 *
 * @package     Syntax Highlighter for Theme/Plugin Editor
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2020 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Get values for variables
    var theme = spacexchimp_p009_scriptParams["theme"];
    var line_numbers = ( spacexchimp_p009_scriptParams["line_numbers"] == 'true' );
    var first_line_number = parseInt( spacexchimp_p009_scriptParams["first_line_number"] );
    var tab_size = parseInt( spacexchimp_p009_scriptParams["tab_size"] );
    var mode = spacexchimp_p009_scriptParams["mode"];
    var readonly = spacexchimp_p009_scriptParams["readonly"];

    // Find textareas on page and replace them with the CodeMirror editor
    $('textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: line_numbers,
            firstLineNumber: first_line_number,
            matchBrackets: true,
            indentUnit: tab_size,
            theme: theme,
            mode: mode,
            autoRefresh: true,
            readOnly: readonly
        });
    });

});
