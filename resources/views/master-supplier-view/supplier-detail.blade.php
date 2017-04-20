<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/superlist/assets/libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/superlist/assets/libraries/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('templates/superlist/assets/libraries/colorbox/example1/colorbox.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-fileinput/fileinput.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/superlist/assets/css/superlist.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('templates/superlist/assets/favicon.png') }}">

    <title>Superlist - Listing Detail</title>
</head>


<body class="">
<div class="page-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80 mb80">
                    @if($supplier->theme_id == 0)
                        <div class="detail-banner" style="background-image: url({{ URL::asset('upload/media/suppliers/default-theme.jpg') }});">
                    @else
                        <div class="detail-banner" style="background-image: url({{ URL::asset($supplier->Theme->image_url) }});">
                    @endif
                        <div class="container">
                            <div class="detail-banner-left">
                                <div class="detail-banner-info">
                                    <div class="detail-label">{{$supplier->SupplierType->name}}</div>
                                </div><!-- /.detail-banner-info -->

                                <h2 class="detail-title">{{$supplier->name}}</h2>

                                <div class="detail-banner-address">
                                    <i class="fa fa-map-o"></i>{{$supplier->street}}, {{$supplier->city->name}}
                                </div><!-- /.detail-banner-address -->

                            </div><!-- /.detail-banner-left -->
                        </div><!-- /.container -->
                    </div><!-- /.detail-banner -->

                </div>

                <div class="container">
                    <div class="row detail-content">
                        <div class="col-sm-7">
                            <div class="detail-gallery">
                                <div class="detail-gallery-preview">
                                    @if(count($supplier->Media) == 0)
                                        <a href="{{ URL::asset('upload/media/suppliers/default-theme.jpg') }}">
                                            <img src="{{ URL::asset('upload/media/suppliers/default-theme.jpg') }}">
                                        </a>
                                    @else
                                        @if($supplier->Media[0]->type == "photo")
                                            <a href="{{ URL::asset($supplier->Media[0]->image_url) }}">
                                                <img src="{{ URL::asset($supplier->Media[0]->image_url) }}">
                                            </a>
                                            @else
                                            <a href="{{ URL::asset($supplier->Media[1]->image_url) }}">
                                                <img src="{{ URL::asset($supplier->Media[1]->image_url) }}">
                                            </a>
                                        @endif
                                    @endif
                                </div>

                                <ul class="detail-gallery-index">
                                    @foreach($supplier->Media as $media)
                                        @if($media->type == "photo")
                                        <li class="detail-gallery-list-item active">
                                            <a data-target="{{ URL::asset($media->image_url) }}">
                                                <img src="{{ URL::asset($media->image_url) }}" alt="...">
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div><!-- /.detail-gallery -->

                            <h2>אנחנו פה</h2>
                            <div class="background-white p20">

                                <!-- Nav tabs -->
                                <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-map"></i>Map
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#street-view-panel" aria-controls="street-view-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-street-view"></i>Street View
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                                        <div class="detail-map">
                                            <div class="map-position">
                                                <div id="listing-detail-map"
                                                     data-transparent-marker-image="{{ URL::asset('templates/superlist/assets/img/transparent-marker-image.png') }}"
                                                     data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text.fill","stylers":[{"color":"#b43b3b"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"lightness":"8"},{"color":"#bcbec0"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5b5b5b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7cb3c9"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#fff1f1"},{"visibility":"off"}]}]'
                                                     data-zoom="15"
                                                     data-latitude="40.779995"
                                                     data-longitude="-73.969133"
                                                     data-icon="fa fa-coffee">
                                                </div><!-- /#map-property -->
                                            </div><!-- /.map-property -->
                                        </div><!-- /.detail-map -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                                        <div id="listing-detail-street-view"
                                             data-latitude="40.758896"
                                             data-longitude="-73.985135"
                                             data-heading="225"
                                             data-pitch="0"
                                             data-zoom="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>וידאו</h2>
                            <div class="detail-video">
                                @foreach($supplier->Media as $media)
                                    @if($media->type == "video")
                                        @if($media->image_url == "youtube")
                                            <iframe width="653" height="366" src="https://www.youtube.com/embed/{{$media->image_name}}" frameborder="0" allowfullscreen></iframe>
                                        @endif
                                        @if($media->image_url == "vimeo")
                                            <iframe width="653" height="366" src="https://player.vimeo.com/video/{{$media->image_name}}" frameborder="0" allowfullscreen></iframe>
                                        @endif
                                    @endif
                                @endforeach
                            </div><!-- /.detail-video -->
                        </div><!-- /.col-sm-7 -->

                        <div class="col-sm-5">
                            <h2>קצת על <span class="text-secondary">{{$supplier->name}}</span></h2>
                            <div class="background-white p20">
                                <div class="detail-vcard">
                                    <div class="detail-logo">
                                        @if($supplier->logo_id == 0)
                                            <img src="{{ URL::asset('upload/media/suppliers/default_logo.png') }}">
                                        @else
                                            <img src="{{ URL::asset($supplier->logo->image_url) }}">
                                        @endif
                                    </div><!-- /.detail-logo -->

                                    <div class="detail-contact">
                                        <div class="detail-contact-email">
                                            <i class="fa fa-envelope-o"></i> <a href="mailto:#">{{$supplier->email}}</a>
                                        </div>
                                        <div class="detail-contact-phone">
                                            <i class="fa fa-mobile-phone"></i> <a href="tel:#">{{$supplier->phone1}}</a>
                                        </div>
                                        <div class="detail-contact-website">
                                            <i class="fa fa-globe"></i> <a href="http://{{$supplier->web_url}}">{{$supplier->web_url}}</a>
                                        </div>
                                        <div class="detail-contact-address">
                                            <i class="fa fa-map-o"></i>{{$supplier->street}}, {{$supplier->city->name}}
                                        </div>
                                    </div><!-- /.detail-contact -->
                                </div><!-- /.detail-vcard -->

                                <div class="detail-description">{{$supplier->desc}}</div>
                                @if(count($supplier->SocialLinks)>0)
                                    <div class="detail-follow">
                                        <h5>עקבו אחרינו:</h5>
                                        <div class="follow-wrapper">
                                            @foreach($supplier->SocialLinks as $socialLink)
                                                <a class="follow-btn {{$socialLink->provider}}" href="{{$socialLink->url}}"><i class="fa fa-{{$socialLink->provider}}"></i></a>
                                            @endforeach
                                        </div><!-- /.follow-wrapper -->
                                    </div><!-- /.detail-follow -->
                                @endif
                            </div>

                            <div class="widget">
                                <h2 class="widgettitle">שעות עבודה</h2>
                                    <div class="p20 background-white">
                                        <div class="working-hours">
                                            <div class="day clearfix">
                                                <span class="name" style="float: right">ראשון:</span><span class="hours" id="sun"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">שני:</span><span class="hours" id="mon"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">שלישי:</span><span class="hours" id="tue"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">רביעי:</span><span class="hours" id="wed"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">חמישי:</span><span class="hours" id="thu"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">שישי:</span><span class="hours" id="fri"></span>
                                            </div><!-- /.day -->

                                            <div class="day clearfix">
                                                <span class="name" style="float: right">שבת:</span><span class="hours" id="sat"></span>
                                            </div><!-- /.day -->
                                        </div>
                                </div><!-- /.widget -->
                            </div><!-- /.col-sm-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.content -->
            </div><!-- /.main-inner -->
        </div><!-- /.main -->
    </div>
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>About Superlist</h2>

                        <p>Superlist is directory template built upon Bootstrap and SASS to bring great experience in creation of directory.</p>
                    </div><!-- /.col-* -->

                    <div class="col-sm-4">
                        <h2>Contact Information</h2>

                        <p>
                            Your Street 123, Melbourne, Australia<br>
                            +1-123-456-789, <a href="#">sample@example.com</a>
                        </p>
                    </div><!-- /.col-* -->

                    <div class="col-sm-4">
                        <h2>Stay Connected</h2>

                        <ul class="social-links nav nav-pills">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul><!-- /.header-nav-social -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-left">
                    &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                </div><!-- /.footer-bottom-left -->

                <div class="footer-bottom-right">
                    <ul class="nav nav-pills">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                        <li><a href="contact-1.html">Contact</a></li>
                    </ul><!-- /.nav -->
                </div><!-- /.footer-bottom-right -->
            </div><!-- /.container -->
        </div>
    </footer><!-- /.footer -->
</div><!-- /.page-wrapper -->
<script src="{{ URL::asset('templates/superlist/assets/js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/js/map.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('templates/superlist/assets/libraries/colorbox/jquery.colorbox-min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('templates/superlist/assets/libraries/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/superlist/assets/libraries/flot/jquery.flot.spline.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/jquery-google-map/infobox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/jquery-google-map/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/jquery-google-map/jquery-google-map.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/owl.carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-fileinput/fileinput.min.js') }}"></script>

<script src="{{ URL::asset('templates/superlist/assets/js/superlist.js') }}" type="text/javascript"></script>
<script>
    function getHours(index) {
         var hours = "{{$supplier->working_hours}}";
         var output = "";
         for (var i = 0; i < hours.length && index != 0; i++) {
             if (hours[i] == ',') {
                 index--;
                 i++;
             }
             if (index == 1) {
                output += hours[i];
             }
         }
         if(output == "0")
         {
             output = "סגור";
         }
         return output;
    }
</script>
<script>
    $(document).ready(function() {
        $("#sun").text(getHours(1));
        $("#mon").text(getHours(2));
        $("#tue").text(getHours(3));
        $("#wed").text(getHours(4));
        $("#thu").text(getHours(5));
        $("#fri").text(getHours(6));
        $("#sat").text(getHours(7));
    });
</script>
</body>
</html>