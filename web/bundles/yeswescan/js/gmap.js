// // configuration
// var myZoom = 12;
// var myMarkerIsDraggable = true;
// var myCoordsLenght = 6;
// var defaultLat = 48.859448;
// var defaultLng = 2.339616;
// var image = '../../../../../bundles/yeswescan/images/logo-YesWeScan.png';

// // creates the map
// // zooms
// // centers the map
// // sets the map's type 
// var map = new google.maps.Map(document.getElementById('canvas'), {
// 	zoom: myZoom,
// 	center: new google.maps.LatLng(defaultLat, defaultLng),
// 	mapTypeId: google.maps.MapTypeId.ROADMAP
// });

// // creates a draggable marker to the given coords
// var myMarker = new google.maps.Marker({
// 	position: new google.maps.LatLng(defaultLat, defaultLng),
// 	draggable: myMarkerIsDraggable,
// 	icon: image
// });

// // adds a listener to the marker
// // gets the coords when drag event ends
// // then updates the input with the new coords
// google.maps.event.addListener(myMarker, 'dragend', function(evt){
// 	document.getElementById('yeswescan_homepage_Hotspot_register_form_position').value = evt.latLng.lat().toFixed(myCoordsLenght) + " , "+ evt.latLng.lng().toFixed(myCoordsLenght);
// });

// // centers the map on markers coords
// map.setCenter(myMarker.position);

// // adds the marker on the map
// myMarker.setMap(map);	


// function update() {

//   var center = map.getCenter();
//   var Lng = center.lng();
//   var Lat = center.lat();
  
//   marker.setPosition(new google.maps.LatLng(Lat, Lng));
  
// }


function initialize() {

// configuration
var myZoom = 12;
var myMarkerIsDraggable = true;
var myCoordsLenght = 6;
var defaultLat = 48.859448;
var defaultLng = 2.339616;
var png = '../../../../../bundles/yeswescan/images/logo-YesWeScan.png';


  var markers = [];
 //  var map = new google.maps.Map(document.getElementById('canvas'), {
 //    mapTypeId: google.maps.MapTypeId.ROADMAP,
 //    zoom: myZoom,
	// center: new google.maps.LatLng(defaultLat, defaultLng),
 //  });

var map = new google.maps.Map(document.getElementById('canvas'), {
	zoom: myZoom,
	center: new google.maps.LatLng(defaultLat, defaultLng),
	mapTypeId: google.maps.MapTypeId.ROADMAP
});





  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function(evt) {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
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
        position: place.geometry.location,
        draggable: myMarkerIsDraggable,
      });

      console.log(place.geometry.location);
      console.log(place.geometry.location.toString());

      var str = place.geometry.location.toString();

      var res = str.substring(1, str.length-1);

      document.getElementById('yeswescan_homepage_Hotspot_register_form_position').value = res;
    document.getElementById("yeswescan_homepage_Hotspot_register_form_enregistrer").style.display = "block";

      // creates a draggable marker to the given coords
// var myMarker = new google.maps.Marker({
// 	position: new google.maps.LatLng(defaultLat, defaultLng),
// 	draggable: myMarkerIsDraggable,
// 	icon: image
// });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    google.maps.event.addListener(marker, 'dragend', function(evt){
		document.getElementById('yeswescan_homepage_Hotspot_register_form_position').value = evt.latLng.lat().toFixed(myCoordsLenght) + " , "+ evt.latLng.lng().toFixed(myCoordsLenght);
    document.getElementById("yeswescan_homepage_Hotspot_register_form_enregistrer").style.display = "block";


                
	});
    map.fitBounds(bounds);

  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);