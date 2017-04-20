<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>החתונה של {{ $wedding_props["groom_name"] }} & {{ $wedding_props["bride_name"] }}</title>
    <link href="{{ URL::asset('templates/inlove/assets/images/favicon.png') }}" rel="shortcut icon">


    <!-- Google-Font -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Libre+Baskerville:400,700|Varela+Round" rel="stylesheet">

    <!-- Bootstrap-css-Version-3.3.7 -->
    <link href="{{ URL::asset('templates/inlove/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- FontAwesome-Version-4.7.0 -->
    <link href="{{ URL::asset('templates/inlove/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Owl-Carousel -->
    <link href="{{ URL::asset('templates/inlove/assets/owl.carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/inlove/assets/owl.carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">

    <!-- Slick-slider -->
    <link href="{{ URL::asset('templates/inlove/assets/slick-slider/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('templates/inlove/assets/slick-slider/slick-theme.css') }}" rel="stylesheet" type="text/css">

    <!-- Pretty photo -->
    <link href="{{ URL::asset('templates/inlove/assets/prettyPhoto/css/prettyPhoto.css') }}" rel="stylesheet">

    <!-- Animated -->
    <link href="{{ URL::asset('templates/inlove/assets/css/animate.css') }}" rel="stylesheet" type="text/css">

    <!-- Revulation Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('templates/inlove/assets/rs-plugin/css/settings.css') }}" media="screen" />

    <!-- OffCanvas-Menu -->
    <link href="{{ URL::asset('templates/inlove/assets/css/offcanvas.css') }}" rel="stylesheet" type="text/css">

    <!-- Style-Css -->
    <link type="text/css" href="{{ URL::asset('templates/inlove/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Alef font -->
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="white-bg">
<input type="hidden" id="general-token" name="_token" value="{{ csrf_token() }}">
<header id="page-top" class="header-section second-header">
    <div class="overlay"></div>
    <nav class="navbar navbar-inverse main-nav navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div><a class="navbar-brand page-scroll" href="#page-top">
                        <div class="second-logo"><img src="{{ URL::asset('templates/inlove/assets/images/second-logo.png') }}" alt="image"></div>
                </div>
            </div>

            <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
                <ul class="nav navbar-nav navbar-right">

                    <li><a class="page-scroll" href="#contact">אישור הגעה</a></li>
                    <li><a class="page-scroll" href="#gallery">גלרייה</a></li>
                    <li><a class="page-scroll" href="#event">האירוע</a></li>
                    <li><a class="page-scroll" href="#story">הסיפור שלנו</a></li>
                    <li><a class="page-scroll" href="#couple">הזוג</a></li>
                    <li class="active"><a href="#">עמוד הבית </a></li>
                </ul>
            </div>   <!--/.nav-collapse -->
        </div>
    </nav>
</header> <!-- header-section -->


<section class="slider-second-section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="250" data-stellar-horizontal-offset="50">
    <div class="heart">
        <img src="{{ URL::asset('templates/inlove/assets/images/creative-heart.png') }}" alt="image">
    </div> <!-- heart -->

    <div class="slider-content text-center">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption caption-text customin fadeout tp-resizeme rs-parallaxlevel-3"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="500"
                             data-easing="Power4.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="{{ URL::asset('templates/inlove/assets/images/header-text2.png') }}">
                        </div>
                    </li>
                </ul>
            </div> <!-- tp-banner -->
        </div> <!-- tp-banner-container -->
    </div> <!-- slider-content -->
</section> <!-- slider-section -->


<section id="couple" class="couple-section" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-wrapper">
                    <div class="section-caption m-ml-115">
                        <img class="caption" src="{{ URL::asset('templates/inlove/assets/images/couple/girl.png') }}" alt="image">
                    </div>

                    <div class="section-content mr-70">
                        <h4><a>{!! $wedding_props["bride_name"] !!}</a></h4>
                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="bride_content">{!! $template_sources["bride_content"] !!}</p>
                    </div> <!-- section-content -->
                </div> <!-- section-wrapper -->
            </div>

            <div class="col-md-4">
                <div class="section-wrapper section-middle-bar text-center">
                    <div class="heart">
                        <img src="{{ URL::asset('templates/inlove/assets/images/creative-heart.png') }}" alt="image">
                    </div> <!-- heart -->

                    <div class="section-caption hidden-caption hidden">
                        <img src="{{ URL::asset('templates/inlove/assets/images/couple/couple.png') }}" alt="image">
                    </div> <!-- section-caption -->

                    <div class="section-content">
                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="perfect_couple_label"><a>{!! $template_sources["perfect_couple_label"] !!}</a></h3>
                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="perfect_couple_content">{!! $template_sources["perfect_couple_content"] !!}</p>
                    </div> <!-- section-content -->

                    <div class="section-caption" data-lag='.25'>
                        <div class="caption-parallax" data-lag='.05'>
                            <img src="{{ URL::asset('templates/inlove/assets/images/couple/couple.png') }}" alt="image">
                        </div>
                    </div> <!-- section-caption -->
                </div> <!-- section-wrapper -->
            </div>

            <div class="col-md-4">
                <div class="section-wrapper section-right-bar text-right">
                    <div class="section-caption m-mr-70">
                        <img class="caption" src="{{ URL::asset('templates/inlove/assets/images/couple/boy.png') }}" alt="image">
                    </div>

                    <div class="section-content ml-80">
                        <h4><a>{!! $wedding_props["groom_name"] !!}</a></h4>
                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="groom_content">{!! $template_sources["groom_content"] !!}</p>
                    </div> <!-- section-content -->
                </div> <!-- section-wrapper -->
            </div>
        </div>
    </div>
