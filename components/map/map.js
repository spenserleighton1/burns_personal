;(function ($) {

	// Setup some global variables
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
		map_options.zoom = 4;
		map_options.center = new google.maps.LatLng(41.4922416,-115.543024);
		map_options.mapTypeId = google.maps.MapTypeId.ROADMAP;
		// map_options.styles = mapStyles();
		map_options.mapTypeControl = false;
		map_options.disableDefaultUI = false;

		// bounds = new google.maps.LatLngBounds();

		map = new google.maps.Map(document.getElementById("map"), map_options);


		// jQuery('.map-container .loader').fadeOut();
	}



	// function mapStyles(){
	// 	var styles = [
	// 		{
	// 			"elementType": "geometry",
	// 			"stylers": [
	// 				{
	// 					"color": "#535353"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"elementType": "labels.icon",
	// 			"stylers": [
	// 				{
	// 					"color": "#222222"
	// 				},
	// 				{
	// 					"visibility": "off"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"elementType": "labels.text.fill",
	// 			"stylers": [
	// 				{
	// 					"color": "#222222"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"elementType": "labels.text.stroke",
	// 			"stylers": [
	// 				{
	// 					"color": "#737575"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "administrative",
	// 			"elementType": "geometry",
	// 			"stylers": [
	// 				{
	// 					"color": "#757575"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "landscape",
	// 			"stylers": [
	// 				{
	// 					"color": "#737575"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "water",
	// 			"stylers": [
	// 				{
	// 					"color": "#737575"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "water",
	// 			"elementType": "geometry",
	// 			"stylers": [
	// 				{
	// 					"color": "#000000"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "water",
	// 			"elementType": "geometry.fill",
	// 			"stylers": [
	// 				{
	// 					"color": "#535353"
	// 				}
	// 			]
	// 		},
	// 		{
	// 			"featureType": "water",
	// 			"elementType": "labels.text.fill",
	// 			"stylers": [
	// 				{
	// 					"color": "#3d3d3d"
	// 				}
	// 			]
	// 		}
	// 	];

	// 	return styles;
	// }


})(jQuery);
