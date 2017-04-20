<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>החתונה של {{ $wedding_props["groom_name"] }} & {{ $wedding_props["bride_name"] }}</title>
    <link href="img/favicon.png" rel="icon" type="{{ URL::asset('templates/sally/image/png') }}">
    <link rel="stylesheet" href="{{ URL::asset('templates/sally/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('templates/sally/css/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('templates/sally/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('templates/sally/css/style.css') }}">
    <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/earlyaccess/alefhebrew.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Popup modal -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <!-- end of popup modal -->
    <script src="{{ URL::asset('templates/sally/js/vendor/modernizr.js') }}"></script>
    <script src="{{ URL::asset('templates/sally/js/vendor/jquery-1.11.1.min.js') }}"></script>
    <script>
        jQuery(function ($){
            "use strict";
            // Months = 0 to 11 (Jan to Dec)
            var weddDay = new Date(2018, 6, 12);// YYYY, M, DD
            $('#default-countdown').countdown({until: weddDay, format: 'YOD'});
        });
    </script>
    <script src="{{ URL::asset('templates/animatedModal.min.js') }}"></script>
</head>
<body class="home">
<!-- Mobile navigation -->
<input type="hidden" id="general-token" name="_token" value="{{ csrf_token() }}">
<nav class="mobile-nav-menu">
    <a class="mobile-logo" href="index-2.html">{{ $wedding_props["groom_name"] }} && {{ $wedding_props["bride_name"] }} מתחתנים</a>
    <a class="mobile-menu-btn" href="#"><span></span></a>
    <div class="mobile-menu-container"></div>
</nav><!-- End .mobile-nav-menu -->

<input type="file" id="upload_image_gallery" style="display:none">


<!-- Header -->
<header class="default" id="header">
    <nav>
        <ul>
            <li><a title="RSVP &amp; Schedule" href="#rsvp">אישור הזמנה</a></li>
            <li><a title="Gallery" href="#couple-gallery">גלרייה</a></li>
            <li><a title="Groomsmen" href="#groomsmen-gallery">חברים שלו</a></li>
            <li><a title="Bridesmaids" href="#bridesmaid-gallery">חברות שלה</a></li>
            <li><a title="The Couple" href="#couple">הזוג</a></li>
        </ul>
    </nav>
    <h1 style="font-family: 'Alef Hebrew';">{{ $wedding_props["groom_name"] }} <em>&amp;</em> {{ $wedding_props["bride_name"] }}</h1>
    <span class="ceremony-date" style="font-family: 'Alef Hebrew';" dir="rtl">{{ $wedding_props["date"] }}</span>
</header>

<!-- Couple section -->
<section id="couple" class="row">
    <div class="columns large-12">
        <div class="columns large-4 medium-4">
				<span class="headshot groom" id="headshot-groom">
					<img src="{{ URL::asset('templates/sally/img/headshot-groom.png') }}" alt="groom headshot" width="233">
				</span>
            <h3 style="font-family: 'Alef Hebrew'; text-align: right;">{!!html_entity_decode($wedding_props["groom_name"])!!}</h3>
            <p contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} class="desc groom" id="groom_content" style="text-align: right;">
                {!! html_entity_decode($template_sources["groom_content"]) !!}
            </p>
        </div><!-- End .large-4 -->
        <div class="columns large-4 medium-4">
            <p class="giant-ampersand">&amp;</p>
        </div><!-- End .large-4 -->
        <div class="columns large-4 medium-4">
				<span class="headshot bride" id="headshot-bride">
					<img src="{{ URL::asset('templates/sally/img/headshot-bride.png') }}" alt="bride headshot" width="233">
				</span>
            <h3 style="font-family: 'Alef Hebrew'; text-align: right;">{!! $wedding_props["bride_name"] !!}</h3>
            <p class="desc bride" id="bride_content" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="text-align: right;">
                {!! $template_sources["bride_content"] !!}
            </p>
        </div><!-- End .large-4 -->
    </div><!-- End .large-12 -->
</section><!-- End #couple -->

<!-- Countdown section -->
<section id="countdown">
    <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="countdown_title">{!! $template_sources["countdown_title"] !!}</h2>
    <div id="default-countdown"></div>
</section><!-- End #countdown -->

