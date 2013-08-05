<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"> </script>
	<script type="text/javascript" src="http://underscorejs.org/underscore-min.js"></script>
		<script type="text/javascript" src="get-forces.js"> </script>
	
	<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBty7ny0Ycp9s9v4BXfxNi4ex2VIWfL8LE&sensor=true">
    </script>
    <script type="text/javascript">

      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(53.483282, -2.254772),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	

  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>

