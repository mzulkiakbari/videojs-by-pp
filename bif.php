
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2020 by samueleastdev (http://jsbin.com/semolid/31/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
    <title>OM Demo</title>
    <!-- <script src="videojs/skin/pkplayer.js"></script> -->
    <link href="video-js.css" rel="stylesheet">
    <link href="videojs/plugin/frame/videojs-frame.css" rel="stylesheet">
    <link href="videojs-resolution-switcher.css" rel="stylesheet">

</head>
<style>
  #pokoplayer {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

button:focus {
  outline:none;
  box-shadow: none;
}

video:focus {
  outline:none;
  box-shadow: none;
}
  </style>
<body>
                <video id="pokoplayer" class="video-js pkplayer"></video>
                <script src="video.js"></script>
                <script src="videojs-resolution-switcher.js"></script>
                <script src="videojs/plugin/frame/videojs-frame.js"></script>

    <script>
        var PkPlayer = videojs('pokoplayer',{
          "controls" : true,
          "autoplay" : true,
          "preload" : "metadata",
          "width" : "100%",
          "height" : "auto",
          "poster" : "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/images/BigBuckBunny.jpg",
          sources : [
          <?php echo file_get_contents('videolist.txt');?>
          ],
        });
        videojs('pokoplayer').videoJsResolutionSwitcher();
        PkPlayer.frames({
            clippingEnabled: false,
            framerate: 23.98,
            bif: 'BIF.bif'
        });

    </script>

</body>
</html>