</section> <!-- couple-section -->


<section class="timeing-section">
    <div class="bg-section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-800" >
        <div class="container text-center" style="font-family: 'Alef', sans-serif; direction: rtl;">
            <h2 style="font-family: 'Alef', sans-serif;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="about_to_marry_label">{!! $template_sources["about_to_marry_label"] !!}</h2>
            <span class="time">{{ $wedding_props["date"] }}</span>
        </div>
    </div>
</section> <!-- timeing-section -->


<section id="story" class="story-section">
    <div class="story-part-two">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="second-title text-center">
                    <h2 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="our_story_label">{!! $template_sources["our_story_label"] !!}</h2>
                    <span class="sub-title" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="our_story_sublabel">{!! $template_sources["our_story_sublabel"] !!}</span>
                </div> <!-- second-title -->

                <div class="story-wrapper text-center">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-one" aria-controls="home" role="tab" data-toggle="tab">סיפור בהמשכים</a></li>
                        <li role="presentation" ><a href="#tab-two" aria-controls="profile" role="tab" data-toggle="tab">האהבה לא נרגעה</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-one">
                            <div class="tab-loveline text-center">
                                <ul class="loveline-slider list-inline">
                                    <li>
                                        <img src="{{ URL::asset('templates/inlove/assets/images/tab/v-1.png') }}" alt="image">
                                        <span class="heart"><img src="{{ URL::asset('templates/inlove/assets/images/tab/small-heart.png') }}" alt="image"></span>
                                        <h4><a href="" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_0_label">{!! $template_sources["list_item_0_label"] !!}</a></h4>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_0_content">{!! $template_sources["list_item_0_content"] !!}</p>
                                    </li>

                                    <li>
                                        <img src="{{ URL::asset('templates/inlove/assets/images/tab/v-2.png') }}" alt="image">
                                        <span class="heart"><img src="{{ URL::asset('templates/inlove/assets/images/tab/small-heart.png') }}" alt="image"></span>
                                        <h4 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_1_label"><a href="">{!! $template_sources["list_item_1_label"] !!}</a></h4>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_1_content">{!! $template_sources["list_item_1_content"] !!}</p>
                                    </li>

                                    <li>
                                        <img src="{{ URL::asset('templates/inlove/assets/images/tab/v-3.png') }}" alt="image">
                                        <span class="heart"><img src="{{ URL::asset('templates/inlove/assets/images/tab/small-heart.png') }}" alt="image"></span>
                                        <h4 {{ ( ($edit_status == 1 ? 'contenteditable="true"' : '')) }}><a href="">{!! $template_sources["list_item_2_label"] !!}</a></h4>
                                        <p {{ ( ($edit_status == 1 ? 'contenteditable="true"' : '')) }}>{!! $template_sources["list_item_2_content"] !!}</p>
                                    </li>

                                    <li>
                                        <img src="{{ URL::asset('templates/inlove/assets/images/tab/v-4.png') }}" alt="image">
                                        <span class="heart"><img src="{{ URL::asset('templates/inlove/assets/images/tab/small-heart.png') }}" alt="image"></span>
                                        <h4 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_3_label"><a href="">{!! $template_sources["list_item_3_label"] !!}</a></h4>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_3_content">{!! $template_sources["list_item_3_content"] !!}</p>
                                    </li>
                                </ul>
                            </div> <!-- tab-doc -->
                        </div> <!-- tab-one -->

                        <div role="tabpanel" class="tab-pane tab-story fade " id="tab-two">
                            <div class="tab-caption pull-right"><img src="{{ URL::asset('templates/inlove/assets/images/tab/tab-heart.png') }}" alt="image"></div>

                            <div class="tab-doc">
                                <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="love_first_sight_label">{!! $template_sources["love_first_sight_label"] !!}</h3>

                                <ul class="list-inline text-left" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="love_first_sight_content">
                                    {!! $template_sources["love_first_sight_content"] !!}
                                </ul>
                            </div> <!-- tab-doc -->
                        </div> <!-- tab-two -->
                    </div>
                </div> <!-- story-wrapper -->
            </div>
        </div>
    </div> <!-- story-part-two -->
