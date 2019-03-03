;(function ($) {


    // Setup some global variables
    var locations = $('#map-locations').text()
	var map;
	var markers = [];
	var image = [];
	var map_options = [];
	var bounds;


	$(document).ready(function(){


	});



	$(window).load(function(){

		mapInit();

	});



	$(window).resize(function(){



	});



	$(window).on('scroll', function (event) {



	});

	function mapInit(){

		// Set our map options
		map_options.scrollwheel = false;
		map_options.zoom = 14;
		map_options.center = new google.maps.LatLng(39.764464,-104.975495);
		map_options.mapTypeId = google.maps.MapTypeId.ROADMAP;
		map_options.styles = mapStyles();
		map_options.mapTypeControl = false;
		map_options.disableDefaultUI = false;

		bounds = new google.maps.LatLngBounds();

        map = new google.maps.Map(document.getElementById("map"), map_options);
        TestMarker(locations)

    }
        
        // Function for adding a marker to the page.
        function addMarker(location) {
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    
        // Testing the addMarker function
        function TestMarker(locations) {
            locations = JSON.parse(locations)

            locations.forEach(location => {
                location.title = new google.maps.LatLng(location.lat, location.long)
                addMarker(location.title);
            })
        }

	function mapStyles(){
		var styles = [
			{
				"elementType": "geometry",
				"stylers": [
					{
						"color": "#535353"
					}
				]
			},
			{
				"elementType": "labels.icon",
				"stylers": [
					{
						"color": "#222222"
					},
					{
						"visibility": "off"
					}
				]
			},
			{
				"elementType": "labels.text.fill",
				"stylers": [
					{
						"color": "#222222"
					}
				]
			},
			{
				"elementType": "labels.text.stroke",
				"stylers": [
					{
						"color": "#737575"
					}
				]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry",
				"stylers": [
					{
						"color": "#757575"
					}
				]
			},
			{
				"featureType": "landscape",
				"stylers": [
					{
						"color": "#737575"
					}
				]
			},
			{
				"featureType": "water",
				"stylers": [
					{
						"color": "#737575"
					}
				]
			},
			{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
					{
						"color": "#000000"
					}
				]
			},
			{
				"featureType": "water",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#775B4E"
					}
				]
			},
			{
				"featureType": "water",
				"elementType": "labels.text.fill",
				"stylers": [
					{
						"color": "#3d3d3d"
					}
				]
			}
		];

		return styles;
	}


})(jQuery);
