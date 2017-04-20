@extends('layouts.master-client-layout.header-ext')
@section('title', 'Gallery')
@section('ext-scripts-n-styles')
    <!-- -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bower_components/fancybox/ekko-lightbox.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('plugins/bower_components/html5lightbox/icons/css/fontello.css')}}"/>
    <script src="{{ URL::asset('plugins/bower_components/html5lightbox/froogaloop2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/bower_components/html5lightbox/html5lightbox.js')}}"></script>
@endsection
@section('inner-page-title', 'גלרייה')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">גלרייה</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="white-box">
            <div id="gallery">
                <div id="gallery-header">
                    <div id="gallery-header-center">
                        <div id="gallery-header-center-right">
                            <div class="gallery-header-center-right-links gallery-header-center-right-links-current" id="filter-all">הכל</div>
                            @foreach($media_titles as $subject)
                                @foreach($subject as $title)
                                    <div class="gallery-header-center-right-links" id="filter-{{$title->id}}">{{$title->title}}</div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="gallery-content">
                    <div id="gallery-content-center">
                        @foreach($media as $file)
                            <div id="singular-image">
                            @if($file->type == 'photo')
                                <a href="{{ URL::asset($file->image_url) }}" id="test" data-toggle="lightbox" data-gallery="multiimages" data-title='{{$file->weddingMediaTitle->title}}'>
                                    <img src="{{ URL::asset($file->image_url) }}" alt="gallery" class="all {{$file->media_title_id}} isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
                                    <i class="fa fa-trash-o" id="remove-image" style="display:none;"></i></a>
                            @endif
                            @if($file->type == 'video')
                                <a href="{{ URL::asset($file->video_url) }}" class="html5lightbox" title='{{$file->weddingMediaTitle->title}}'>
                                    <img src="{{ URL::asset($file->image_url) }}" alt="gallery" class="all {{$file->media_title_id}} isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;"> </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
@section('ext-footer-scripts')
<!--slimscroll JavaScript -->
<script type="text/javascript">
    $(document).ready(function(){
        var size = 1;
        var button = 0;
        var button_class = "gallery-header-center-right-links-current";
        var normal_size_class = "gallery-content-center-normal";
        var full_size_class = "gallery-content-center-full";
        var $container = $('#gallery-content-center');

        $container.isotope({itemSelector : 'img'});
        function check_button(){
            $('.gallery-header-center-right-links').removeClass(button_class);
            if(button==0){
                $("#filter-all").addClass(button_class);
                $("#gallery-header-center-left-title").html('All Galleries');
            }

            @foreach($media_titles as $subject)
                @foreach($subject as $title)
                    if(button=='{{$title->id}}'){
                        $("#filter-{{$title->id}}").addClass(button_class);
                        $("#gallery-header-center-left-title").html('{{$title->title}} Gallery');
                        console.log({{$title->id}});
                    }
                @endforeach
            @endforeach
        }

        function check_size(){
            $("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
            if(size==0){
                $("#gallery-content-center").addClass(normal_size_class);
                $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
            }
            if(size==1){
                $("#gallery-content-center").addClass(full_size_class);
                $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
            }
            $container.isotope({itemSelector : 'img'});
        }

        $("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 0; check_button(); });
        @foreach($media_titles as $subject)
            @foreach($subject as $title)
                $("#filter-{{$title->id}}").click(function() {  $container.isotope({ filter: ".{{$title->id}}" }); button = '{{$title->id}}'; check_button();  });
            @endforeach
        @endforeach
        $("#gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });

        check_button();
        check_size();

        setTimeout(function () {
            $("#filter-all").click();
        }, 500);
    });
</script>
<script type="text/javascript" src="{{ URL::asset('plugins/bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        function lala() {
            alert("asd");
        }

        // navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();

            var lb;
            return $(this).ekkoLightbox({
                onShown: function() {

                    lb = this;

                    $(lb.modal_content).on('click', '.modal-footer a', function(e) {

                        e.preventDefault();
                        lb.navigateTo(2);

                    });

                }
            });
        });
    });
</script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection
