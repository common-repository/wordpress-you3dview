<?php
/*
Plugin Name: Wordpress You3DView
Plugin URI: 
Description: you3dview.com integration. Use the shortcode [u3d video_id="1234" width="640" height="480" fullscreen="true"] into post/page to add the image as panorama. The example shows default data if none provided 
Version: 0.2
Author: Tommaso Visconti
Author URI: http://www.tommyblue.it/
License: GPL2
*/
$wp_You3DView; 
if (!class_exists('You3DViewPlugin')) {
  class You3DViewPlugin {
    function You3DViewPlugin(){
      if(function_exists('add_shortcode')) {
        add_shortcode('u3d', array($this, 'short_code'));
      }
    }
    
    function short_code($atts, $content = null){
      extract(shortcode_atts(
        array(
          'width' => '640',
          'height' => '480',
          'video_id' => '1234',
          'fullscreen' => 'true'
          ), $atts )
        );

      $ret = '[raw]<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'.$width.'" height="'.$height.'" id="/YouTube_video/youtube" align="middle">
      <param name="allowFullScreen" value="'.$fullscreen.'" />
      <param name="allowScriptAccess" value="sameDomain" />
      <param name="movie" value="http://www.you3dview.com/viewer/viewer.swf?xml=http://www.you3dview.com/flvideo/'.$video_id.'/viewer.xml" />
      <param name="quality" value="high" />
      <param name="bgcolor" value="#000000" />
      <embed src="http://www.you3dview.com/viewer/viewer.swf?xml=http://www.you3dview.com/flvideo/'.$video_id.'/viewer.xml" quality="high" bgcolor="#000000" width="'.$width.'" height="'.$height.'" name="pano" align="middle" allowFullScreen="'.$fullscreen.'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
      </object>[/raw]';
      return $ret;
    }	
  }
  $wp_You3DView = new You3DViewPlugin();
}
?>
