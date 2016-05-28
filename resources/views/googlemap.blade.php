<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>La Tarte Aux Crésors "Beta"</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>
<script type="text/javascript">
    "use strict";

var ignKey = "ljozkgwvms60dtumhx67z6u3"
var markers = [];

function makeIGNMapType(layer, name, maxZoom) {
  return new google.maps.ImageMapType({
    getTileUrl: function(coord, zoom) {
      var normalizedCoord = getNormalizedCoord(coord, zoom);
      if (!normalizedCoord) {
        return null;
      }
      var bound = Math.pow(2, zoom);
      return 'http://mw1.google.com/mw-planetary/lunar/lunarmaps_v1/clem_bw' +
        '/' + zoom + '/' + normalizedCoord.x + '/' +
        (bound - normalizedCoord.y - 1) + '.jpg';
    },
    name: 'Moon',
  tileSize: new google.maps.Size(256, 256),
  maxZoom: 9,
  minZoom: 0
  });
}

function initialize() {
  var map_canvas = document.getElementById("map_canvas");

  var map = new google.maps.Map(map_canvas, {
    mapTypeId: 'IGN',
    scaleControl: true,
    streetViewControl: true,
    panControl: true,
    mapTypeControl: true,
    overviewMapControl: true,
    overviewMapControlOptions: {
      opened: true,
      position: google.maps.ControlPosition.BOTTOM_CENTER
    },


    mapTypeControlOptions: {
      mapTypeIds: [
        'IGN', 'IGNScanExpress',
        google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.TERRAIN, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.ROADMAP
      ],
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
    },
    center: new google.maps.LatLng(47, 3),
    zoom: 6,
    draggableCursor: "crosshair"
  });

  map.mapTypes.set('IGN', makeIGNMapType("GEOGRAPHICALGRIDSYSTEMS.MAPS", "IGN", 18));
  map.mapTypes.set('IGNScanExpress', makeIGNMapType("GEOGRAPHICALGRIDSYSTEMS.MAPS.SCAN-EXPRESS.CLASSIQUE", "IGN Scan Express", 16));


  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */ (
    document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */
    (input));

  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    var place = null;
    var viewport = null;
    for (var i = 0; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });
      viewport = place.geometry.viewport;
      markers.push(marker);

      bounds.extend(place.geometry.location);
    }
    map.setCenter(bounds.getCenter());
  });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}


// Normalizes the coords that tiles repeat across the x axis (horizontally)
// like the standard Google map tiles.
function getNormalizedCoord(coord, zoom) {
  var y = coord.y;
  var x = coord.x;

  // tile range in one direction range is dependent on zoom level
  // 0 = 1 tile, 1 = 2 tiles, 2 = 4 tiles, 3 = 8 tiles, etc
  var tileRange = 1 << zoom;

  // don't repeat across y-axis (vertically)
  if (y < 0 || y >= tileRange) {
    return null;
  }

  // repeat across x-axis
  if (x < 0 || x >= tileRange) {
    x = (x % tileRange + tileRange) % tileRange;
  }

  return {
    x: x,
    y: y
  };
}






google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style>
html,
body,
#map_canvas {
  width: 8cm;
  height: 90%;
  margin: 5;
  padding: 5;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 0;
}
</style>
</head>

<body>

<div style="float:left; width:60%;">
        
         <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>

<div id="map_canvas"></div>
<input id="pac-input"></input>
</div>


<div style="float:left; padding:60%; width:30%;">
Right  <!-- Set Div As your requirement -->
hgjhgjhgj<br>
ytryruyruyr<br>
</div>
 
</body>
</html>