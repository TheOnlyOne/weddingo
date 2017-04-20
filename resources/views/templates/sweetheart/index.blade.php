<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sweetheart - Responsive Wedding Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="wedding,events,ceremony,couple,pear,love">
    <meta name="author" content="AStheme">

    <!-- Page Title -->
    <title>החתונה של {{ $wedding_props["groom_name"] }} & {{ $wedding_props["bride_name"] }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ URL::asset('templates/sweetheart/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ URL::asset('templates/sweetheart/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('templates/sweetheart/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ URL::asset('templates/sweetheart/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ URL::asset('templates/sweetheart/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="{{ URL::asset('templates/sweetheart/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('templates/sweetheart/css/flaticon.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('templates/sweetheart/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{ URL::asset('templates/sweetheart/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('templates/sweetheart/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('templates/sweetheart/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('templates/sweetheart/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('templates/sweetheart/css/jquery.fancybox.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('templates/sweetheart/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Alef font -->
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">

</head>
<input type="hidden" id="general-token" name="_token" value="{{ csrf_token() }}">
<body id="home">

<!-- start page-wrapper -->
<div class="page-wrapper">


    <!-- Preloader -->
    <div class="preloader">
        <div class="middle">
            <i class="fa fa-heart"></i>
            <i class="fa fa-heart"></i>
            <i class="fa fa-heart"></i>
            <i class="fa fa-heart"></i>
        </div>
    </div>
    <!-- end preloader -->


    <!-- Start header -->
    <header id="header">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="mobile-menu-logo">{{ $wedding_props["bride_name"] }} <i class="fa fa-heart"></i> {{ $wedding_props["groom_name"] }}</li>
                        <li><a href="#rsvp">אישור הגעה</a></li>
                        <li><a href="#gallery">הגלרייה שלנו</a></li>
                        <li><a href="#couple">הזוג</a></li>
                        <li><a href="#story">הסיפור שלנו</a></li>
                        <li class="active"><a href="#home">עמוד הבית</a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav>

        <div class="logo-bottom-shape-wrapper container">
            <div class="logo-bottom-shape wow fadeInDown" data-wow-delay="4s">
                <span>M <i class="fa fa-heart"></i> N</span>
            </div>
        </div>
    </header>
    <!-- end of header -->


    <!-- start of hero -->
    <section class="hero hero-slider-wrapper">
        <div class="hero-slider">
            <div class="slide"><img src="{{ URL::asset('templates/sweetheart/images/slider/slide-1.jpg') }}" alt></div>
            <div class="slide"><img src="{{ URL::asset('templates/sweetheart/images/slider/slide-2.jpg') }}" alt></div>
            <div class="slide"><img src="{{ URL::asset('templates/sweetheart/images/slider/slide-3.jpg') }}" alt></div>
        </div>

        <div class="announcement-wrapper">
            <div class="announcement">
                    <span class="married-text" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>
                    </span>

                <div class="couple-name wow fadeInUp" data-wow-delay="2s">
                    <h1>{{ $wedding_props["bride_name"] }} &amp; {{ $wedding_props["groom_name"] }}</h1>
                </div>
                <span class="date wow fadeInUp" data-wow-delay="3s">{{ $wedding_props["date"] }}</span>
                <span class="vector wow fadeInUp" data-wow-delay="3.5s"></span>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start count-down -->
    <section class="count-down">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 hidden-sm hidden-xs" style="direction: rtl; text-align: right;">
                    <h2 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="main_site_label">{!! $template_sources["main_site_label"] !!}</h2>
                </div>
                <div class="col col-md-8">
                    <div id="clock"></div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of count-down -->


    <!-- start couple -->
    <section class="couple section-padding parallax-flower" data-bg-image-top="{{ URL::asset('templates/sweetheart/images/big-flower.png') }}"  data-bg-image-bottom="images/big-flower-bt.png" id="couple">
        <div class="container">
            <div class="row section-title" dir="rtl">
                <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    <h2 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="about_to_marry_label">{!! $template_sources["about_to_marry_label"] !!}</h2>
                    <div class="double-line double-line-bottom"></div>
                </div>
            </div>

            <div class="row groom">
                <div class="col col-md-4 col-sm-5 wow fadeInLeftSlow" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="pic">
                        <img src="{{ URL::asset('templates/sweetheart/images/groom.jpg') }}" class="img img-responsive" alt>
                    </div>
                </div>
                <div class="col col-md-8 col-sm-7 wow fadeInLeftSlow" data-wow-duration="2s">
                    <div class="details" style="direction: rtl; text-align: right;">
                        <span>החתן</span>
                        <h4>זוהר איזגייב</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <colgroup>
                                    <col class="first-col">
                                    <col class="sec-col">
                                </colgroup>
                                <tr>
                                    <td>שם</td>
                                    <td>זוהר איזגייב</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_0">{!! $template_sources["td_item_0"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_0_val">{!! $template_sources["td_item_0_val"] !!}</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_1">{!! $template_sources["td_item_1"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_1_val">{!! $template_sources["td_item_1_val"] !!}</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_2">{!! $template_sources["td_item_2"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_2_val">{!! $template_sources["td_item_2_val"] !!}</td>
                                </tr>
                            </table>
                        </div>
                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="groom_content">{!! $template_sources["groom_content"] !!}</p>
                    </div>
                </div>
            </div> <!-- end of groom -->

            <div class="row bride">
                <div class="col col-md-4 col-md-push-8 col-sm-5 col-sm-push-7 wow fadeInRightSlow" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="pic">
                        <img src="{{ URL::asset('templates/sweetheart/images/bride.jpg') }}" class="img img-responsive" alt>
                    </div>
                </div>

                <div class="col col-md-8 col-md-pull-4 col-sm-7 col-sm-pull-5" style="text-align: right; direction: rtl;">
                    <div class="details wow fadeInRightSlow" data-wow-duration="2s" style="text-align: right; direction: rtl;">
                        <span>הכלה</span>
                        <h4>גל שוורץ</h4>
                        <div class="table-responsive">
                            <table class="table" style="direction: rtl; text-align: right;">
                                <colgroup>
                                    <col class="first-col">
                                    <col class="sec-col">
                                </colgroup>
                                <tr>
                                    <td>שם</td>
                                    <td>גל שוורץ</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_3">{!! $template_sources["td_item_3"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_3_val">{!! $template_sources["td_item_3_val"] !!}</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_4">{!! $template_sources["td_item_4"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_4_val">{!! $template_sources["td_item_4_val"] !!}</td>
                                </tr>
                                <tr>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_5">{!! $template_sources["td_item_5"] !!}</td>
                                    <td contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="td_item_5_val">{!! $template_sources["td_item_5_val"] !!}</td>
                                </tr>
                            </table>
                        </div>
                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="bride_content">{!! $template_sources["bride_content"] !!}</p>
                    </div>
                </div>
            </div> <!-- end of bride -->
        </div> <!-- end of container -->
    </section>
    <!-- end of couple -->


    <!-- start of story -->
    <section class="story section-padding" id="story">
        <div class="container">
            <div class="row section-title" dir="rtl">
                <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    <h2 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="our_story_label">{!! $template_sources["our_story_label"] !!}</h2>
                    <div class="double-line double-line-bottom"></div>
                </div>
            </div> <!-- end of section-title -->

            <div class="row story-box-wrapper">
                <div class="col col-lg-8">
                    <div class="story-box">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#first-meet" aria-controls="first-meet" role="tab" data-toggle="tab" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_0_label">
                                        <i class="fi flaticon-clothes-1"></i>{!! $template_sources["list_item_0_label"] !!}</a>
                                </li>
                                <li role="presentation">
                                    <a href="#first-date" aria-controls="first-date" role="tab" data-toggle="tab" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_1_label">
                                        <i class="fi flaticon-calendar-2"></i>{!! $template_sources["list_item_1_label"] !!}</a>
                                </li>
                                <li role="presentation">
                                    <a href="#proposal" aria-controls="proposal" role="tab" data-toggle="tab" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_2_label">
                                        <i class="fi flaticon-heart-rate-monitor"></i>{!! $template_sources["list_item_2_label"] !!}</a>
                                </li>
                                <li role="presentation">
                                    <a href="#engagement" aria-controls="engagement" role="tab" data-toggle="tab" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_3_label">
                                        <i class="fi flaticon-ring"></i>{!! $template_sources["list_item_3_label"] !!}</a>
                                </li>
                            </ul>

                            <div class="tab-content" style="direction: rtl; text-align: right;">
                                <div role="tabpanel" class="row tab-pane fade in active" id="first-meet">
                                    <div class="col col-lg-6 col-md-4 col-sm-5">
                                        <img src="{{ URL::asset('templates/sweetheart/images/story/img-1.jpg') }}" class="img img-responsive" alt>
                                    </div>
                                    <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_0_label">{!! $template_sources["list_item_0_label"] !!}</h3>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_0_content">{!! $template_sources["list_item_0_content"] !!}</p>
                                    </div>
                                </div>

                                <div role="tabpanel" class="row tab-pane fade" id="first-date">
                                    <div class="col col-lg-6 col-md-4 col-sm-5">
                                        <img src="{{ URL::asset('templates/sweetheart/images/story/img-2.jpg') }}" class="img img-responsive" alt>
                                    </div>
                                    <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_1_label">{!! $template_sources["list_item_1_label"] !!}</h3>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_1_content">{!! $template_sources["list_item_1_content"] !!}</p>
                                    </div>
                                </div>

                                <div role="tabpanel" class="row tab-pane fade" id="proposal">
                                    <div class="col col-lg-6 col-md-4 col-sm-5">
                                        <img src="{{ URL::asset('templates/sweetheart/images/story/img-3.jpg') }}" class="img img-responsive" alt>
                                    </div>
                                    <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_2_label">{!! $template_sources["list_item_2_label"] !!}</h3>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_2_content">{!! $template_sources["list_item_2_content"] !!}</p>
                                    </div>
                                </div>

                                <div role="tabpanel" class="row tab-pane fade" id="engagement">
                                    <div class="col col-lg-6 col-md-4 col-sm-5">
                                        <img src="{{ URL::asset('templates/sweetheart/images/story/img-4.jpg') }}" class="img img-responsive" alt>
                                    </div>
                                    <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_3_label">{!! $template_sources["list_item_3_label"] !!}</h3>
                                        <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="list_item_3_content">{!! $template_sources["list_item_3_content"] !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of story-box -->
                </div> <!-- end of col -->

                <div class="col col-lg-4">
                    <div class="pic-holder">
                        <img src="{{ URL::asset('templates/sweetheart/images/story/img-5.jpg') }}" class="img img-responsive" alt>
                        <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>אנחנו כל כך מתרגשים</h3>
                    </div>
                </div>
            </div>

        </div> <!-- end of container -->
    </section>
    <!-- end of story -->


    <!-- start events -->
    <section class="events section-padding" id="events">
        <div class="container">
            <div class="row section-title">
                <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    <h2>מיקום האירוע</h2>
                    <div class="double-line double-line-bottom"></div>
                </div>
            </div> <!-- end of section-title -->

            <div class="row content">
                <div class="col col-md-6">
                    <div class="event-boxes">
                        <div class="left-half"></div>
                        <div class="right-half"></div>
                        <div class="clip"><i class="fi flaticon-clip-1"></i></div>
                        <div class="event-box-inner" style="direction: rtl; text-align: right;">
                            <div class="main-ceromony">
                                <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>קבלת אורחים</h3>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> Monday, 21 June 2017 (8.00 AM - 10.00 AM)</li>
                                    <li><i class="fa fa-location-arrow"></i> 22/1, hotel royel khulna, Bangladesh.</li>
                                </ul>
                            </div>
                            <div class="reception">
                                <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>טקס ראשי</h3>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> Monday, 21 June 2017 (8.00 AM - 10.00 AM)</li>
                                    <li><i class="fa fa-location-arrow"></i> 22/1, hotel royel khulna, Bangladesh.</li>
                                </ul>
                            </div>
                            <div class="bachalor-party">
                                <h3 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>המסיבה</h3>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> Monday, 21 June 2017 (8.00 AM - 10.00 AM)</li>
                                    <li><i class="fa fa-location-arrow"></i> 22/1, hotel royel khulna, Bangladesh.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of events -->


    <!-- start gallery -->
    <section class="gallery section-padding parallax-flower" data-bg-image-top="images/big-flower.png"  data-bg-image-bottom="{{ URL::asset('templates/sweetheart/images/big-flower-bt.png') }}" id="gallery">
        <div class="container">
            <div class="row section-title" dir="rtl">
                <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    <h2 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="gallery_title">{!! $template_sources["gallery_title"] !!}</h2>
                    <div class="double-line double-line-bottom"></div>
                </div>
            </div> <!-- end of section-title -->

            <div class="row gallery-boxes">
                <div class="col col-md-3 col-xs-6 wow fadeIn">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-1.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-1.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-2.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-2.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.4s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-3.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-3.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-4.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-4.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-5.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-5.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-6.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-6.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.4s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-7.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-7.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-8.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-8.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0.8s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-9.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-9.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="1s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-10.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-10.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="1.2s">
                    <div class="box">
                        <a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-11.jpg') }}" class="fancybox" data-fancybox-group="gallery">
                            <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-11.jpg') }}" class="img img-responsive" alt>
                            <div class="fade-icon">
                                <span class="icon"><i class="fa fa-search"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-md-3 col-xs-6 wow fadeIn" data-wow-delay="1.4s">
                    <div class="box">
                    <!--<a href="{{ URL::asset('templates/sweetheart/images/gallery/big-photo/img-12.jpg') }}" class="fancybox" data-fancybox-group="gallery">-->
                        <img src="{{ URL::asset('templates/sweetheart/images/gallery/img-12.jpg') }}" class="img img-responsive" alt>
                        <div class="fade-icon">
                            <span class="icon"><i class="fa fa-search"></i></span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of gallery -->

    <!-- start rsvp -->
    <section class="rsvp section-padding parallax" data-bg-image="{{ URL::asset('templates/sweetheart/images/rsvp-bg.jpg') }}" id="rsvp">
        <div class="container">
            <div class="row section-title">
                <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    <h2>אישור הגעה</h2>
                    <div class="double-line double-line-bottom"></div>
                </div>
            </div> <!-- end of section-title -->

            <div class="row content">
                <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="rsvp-form-wrapper">
                        <div class="border-box">
                            <i class="fi flaticon-clip-1 top-clip"></i>
                            <i class="fi flaticon-clip-1 bottom-clip"></i>
                            <div></div>
                        </div>
                        <h4 contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="rsvp_content">{!! $template_sources["rsvp_content"] !!}</h4>
                        <form id="rsvp-form" class="form form-inline" method="post">
                            <div class="row">
                                <div class="form-group col col-sm-6">
                                    <select name="guest" class="form-control">
                                        <option disabled="disabled" selected>Number of Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col col-sm-6">
                                    <select name="events" class="form-control">
                                        <option disabled="disabled" selected>I am attending</option>
                                        <option>Al events</option>
                                        <option>Wedding ceremony</option>
                                        <option>Reception party</option>
                                    </select>
                                </div>

                                <div class="form-group col col-sm-12">
                                    <textarea name="notes" class="form-control" placeholder="Your Message" ></textarea>
                                </div>

                                <div class="form-group col col-sm-12">
                                    <button type="submit" class="btn btn-default theme-btn">אשר הגעה</button>
                                    <span id="loader"><img src="images/rsvp-ajax-loader.gif" alt="Loader"></span>
                                </div>
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Try again later. </div>
                            </div>
                        </form> <!-- end of form -->
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of rsvp -->

    <!-- start footer -->
    <footer class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1">
                    <div class="box">
                        <!-- frame -->
                        <div class="left-top-border"></div>
                        <div class="right-top-border"></div>
                        <div class="bottom-right-border"></div>
                        <div class="bottom-left-border"></div>
                        <!-- frame -->

                        <div class="love-birds wow fadeInSlow"><i class="fi flaticon-birds-in-love"></i></div>
                        <h2 class="wow fadeInSlow" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }}>אנחנו נשמח לראות אתכם</h2>
                        <p class="wow fadeInSlow">{{ $wedding_props["groom_name"] }} & {{ $wedding_props["bride_name"] }}</p>
                        <span class="wow fadeInSlow">30 Jun 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="{{ URL::asset('templates/sweetheart/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('templates/sweetheart/js/bootstrap.min.js') }}"></script>

<!-- Plugins for this template -->
<script src="{{ URL::asset('templates/sweetheart/js/jquery-plugin-collection.js') }}"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>

<!-- Custom script for this template -->
<script src="{{ URL::asset('templates/sweetheart/js/script.js') }}"></script>

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
                        alert('1');
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