</section> <!-- story-section -->


<section id="gallery" class="gallery-section bg-color-1" dir="rtl">
    <div class="gallery-section-two">
        <div class="container">
            <div class="second-title text-center">
                <h2 class="style-font" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="gallery_title">{!! $template_sources["gallery_title"] !!}</h2>
                <span class="sub-title" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="gallery_sub_label">{!! $template_sources["gallery_sub_label"] !!} </span>
            </div> <!-- second-title -->

            <div class="portfolio gallery-grid">
                <div class="row">
                    <ul class="portfolio-sorting gallery-button list-inline text-center">
                        <li><a class="filter-btn" href="#" data-group="people">אירוסין</a></li>
                        <li><a class="filter-btn" href="#" data-group="simpsons">הטיול הגדול</a></li>
                        <li><a class="filter-btn" href="#" data-group="futurama">הפגישות הראשונות</a></li>
                        <li><a href="#" data-group="all" class="filter-btn active">הכל</a></li>
                    </ul> <!--end portfolio sorting -->

                    <div class="gallery-wrapper">
                        <ul class="portfolio-items courses list-unstyled" id="grid">
                            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <a href="#">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-5.jpg') }}">

                                        <div id="lightgallery1" class="hover-view"><a href="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-5.jpg') }}" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a></div>
                                    </a>
                                </figure>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <a href="#">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-2.jpg') }}">

                                        <div id="lightgallery2" class="hover-view"><a href="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-2.jpg') }}" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a></div>
                                    </a>
                                </figure>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <a href="#">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-4.jpg') }}">

                                        <div id="lightgallery3" class="hover-view"><a href="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-4.jpg') }}" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a></div>
                                    </a>
                                </figure>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <a href="#">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-3.jpg') }}">

                                        <div id="lightgallery4" class="hover-view"><a href="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-3.jpg') }}" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a></div>
                                    </a>
                                </figure>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6" data-groups='["simpsons", "people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <a href="#">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-1.jpg') }}">

                                        <div id="lightgallery5" class="hover-view"><a href="{{ URL::asset('templates/inlove/assets/images/gallery-two/g-1.jpg') }}" rel="prettyPhoto"><i class="fa fa-search-plus"></i></a></div>
                                    </a>
                                </figure>
                            </li>
                        </ul> <!--end portfolio grid -->
                    </div> <!-- gallery-wrapper -->
                </div> <!--end row -->
            </div>
        </div> <!-- container -->
    </div> <!-- gallery-section-two -->
</section> <!-- gallery-section -->


<section id="event" class="event-section">
    <div class="event-part-two">
        <div class="container-fluid">
            <div class="row">
                <div class="event-wrapper">
                    <div class="col-md-6 no-padding">
                        <div class="map-section">
                            <div class="check text-center"><i class="fa fa-eye" aria-hidden="true"></i></div>
                            <div class="overlap"></div>
                            <div id="googleMap2"></div>
                        </div> <!-- map-section -->
                    </div> <!-- col-md-6 -->

                    <div class="col-md-6 no-padding">
                        <div id="event-slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="event-caption">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/location1.jpg') }}" alt="image">
                                    </div> <!-- event-caption -->
                                </div>

                                <div class="item">
                                    <div class="event-caption">
                                        <img src="{{ URL::asset('templates/inlove/assets/images/location1.jpg') }}" alt="image">
                                    </div> <!-- event-caption -->
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#event-slider" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                            <a class="right carousel-control" href="#event-slider" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- event-slider -->

                        <div class="contact text-center">
                            <span class="number">+88-017-53016694</span>
                            <span class="mail">inlove@gmail.com</span>
                        </div> <!-- contact -->
                    </div> <!-- col-md-6 -->

                    <div class="location white-color text-center">
                        <div id="location-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <h4>מיקום</h4><br />
                                    <span>שמש אדומה</span>
                                    <p>אולם שמש אדומה, תל אביב</p>

                                    <img src="{{ URL::asset('templates/inlove/assets/images/map-logo.png') }}" alt="image">
                                </div>
                            </div> <!-- carousel-inner -->
                        </div>
                    </div> <!-- location -->
                </div> <!-- event-wrapper -->
            </div>
        </div>
    </div> <!-- event-part-two -->
</section> <!-- event-section -->


