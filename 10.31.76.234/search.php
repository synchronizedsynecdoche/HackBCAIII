<html>
<head>
	<link rel="stylesheet" type="text/css" href="general.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="search.css">
	<script src="jquery-1.12.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="general.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?callback=mainMap"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0;">
	<meta charset="utf-8">
	<style>
		#bigMap {
			width: 100%;
        	height: 40%;
        	display: block;
		}
    </style>
    <script>
   	function mainMap() {
	   	var initialLocation;
	   	var varLatitude;
	   	var varLongitude;
   	    var mainMap = new google.maps.Map(document.getElementById('bigMap'), {
         	zoom: 10,
		 	center: {lat: 40.7, lng: -74},
		 	disableDefaultUI: true
        });
	    navigator.geolocation.getCurrentPosition(function(position) {
		    varLatitude = positions.coords.latitude;
		    varLongitude = position.coords.longitude;
	     	initialLocation = new google.maps.LatLng(varLatitude, varLongitude);
		 	mainMap.setCenter(initialLocation);
	    }, function() {
		    handleNoGeolocation(browserSupportFlag);
	    });
		    }
    </script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="title"><a href="index.php">Charity Search</a></div>
			<div class="nav_button"><span><a href="login.html">Login</a></span></div>
		</div>
	</div>
	<div class="container" style="margin-top: 1%; margin-bottom: -3%;">
		<form action="search.php" method="POST" id="searchbar">
			<input type="text" name="searchText" placeholder="Search for charities...">
		</form>
	</div>
	
	<div class="container">
			</div>
	
</body>
</html>
