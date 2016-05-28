<!DOCTYPE html>
<!-- saved from url=(0057)http://localhost:63342/templatemo_475_holiday/1login.html -->
<html><head><meta http-equiv="Content-Type"name="viewport" content="text/html,charset=UTF-8 ,width=device-width, initial-scale=1">
    <title>
        search
    </title>
    <link rel="stylesheet" href="./search_files/style.css">
    <script type="text/javascript" src="./search_files/main.js"></script><style type="text/css"></style><style type="text/css"></style>
     <link href='{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700')}}' rel='stylesheet' type='text/css'>
  <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">  
  <link href="{{ URL::asset('css/flexslider.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/templatemo-style.css')}}" rel="stylesheet">



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
  width: 600px;
  height: 12cm;
  margin: 100px;
  padding: 5;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 0;
}
</style>


    
</head>
<body>
  <body class="tm-gray-bg">
    <!-- Header -->
    <div class="tm-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                    <a href="#" class="tm-site-name">Developer's Interface</a>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="mobile-menu-icon">
                      <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav">
                        <ul>
                            
                            <li><a href="2search">Search</a></li>
                            <li><a href="3Add">Add</a></li>
                            <li><a href="4Notification.html">Notification</a></li>
                            <li><a href="list">offers</a></li>
                        </ul>
                    </nav>      
                </div>
            </div>
        </div>      
    </div>
    <div class="headerMenu">
        <div id="wrapper">
            <div class="logo">
    

            <div class="search_box">
                <form action="http://localhost/socialNetwork/search.php" method="GET" id="search">

                </form>                
            </div>            
            <div id="menu"> 
                     

                
            </div>
            
        </div>
    </div>


        <div style="width: 1300px; margin: 0px auto 0px; align: TOP_LEFT">
            <table >
                <tbody><tr>
                    <td width="840px"  >

                      <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>

<div id="map_canvas"></div>
<input id="pac-input"></input>

                    
                    </td>
                    <td width="420px" >
                        <h2>Search...</h2>


                        {!!Form::open(['route'=>'course1.index','method'=>'GET','class'=>'Class_name'])!!}
                        <br><br>
                        <label for="Division">Select District</label><br><br>
                         <select  name="division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                             <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                             <option value="Sylhet">Sylhet</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Chittagonj">Chittagonj</option>
 
                            </select>

                            <br><br>
                             <input type="text" name="district" size="25" placeholder="district"><br><br>
                            <input type="text" name="thana" size="25" placeholder="Thana "><br><br>

                            <input type="submit" name="reg" size="25" placeholder="Sign Up!"><br><br>

                       {!!Form::close()!!}
                    </td>
                </tr>
            </tbody></table>
        </div>
        

</div></body></html>