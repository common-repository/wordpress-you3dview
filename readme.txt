=== Plugin Name ===
Contributors: tommyblue
Donate link: http://www.tommyblue.it/
Tags: you3dview
Requires at least: 2.5
Tested up to: 3.2
Stable tag: 0.2

Insert you3dview.com panoramas with a shortcode 

== Description ==

you3dview.com integration. Use the shortcode [u3d video_id="1234" width="640" height="480" fullscreen="true"] into post/page to add the image as panorama. The example shows default data if none provided.

You can extract the video_id from the embedded code the service will give you. As example you can extract the id 1234 from this part of the embedded code:

http://www.you3dview.com/viewer/viewer.swf?xml=http://www.you3dview.com/flvideo/1234/viewer.xml

== Installation ==

1. Upload `you3dview.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the [u3d] shortcode in posts or pages.

The shortcode arguments are:

* video_id: The id of the panorama. Read "Description" or "FAQ" to know how to get it.
* width: Width of the image (in pixels). Default: 640
* height: Height of the image (in pixels). Default: 480
* fullscreen: indicates if the panorama can be put fullscreen. Values: true|false. Default: true

== Frequently Asked Questions ==

= How can I find the video ID? =

Look at the embed code you3dview.com gave you. You'll find the panorama URL containing the ID, e.g. http://www.you3dview.com/viewer/viewer.swf?xml=http://www.you3dview.com/flvideo/1234/viewer.xml where 1234 is the ID you need. 
= How can I get support? =

Write me at tommaso.visconti[at]gmail.com ([at] == @) and I'll try to help you

== Screenshots ==

No screenshots

== Changelog ==

= 0.2 =
* Changes to the readme

= 0.1 =
* First public version

== Upgrade Notice ==

= 0.2 =
Don't worry, only changes to the readme :)
