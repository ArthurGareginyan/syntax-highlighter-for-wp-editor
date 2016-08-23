=== Syntax Highlighter for WP Editor ===
Contributors: Arthur Gareginyan
Tags: code editor, editor, file editor, plugin editor, theme editor, edit, editing, editor, code, php, xml, html ,css, javascript, markdown, codemirror, code mirror, hightlight, syntax highlighting, syntaxhighlighting, syntax highlighter, syntaxhighlighter, syntax,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.6
Stable tag: 2.0
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Replaces the defaults WordPress Theme and Plugin Editor with an enhanced editor with syntax highlighting and line numbering.

== Description ==

An easy to use WordPress plugin that replaces the default Theme and Plugin Source Code Editor with an enhanced editor by a [CodeMirror library](https://codemirror.net/). The WordPress default Theme Editor (in Appearance => Editor) and Plugin Editor (in Plugins => Editor) is great for doing some custom changes to your Themes or Plugins files, although it is rather limited. This is where the "Syntax Highlighter for WP Editor" can help. With an enhanced source code editor you can see a code with syntax highlighting, and with line numbering, so you can easily read your code and detect any errors.

This plugin give you finer control over editor, it can be configured on the plugin settings page. You can chose from 36 different color themes for your editor.

This plugin is just plug and play, no tedious configurations or hacks, just install, enable and start using your new enhanced Theme and Plugin Editor.

= Features =

* Syntax highlighting (by CodeMirror)
* Changeable color theme (36 variants)
* Line numbering
* Editor allow for tab indentation
* Easy to use Settings Page
* Live preview on Settings Page
* Ready for translation (POT file included)

**Supported languages:**

* XML
* HTML
* CSS
* PHP
* JavaScript (.js)
* Markdown (.txt)

= Translation =

Please keep in mind that not all translations are up to date. You are welcome to contribute!

* English (default)
* Russian

>**Contribution**
>
>Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:
>
>* [Donate](http://www.arthurgareginyan.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
>* [Rate and Review](https://wordpress.org/support/view/plugin-reviews/syntax-highlighter-for-wp-editor?rate=5#postform) this plugin.
>* [Share with me](mailto:arthurgareginyan@gmail.com) or view the [GitHub Repo](https://github.com/ArthurGareginyan/syntax-highlighter-for-wp-editor) if you have any ideas or suggestions to make this plugin better.


== Installation ==
Install "Syntax Highlighter for WP Editor" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into WordPress Dashboard of your website.
2. Go to "`Plugins`" —> "`add new plugins`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (zip file) of this plugin from WordPress.org.
2. Unzip the zip file.
3. Upload the unzipped directory to your website's plugin directory (`/wp-content/plugins/`).
4. Log into WordPress Dashboard of your website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Syntax Highlighter for WP Editor`" menu item will appear in the "`Settings`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Does this plugin provide a syntax highlighting for the Page/Post editor? =
A. No, only Theme and Plugin Editor.

= Q. My theme uses a file type that is not supported by this plugin, how can I get it added? =
A. If there is a filetype that is not supported by this plugin, just visit the support page and fill out the support form. I will do my best to include it in the next release.

= Q. Will this Plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. Does this plugin require modification to the theme? =
A. Absolutely not. This plugin is added/configured entirely from the website's Admin section.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is that the plugin has a conflict with another plugin you're using. It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. Where to report bug if found? =
A. Please visit [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/syntax-highlighter-for-wp-editor) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Please send me email [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com).

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit my website and click on the donate link, and thank you! [My website](http://www.arthurgareginyan.com/donate.html)


== Screenshots ==
1. Plugin settings page.
2. Default WP Plugin Editor.
3. Plugin Editor that provided by this plugin (color theme: ambiance).
4. Plugin Editor that provided by this plugin (color theme: default).
5. Theme Editor that provided by this plugin (color theme: ambiance).


== Other Notes ==

"Syntax Highlighter for WP Editor" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

[CodeMirror](https://codemirror.net/) is an open-source project shared under a [MIT license](https://codemirror.net/LICENSE).

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/syntax-highlighter-for-wp-editor)


== Changelog ==
= 2.0.1 =
* POT file updated.
* Russian translation updated.
* Image "thanks.png" removed.
* Advertisement replaced by new.
* Added the subject with plugin name to email address on settings page.
* Function "SHighlighterForWPE_enqueue_editor_scripts" renamed to "SHighlighterForWPE_load_scripts".
= 2.0 =
* Text domain changed to "syntax-highlighter-for-wp-editor".
* Added compatibility with the translate.wordpress.org.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.
= 1.2 =
* Constants variables added. (Thanks @hsleonis)
* JS best practice used in editor.js. (Thanks @hsleonis)
= 1.1 =
* Fixed: Undefined variable "readonly".
= 1.0 =
* Added default values for options.
* Added support for Markdown files.
* Added support for XML files.
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* Added ready for translation (.pot file included).
* Added Russian translation.
* Some changes in design of settings page.
= 0.3 =
* Added option "Display line numbers".
* Added option "First line number".
* Added option "The width of Tab".
= 0.2 =
* Beta version.
= 0.1 =
* Alfa version.


== Upgrade Notice ==
= 1.0 =
Please update to first stable release!
= 0.3 =
Prerelease.
= 0.2 =
Please update to beta version.
