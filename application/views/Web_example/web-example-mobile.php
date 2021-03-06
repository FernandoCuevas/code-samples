<!DOCTYPE html>
<!--
This is meant as an extension to web-example.php
The main difference within it is not in the controller logic but rather in content
resizing that adapts to the available width.
Check web-sample-mobile.js for resizing logic
-->
<html>
<head>
 <script src="http://player.ooyala.com/v3/<?php echo $player_id; ?>"></script>
 <script src="<?php echo base_url();?>/application/assets/Web_Example/javascript/gaTrack.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/assets/Web_Example/css/web-sample.css">
</head>
<body>
  <h1> Web example </h1>
  <h1 id="video_title"> Title </h1>
    <div class="main">
      <div id='playerwrapper' class="player"></div>
      <p id="description"> Description </p>
      <p id="metadata"> Metadata </p>

      <div class="related_video_container">
        <div class="container">
          <img id="related_1" class="video related_video" src=""/>
          <div id="related_caption_1" class="caption">Caption x</div>
        </div>
        <div class="container">
          <img id="related_2" class="video related_video" src=""/>
          <div id="related_caption_2" class="caption">Caption x</div>
        </div>
        <div class="container">
          <img id="related_3" class="video related_video" src=""/>
          <div id="related_caption_3"class="caption">Caption x</div>
        </div>
      </div>

    </div>

    <script>
      var videoPlayer =
        OO.Player.create('playerwrapper', '<?php echo $embed_code; ?>', {
      });
      var related_videos = <?php echo $related_videos;?>;
    var trending_videos = <?php echo $trending_videos;?>;
    </script>

  <div class="trending_video_container">
      <div class='side_container'>
        <img id="trending_1" class="video trending_video" src=""/>
        <div id="trending_caption_1" class="caption">Trending</div>
      </div>
      <div class='side_container'>
        <img id="trending_2" class="video trending_video" src=""/>
        <div id="trending_caption_2" class="caption">Trending</div>
      </div>
    </div>
    <!-- First source has the logic for onClick events and such, second handles resizing -->
    <script src="<?php echo base_url();?>/application/assets/Web_Example/javascript/web-sample.js"> </script>

    <!-- Example of the Universal GA module. In production you would like to change this -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-304811-17', 'localdevelopment.com');
      ga('send', 'pageview');
    </script>
</body>
</html>