<!-- Bridesmaids gallery section -->
<section id="bridesmaid-gallery">
    <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="bridesman_title">{!! $template_sources["bridesman_title"] !!}</h2>
    <nav class="dg-nav">
        <span class="dg-prev">&lt;</span>
        <span class="dg-next">&gt;</span>
    </nav>
    <div id="bridesmaid-carousel" class="dg-container">
        <div class="dg-wrapper">

            <!-- begin bridesmaid image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/maid-of-honor.jpg')}}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/maid-of-honor.jpg') }}" alt="maid of honor">
                <div>
                    <span class="guest-name">Angela Romero</span>
                    <span class="guest-title">MAID OF HONOUR</span>
                    <span class="guest-story" id="couple_story_0" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;"> קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט</span>
                </div>
            </a>
            <!-- end bridesmaid image -->

            <!-- begin bridesmaid image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/bridesmaid2.jpg') }}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/bridesmaid2.jpg') }}" alt="bridesmaid">
                <div>
                    <span class="guest-name">Sue Storm</span>
                    <span class="guest-title">Bridesmaid</span>
                    <span class="guest-story" id="couple_story_1" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;"> קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט
</span>
                </div>
            </a>
            <!-- end bridesmaid image -->

            <!-- begin bridesmaid image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/bridesmaid1.jpg') }}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/bridesmaid1.jpg') }}" alt="bridesmaid">
                <div>
                    <span class="guest-name">Jean Grey</span>
                    <span class="guest-title">Bridesmaid</span>
                    <span class="guest-story" id="couple_story_2" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;">קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט
</span>
                </div>
            </a>
            <!-- end bridesmaid image -->

        </div><!-- End .dg-wrapper -->
    </div><!-- End #bridesmaid-carousel -->
    <div class="bridemaids-mobile-slider-wrap"><div class="bridemaids-mobile-slider"></div></div>
</section><!-- End #bridesmaid-gallery -->

<!-- Groomsmen gallery section -->
<section id="groomsmen-gallery">
    <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="groomsman_title">{{ $template_sources["groomsman_title"] }}</h2>
    <nav class="dg-nav-g">
        <span class="dg-prev-g">&lt;</span>
        <span class="dg-next-g">&gt;</span>
    </nav>
    <div id="groomsmen-carousel" class="dg-container">
        <div class="dg-wrapper-g">

            <!-- begin groomsman image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/best-man.jpg') }}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/best-man.jpg') }}" alt="groomsman">
                <div>
                    <span class="guest-name">Nick Smith</span>
                    <span class="guest-title">Best Man</span>
                    <span class="guest-story" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;">קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט
</span>
                </div>
            </a>
            <!-- end groomsman image -->

            <!-- begin groomsman image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/groomsman1.jpg') }}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/groomsman1.jpg') }}" alt="groomsman">
                <div>
                    <span class="guest-name">Peter Parker</span>
                    <span class="guest-title">Groomsman</span>
                    <span class="guest-story" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;">קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט
</span>
                </div>
            </a>
            <!-- end groomsman image -->

            <!-- begin groomsman image -->
            <a href="#" style="background:url({{ URL::asset('templates/sally/img/carousel/groomsman2.jpg') }}) no-repeat 50% center; background-size:cover;">
                <img src="{{ URL::asset('templates/sally/img/carousel/groomsman2.jpg') }}" alt="groomsman">
                <div>
                    <span class="guest-name">Scott Summers</span>
                    <span class="guest-title">Groomsman</span>
                    <span class="guest-story" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;">קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי סחטיר בלובק. תצטנפל בלינדו למרקל אס לכימפו, דול, צוט ומעיוט - לפתיעם ברשג - ולתיעם גדדיש. קוויז דומור ליאמום בלינך רוגצה. לפמעט
</span>
                </div>
            </a>
            <!-- end groomsman image -->

        </div><!-- End .dg-wrapper-g -->
    </div><!-- End #groomsmen-carousel -->
    <div class="groomsmen-mobile-slider-wrap"><div class="groomsmen-mobile-slider"></div></div>
</section><!-- End #groomsmen-gallery -->

<!-- Couple gallery section -->
<section id="couple-gallery">
    <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="gallery_title">{!! $template_sources["gallery_title"] !!}</h2>
    <div class="il-scattered-gallery">
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img1.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img2.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img3.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img4.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img5.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img1.jpg') }}" alt=""></a>
        <a href="#"><img src="{{ URL::asset('templates/sally/img/gallery/img2.jpg') }}" alt=""></a>
    </div>
    <div class="couple-slideshow-wrap">
        <ul id="couple-slideshow"></ul>
        <ul class="couple-thumbs"></ul>
    </div><!-- End .couple-slideshow-wrap -->
    <a id="gallery-launcher" href="#">Click to view gallery</a>
    <div class="couple-mobile-slider-wrap"><div class="couple-mobile-slider"></div></div>
