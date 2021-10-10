<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;
	  function addMarker(latitude, longitude, accuracy, username) {
		const pos = { lat: latitude, lng: longitude };
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        new google.maps.Marker({
          position: pos,
          label: username,
		  title: username,
          map: map,
        });
		const cityCircle = new google.maps.Circle({
           strokeColor: "#FF0000",
           strokeOpacity: 0.8,
           strokeWeight: 2,
           fillColor: "#FF0000",
           fillOpacity: 0.35,
           map,
           center: pos,
           radius: accuracy,
         });
      }
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 13.7436907, lng: 100.5829106 },
          zoom: 15,
        });
		markers();
      }	  
    </script>
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3jKIleF-I_dnfhxlZSdcMqrOxB5aKmls&callback=initMap&libraries=&v=weekly"
      async
    ></script>

<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$users = get_users();
// Array of WP_User objects.
$keys = array("User", "GPS Coordinates", "Last Update", "Last GPS Timestamp", "App Version", "Device Token");
echo '<div style="overflow-x:auto;"><table>';
echo '<tr>';
	foreach($keys as $key) {
		echo '<th style="text-align:left">';
		echo $key;
		echo '</th>';
	}
	echo '</tr>';
$js_code = '<script>function markers(){';
foreach ( $users as $user ) {
	$app_data = json_decode(get_user_meta($user->ID, "app_data", true), true);	
	$coord = "undefined";
	$timestamp = "undefined";
	$version = "undefined";
	$device_token = "undefined";
	if(!empty($app_data)) {
		$coord = $app_data["coord"];
		$timestamp = $app_data["timestamp"];
		$version = $app_data["version"];
		$js_code = $js_code . 'addMarker(' . $coord["coords"]["latitude"] . ',' . $coord["coords"]["longitude"] . ',' . $coord["coords"]["accuracy"] . ',"' . $user->user_nicename . '");';
		$device_token = $app_data["device_token"];
	}	
	echo '<tr>';
	echo '<td>';
		echo $user->user_nicename;
	echo '</td>';
	echo '<td>';		
		if($coord != "undefined") {			
			echo "Latitude: " . $coord["coords"]["latitude"] . ", Longitude: " . $coord["coords"]["longitude"] . ", Accuracy: " . $coord["coords"]["accuracy"];
		}
	echo '</td>';
	echo '<td>';
		echo $timestamp!="undefined"?date('Y/m/d H:i:s', $app_data["timestamp"]):"";
	echo '</td>';	
	echo '<td>';
		echo $coord!="undefined"?date('Y/m/d H:i:s', floor($coord["timestamp"]/1000)):"";
	echo '</td>';
	echo '<td>';
		echo $version;
	echo '</td>';
	echo '<td>';
		echo $device_token;
	echo '</td>';
	echo '</tr>';	
}
$js_code = $js_code . '}</script>';
echo '</table></div>';
echo $js_code;
?>
  </body>
</html>