<section id="contact" class="reservation-section" dir="rtl">
    <div class="reserve-form-two" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="1800">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 no-padding">
                    <div class="form-two-wrapper">
                        <div class="form-content text-center">
                            <h2 class="section" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="rsvp_title">{!! $template_sources["rsvp_title"] !!}</h2>
                            <span class="sub-title" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="rsvp_sublabel">{!! $template_sources["rsvp_sublabel"] !!}</span>
                        </div> <!-- form-content -->

                        <form class="form-horizontal">
                            <div class="form-group">

                            <div class="form-group">
                            <div class="form-inline ">
                                <div class="col-sm-offset-1 col-sm-10 plr-50">
                                    <div class="form-group mr-40">
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Number of guest
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a>Number of guest - 20</a></li>
                                                <li><a>Number of guest - 30</a></li>
                                                <li><a>Number of guest - 40</a></li>
                                                <li><a>Number of guest - 50</a></li>
                                            </ul> <!-- dropdown-menu -->
                                        </div> <!-- dropdown -->
                                    </div> <!-- form-group -->

                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Coming Status
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a>Come</a></li>
                                                <li><a>No</a></li>
                                            </ul>
                                        </div> <!-- dropdown -->
                                    </div> <!-- form-group -->
                                </div> <!-- col-sm-10 -->
                            </div> <!-- form-inline -->

                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10 plr-50">
                                            <span class="input input-action input-text-field">
                                                <input class="input-field input-action-field" type="text" id="message" placeholder="Message"/>
                                                <label class="input-label input-action-label" for="message">
                                                    <span class="input-label-content input-action-label-content">Message</span>
                                                </label>
                                            </span> <!-- input -->
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-10 text-center">
                                    <button type="submit" class="btn btn-primary">אשר הגעה</button>
                                </div>
                            </div> <!-- form-group -->
                        </form>
                    </div> <!-- form-two-wrapper -->
                </div>
            </div>
        </div>
    </div>  <!-- reserve-form-two -->
</section>  <!-- reservation-section -->

<div id="toTop" class="hidden-xs">
    <i class="fa fa-chevron-up"></i>
</div> <!-- totop -->


<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="loader loader20">
            <div class="loader2"></div>
        </div>
    </div>
</div>



<!-- jQuery -->
<script src="{{ URL::asset('templates/inlove/assets/js/jquery.js') }}"></script>

<!-- Bootstrap-js -->
<script src="{{ URL::asset('templates/inlove/assets/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Owl-Carousel -->
<script src="{{ URL::asset('templates/inlove/assets/owl.carousel/owl.carousel.min.js') }}"></script>

<!-- Slick-Slider -->
<script src="{{ URL::asset('templates/inlove/assets/slick-slider/slick.min.js') }}" type="text/javascript"></script>

<!-- Google-Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZqmVgjIM4-tIJp3UNF5zZkUIYqg2TJI0&amp;callback=initMap"async defer></script>

<!-- Revulation Slider -->
<script src="{{ URL::asset('templates/inlove/assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('templates/inlove/assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>


<!-- Other-js -->
<script src="{{ URL::asset('templates/inlove/assets/js/smoothscroll.js') }}"></script>
<script src="{{ URL::asset('templates/inlove/assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('templates/inlove/assets/js/coundown-timer.js') }}"></script>
<script src="{{ URL::asset('templates/inlove/assets/js/jquery.easyaudioeffects.1.0.0.min.js') }}"></script>
<script src="{{ URL::asset('templates/inlove/assets/js/staller.js') }}"></script>
<script src="{{ URL::asset('templates/inlove/assets/js/portfolio.js') }}"></script>

<!-- prettyPhoto -->
<script src="{{ URL::asset('templates/inlove/assets/prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>

<!-- Offcanvas-menu -->
<script src="{{ URL::asset('templates/inlove/assets/js/offcanvas.js') }}" type="text/javascript"></script>

<!-- Main-Js -->
<script src="{{ URL::asset('templates/inlove/assets/js/main.js') }}"></script>

<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap2'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>

<script>
    $(document).ready(function() {
        $('[contenteditable="true"]').each(function () {
            var contents = $(this).html();
            $(this).blur(function () {
                if (contents != $(this).html()) {
                    var element_key  = $(this).attr("id");
                    var element_val = $(this).html();
                    var token       = $("#general-token").val();
                    var template_id = "1";
                    var data        = {
                        element_key,
                        element_val,
                        token,
                        data,
                        template_id,
                    };

                    $.post('update-template-element', data, function (callback_data) {
                    }).done(function() {
                        alert('contenteditable obj has been changed.');
                    });
                } else {
                    // Content has not been changed
                }
            });
        });
    });
</script>

</body>
</html>