</section><!-- End #couple-gallery -->

<!-- RSVP section -->
<section id="rsvp">
    <div class="rsvp-form-wrap">
        <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="rsvp_title">{!! html_entity_decode($template_sources["rsvp_title"]) !!}</h2>
        <p class="rsvp-desc" id="rsvp_content" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} style="font-family: 'Alef Hebrew'; direction: rtl;">{{$template_sources["rsvp_content"] }}</p>
        <form id="rsvp-form" style="text-align: right;">
            <div class="columns large-4 medium-4 small-4">
                <label for="guests">מס' אורחים</label>
                <select name="guests" id="guestsCount">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div><!-- End .large-4 -->
            <div class="columns large-8 medium-8 small-8">
                <label for="attending">סטטוס הגעה</label>
                <select name="attending" id="attendingStatus">
                    <option value="true">מגיע\ה</option>
                    <option value="false">לא מגיע\ה</option>
                </select>
            </div><!-- End .large-8 -->
            <div class="columns large-12">
                <input class="button" type="submit" id="attendingConfirmation" value="שלח נתונים" name="rsvp_submit" />
            </div><!-- End .large-12 -->
        </form>
    </div><!-- End .rsvp-form-wrap -->
</section><!-- End #rsvp -->
<a id="wedding_id">{{ ( ($edit_status == "1" ? '' : $wedding_id)) }}</a>
<a id="uid">{{ ( ($edit_status == "1" ? '' : $uid)) }}</a>
<!-- Schedule section -->
<section id="schedule">
    <div class="schedule-content-wrap">
        <h2 style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="schedule_title">{{ $template_sources["schedule_title"] }}</h2>
        <div class="row">
            <div class="columns large-6">
                <strong style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="event_0_title">טקס ראשי</strong>
                <img src="{{ URL::asset('templates/sally/img/ceremony-img.png') }}" alt="">
                <div class="event-details" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="event_0_content">
                    <p>16:00h - 17:00<br>
                        LONDON, UK<br>
                        10, FIRST AVENUE<br>
                        <a href="#">VIEW DIRECTIONS</a></p>
                    <p>Lorem ipsum dolor sit amet, con pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur</p>
                </div><!-- End .event-details -->
            </div><!-- End .columns.large-6 -->
            <div class="columns large-6">
                <strong style="font-family: 'Alef Hebrew'; direction: rtl;" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="event_1_title">מסיבה</strong>
                <img src="{{ URL::asset('templates/sally/img/party-img.png') }}" alt="">
                <div class="event-details" contenteditable={{ ( ($edit_status == "1" ? 'true' : 'false')) }} id="event_1_content">
                    <p>16:00h - 17:00<br>
                        LONDON, UK<br>
                        10, FIRST AVENUE<br>
                        <a href="#">VIEW DIRECTIONS</a></p>
                    <p>Lorem ipsum dolor sit amet, con pisi cing elit, sed do eiusmod tempor exercitationemut labore et dolore magna aliqua. Ut enim ad consequatur</p>
                </div><!-- End .event-details -->
            </div><!-- End .columns.large-6 -->
        </div><!-- End .row -->
    </div><!-- End .schedule-content-wrap -->
</section><!-- End #schedule -->

<script src="{{ URL::asset('templates/sally/js/foundation.min.js') }}"></script>
<script src="{{ URL::asset('templates/sally/js/plugins.js') }}"></script>
<script src="{{ URL::asset('templates/sally/js/scripts.js') }}"></script>

<script type="text/javascript">
    $(function() {
        $('#bridesmaid-carousel').gallery();
        $('#groomsmen-carousel').ggallery();
        $('#couple-gallery').ilScatteredGallery();
    });
</script>

<script>
    jQuery(document).foundation();
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
                        alert('1');
                    });
                } else {
                    // Content has not been changed
                }
            });
        });

        $("#attendingConfirmation").click(function(e) {
            e.preventDefault();
            var guestsCount = $("#guestsCount").val();
            var attendingConfirmation = $("#attendingStatus").val();
            var _token = $("#general-token").val();
            var wedding_id = $("#wedding_id").html();
            var uid = $("#uid").html();
            var data = {
                guestsCount,
                attendingConfirmation,
                wedding_id,
                uid,
                _token,
            };

            console.log(data);

            $.post("{{ route('confirmGuestAttending')}}", data, function (callback_data) {
            }).done(function() {
                alert('calllback has been done');
            });
        });
    });
</script>
</body>
</html>