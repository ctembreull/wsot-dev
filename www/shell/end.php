  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="/js/jquery-1.4.2.min.js"><\/script>')</script>


  <script src="/js/plugins.js?v=1"></script>
  <script src="/js/script.js?v=1"></script>

  <!--[if lt IE 7 ]>
    <script src="/js/dd_belatedpng.js?v=1"></script>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <script src="/js/profiling/yahoo-profiling.min.js?v=1"></script>
  <script src="/js/profiling/config.js?v=1"></script>
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID -->
  <!--
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  -->
  <?php if($inputs["debug"] == true) { ?>
  <div style="border: 2px solid gray;">
  <?php var_dump($_SESSION) ?>
  </div>
  <?php }?>
</body>
</html>

<?php
unset($_SESSION["flash"]);
?>