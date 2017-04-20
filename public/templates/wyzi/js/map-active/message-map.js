	function initialize() {
		var myLatlng = new google.maps.LatLng(38.904517, -77.042211);
		var myMarkerPos = new google.maps.LatLng(38.897918, -77.042173);
		var mapOptions = {
			zoom: 15,
			scrollwheel: false,
			center: myLatlng,
		};
		var map = new google.maps.Map(document.getElementById('business-map'),
			mapOptions
		);
		var marker = new google.maps.Marker({
		position: myMarkerPos,
		icon: 'img/business/business-marker.png',
		map: map
		});
		
		var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<div id="mapBodyContent">'+
			'<img src="img/business/business-logo.png" alt="" />'+		
			'<a href="#" class="button green">View Details</a>'+		
			'</div>'+
			'</div>';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
			infowindow.open(map, marker);

		map.setOptions({});
	}
	google.maps.event.addDomListener(window, 'load', initialize);