
	function initialize() {
		var myLatlng = new google.maps.LatLng(38.897918, -77.042173);
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			center: myLatlng,
		};
		var map = new google.maps.Map(document.getElementById('contact-map'),
			mapOptions
		);

		map.setOptions({});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
