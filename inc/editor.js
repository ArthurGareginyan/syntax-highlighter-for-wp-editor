/*
 * Syntax Highlighter for WP Editor
 * CodeMirror editor settings
 * @since 1.2
 * @agareginyan
 */

(function(){
    "use strict";
    
    jQuery(document).ready(function($) {

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

}());