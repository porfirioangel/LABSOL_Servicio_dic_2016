<html>
<head>

    <style>
   . {
    width: 100%;
    height: 250px;
    }
    .iframe-class {
        width: 100%;
        height: 100%;
        border: 1px solid red;
        overflow: auto;
    }
    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      height: 0;
    }
    .videoWrapper video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      height: 0;
    }
    .videoWrapper video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: auto;
    }
    .margen{
      margin-top: 50px;
    }
    </style>
    <?php
    include ('../componentes/head.php')
    ?>
</head>
<body>
  <?php
      include ('../componentes/menu.php')
  ?>

    <!-- START THE FEATURETTES -->
<div class="container margen">
  <div class="row featurette margen">
    <!-- Video Streaming
     ========================================================  -->
    <div class="col-md-9 videoWrapper">
      <video controls  autoplay width="560" height="349">
        <source src="http://10.39.224.39:8000/video.mp4" type="video/mp4" />
        <source src="http://10.39.224.39:8000/video.ogv" type="video/ogg" />
        <source src="http://10.39.224.39:8000/video.webm" type="video/webm" />
        <source src="http://10.39.224.39:8000/video.ogg" type="video/ogg" />
        <em>Sorry, your browser doesn't support HTML5 video.</em>
      </video>
    </div>
    <!-- Fin Video Streaming
     ========================================================  -->
  <div class="col-md-3">
    <div id="botones">
      <!--inicio boton facebook -->
         <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.labsol.org/&amp;layout=button_count&amp;show_faces=true&amp;width=150&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true">
         </iframe>
      <!--fin boton facebook -->
      <!--inicio boton g+ -->
        <g:plusone>
             <link rel="canonical" href="http://www.labsol.org" />
        </g:plusone>
      <!--inicio boton g+ -->
       </div>
       <!--Fin boton g+ -->
    <p>Síguenos  en twitter</p>
     <!--chat de twitter -->
    <a class="twitter-timeline" href="https://twitter.com/LiveLabsol" data-widget-id="436216661419364352">Tweets por @LiveLabsol</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>
</div>

   <!-- ================================================== -->

    <footer>
  <?php
      include ('../componentes/footer.php')
  ?>
</footer>

<script type="text/javascript">
  window.___gcfg = {
    lang: 'en-US'
  };
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>