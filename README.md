=== custom-post-edit ===

Contributors: vimes1984

Donate link: http://buildawebdoctor.com

Tags: comments, wordpress post edit

Requires at least: 4.0.0

Tested up to: 3.6

Stable tag: 1.0.0

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

edit custom post types

== Description ==

ok we have a basic implementation
it'll edit a post on the fron end
if the user is logged in your gonna need some checks an your going to need to fill it out with your values
https://github.com/vimes1984/custompostedit/blob/master/customPostEdit.php
is the main file again
line 237-> 262
is the function that actually updates the post
https://github.com/vimes1984/custompostedit/blob/master/includes/customedit.php
is your form
all you need to feed this is your Post/Job ID
and it will update that post
the only other file that does anything
is this one
https://github.com/vimes1984/custompostedit/blob/master/js/custom-post-edit.js
calls the php endpoint we defined in the first file the post_edit_fac
and sends the formobject {}  to that function from the form
you can dump the form anywhere using the shortcode [post_edit]

== Installation ==

1. Upload `` to the `/wp-content/plugins/` directory
1. Activate the plugin through the "Plugins" menu in WordPress
1. Place `<?php do_action("custom-post-edit_hook"); ?>` in your templates

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial Commit