function initialize() {

    //Map parametrs
    var mapOptions = {
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.roadmap,
		scrollwheel: false,
		center: new google.maps.LatLng(38.902855, -77.042647),
		disableDefaultUI: true
    }
    //map
	var map = new google.maps.Map(document.getElementById('home-map'), mapOptions);

    //category
    var dot = 'img/marker/dot.png';
    var video = 'img/marker/video.png';
    var shopping = 'img/marker/shopping.png';
    var madical = 'img/marker/madical.png';

    //positions
    var point1 = new google.maps.LatLng(38.901536, -77.048330);
    var point2 = new google.maps.LatLng(38.898704, -77.043755);
    var point3 = new google.maps.LatLng(38.904442, -77.030463);
    var point4 = new google.maps.LatLng(38.906436, -77.018915);
    var point5 = new google.maps.LatLng(38.892234, -77.069867);
    var point6 = new google.maps.LatLng(38.898586, -77.056695);
    var point7 = new google.maps.LatLng(38.900390, -77.045246);
    var point8 = new google.maps.LatLng(38.893350, -77.068350);
    var point9 = new google.maps.LatLng(38.908957, -77.028382);
    var point10 = new google.maps.LatLng(38.899571, -77.055168);
    var point11 = new google.maps.LatLng(38.898644, -77.031116);
    var point12 = new google.maps.LatLng(38.906856, -77.044194);
    var point13 = new google.maps.LatLng(38.901257, -77.043352);
    var point14 = new google.maps.LatLng(38.909490, -77.038793);
    var point15 = new google.maps.LatLng(38.897198, -77.039252);
    var point16 = new google.maps.LatLng(38.903457, -77.008690);
    var point17 = new google.maps.LatLng(38.891681, -77.010129);
    var point18 = new google.maps.LatLng(38.905822, -77.065586);
    var point19 = new google.maps.LatLng(38.904196, -77.062596);

    //markers
    var marker1 = new google.maps.Marker({
        position: point1,
        map: map,
        icon: dot,
    });
    var marker2 = new google.maps.Marker({
        position: point2,
        map: map,
        icon: dot,
    });
    var marker3 = new google.maps.Marker({
        position: point3,
        map: map,
        icon: dot,
    });
    var marker4 = new google.maps.Marker({
        position: point4,
        map: map,
        icon: dot,
    });
    var marker5 = new google.maps.Marker({
        position: point5,
        map: map,
        icon: dot,
    });
    var marker6 = new google.maps.Marker({
        position: point6,
        map: map,
        icon: dot,
    });
    var marker7 = new google.maps.Marker({
        position: point7,
        map: map,
        icon: dot,
    });
    var marker8 = new google.maps.Marker({
        position: point8,
        map: map,
        icon: madical,
    });
    var marker9 = new google.maps.Marker({
        position: point9,
        map: map,
        icon: madical,
    });
    var marker10 = new google.maps.Marker({
        position: point10,
        map: map,
        icon: shopping,
    });
    var marker11 = new google.maps.Marker({
        position: point11,
        map: map,
        icon: shopping,
    });
    var marker12 = new google.maps.Marker({
        position: point12,
        map: map,
        icon: shopping,
    });
    var marker13 = new google.maps.Marker({
        position: point13,
        map: map,
        icon: dot,
    });
    var marker14 = new google.maps.Marker({
        position: point14,
        map: map,
        icon: video,
    });
    var marker15 = new google.maps.Marker({
        position: point15,
        map: map,
        icon: video,
    });
    var marker16 = new google.maps.Marker({
        position: point16,
        map: map,
        icon: video,
    });
    var marker17 = new google.maps.Marker({
        position: point17,
        map: map,
        icon: video,
    });
    var marker18 = new google.maps.Marker({
        position: point8,
        map: map,
        icon: dot,
    });
    var marker19 = new google.maps.Marker({
        position: point19,
        map: map,
        icon: dot,
    });
	


}
google.maps.event.addDomListener(window, 'load', initialize);	

