<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wyzi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('templates/wyzi/img/favicon.ico') }}">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/font-awesome.min.css') }}">
    <!-- Mean Menu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/meanmenu.min.css') }}">
    <!-- Owl Carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/owl.carousel.css') }}">
    <!-- Montserrat fonts CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/fonts/montserrat/font-style.css') }}">
    <!-- Magnific Popup CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/magnific-popup.css') }}">
    <!-- Default Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/default.css') }}">
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/style.css') }}">
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('templates/wyzi/css/responsive.css') }}">
    <!-- Modernizer JS
    ============================================ -->
    <script src="{{ URL::asset('templates/wyzi/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
        </div>
    </div>
</div>
<!-- Header
============================================ -->
<div class="header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Top Left -->
                <div class="header-top-left col-md-8 col-xs-12">
                    <p><i class="fa fa-phone"></i>Call us +49 1234 5678 9</p>
                    <p><i class="fa fa-caret-right"></i><a href="#">Support</a></p>
                    <div class="header-search float-left">
                        <form action="#">
                            <input type="text" placeholder="search something" />
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Header Top Right Social -->
                <div class="header-right col-md-4 col-xs-12 fix">
                    <div class="header-social float-right">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a>
                        <a href="#" class="google"><i class="fa fa-google"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="header-bottom-wrap">
                        <!-- Logo -->
                        <div class="header-logo float-left">
                            <a href="index.html"><img src="{{ URL::asset('templates/wyzi/img/logo.png') }}" alt="logo" /></a>
                        </div>
                        <!-- Header Link -->
                        <div class="header-link float-right">
                            <a href="login.html" class="button blue icon">sing in <i class="fa fa-angle-right"></i></a>
                            <a href="register.html" class="button">register</a>
                        </div>
                        <!-- Main Menu -->
                        <div class="main-menu float-right hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.html">home</a></li>
                                    <li><a href="wall.html">wall</a></li>
                                    <li><a href="offer.html">offers</a></li>
                                    <li><a href="business.html">business</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="#">pages<i class="fa fa-caret-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="message.html">message</a></li>
                                            <li><a href="business.html">my business</a></li>
                                            <li><a href="business-details.html">my business details</a></li>
                                            <li><a href="offer.html">offer</a></li>
                                            <li><a href="photo.html">photo</a></li>
                                            <li><a href="profile.html">profile</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="wall.html">wall</a></li>
                                            <li><a href="wall-collection.html">wall collection</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="mobile-menu hidden-lg hidden-md">
                            <nav>
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="wall.html">wall</a></li>
                                    <li><a href="offer.html">offers</a></li>
                                    <li><a href="business.html">business</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="#">pages<i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="message.html">message</a></li>
                                            <li><a href="business.html">my business</a></li>
                                            <li><a href="business-details.html">my business details</a></li>
                                            <li><a href="offer.html">offer</a></li>
                                            <li><a href="photo.html">photo</a></li>
                                            <li><a href="profile.html">profile</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="wall.html">wall</a></li>
                                            <li><a href="wall-collection.html">wall collection</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map
============================================ -->
<div class="map-container home-map-container margin-bottom-100">
    <div id="home-map"></div>
    <!-- Map Lock & Unlock -->
    <span class="map-unlock"></span>
    <!-- Location Search -->
    <div class="location-search-float">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="location-search fix">
                        <h2>search your location</h2>
                        <form action="#">
                            <div class="input-kayword"><input type="text" placeholder="search keywords" /></div>
                            <div class="input-location"><input type="text" placeholder="all location" /></div>
                            <div class="input-range orange">
                                <p>Radius:  <span></span></p>
                                <input type="range" value="70" min="0" max="180" />
                            </div>
                            <div class="input-submit">
                                <button><i class="fa fa-search"></i> search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category Search
============================================ -->
<div class="category-search-area margin-bottom-100">
    <div class="container">
        <div class="row">
            <!-- Section Title & Search -->
            <div class="section-title section-title-search col-xs-12 margin-bottom-100">
                <h1>categories</h1>
                <div class="search-form float-right">
                    <form action="#">
                        <input type="text" placeholder="categories" />
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12">
                <!-- Category Search Slider -->
                <div class="category-search-slider">
                    <div class="sin-cat-item">
                        <div class="category-item">
                            <span class="cat-icon icon-entertainment float-left">icon</span>
                            <h3>Entertainment</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <span class="cat-icon icon-place float-left">icon</span>
                            <h3>Places</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sin-cat-item">
                        <div class="category-item">
                            <span class="cat-icon icon-parks float-left">icon</span>
                            <h3>Parks & Playgrounds</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <span class="cat-icon icon-real-estate float-left">icon</span>
                            <h3>Real Estates</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sin-cat-item">
                        <div class="category-item">
                            <span class="cat-icon icon-shopping float-left">icon</span>
                            <h3>Shopping</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <span class="cat-icon icon-vacation float-left">icon</span>
                            <h3>Vacation Holidays</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sin-cat-item">
                        <div class="category-item">
                            <span class="cat-icon icon-medical float-left">icon</span>
                            <h3>Health & Medical</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <span class="cat-icon icon-food float-left">icon</span>
                            <h3>Restaurants & Food</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sin-cat-item">
                        <div class="category-item">
                            <span class="cat-icon icon-entertainment float-left">icon</span>
                            <h3>Entertainment</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <span class="cat-icon icon-place float-left">icon</span>
                            <h3>Places</h3>
                            <ul>
                                <li><a href="#">Theaters (5)</a></li>
                                <li><a href="#">Bars (8)</a></li>
                                <li><a href="#">Clubs (7)</a></li>
                                <li><a href="#">Lounges (4)</a></li>
                                <li><a href="#">View all »</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Search
============================================ -->
<div class="location-search-area margin-bottom-100">
    <div class="container">
        <div class="row">
            <!-- Section Title & Search -->
            <div class="section-title section-title-search col-xs-12 margin-bottom-100">
                <h1>locations</h1>
                <div class="search-form float-right">
                    <form action="#">
                        <input type="text" placeholder="categories" />
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12">
                <!-- Location Search Slider -->
                <div class="location-search-slider">
                    <div class="sin-location-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/location/1.jpg') }}" alt="" /></a>
                        <a href="#" class="text">
                            <h2>new york city - united states</h2>
                            <span>15</span>
                        </a>
                    </div>
                    <div class="sin-location-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/location/2.jpg') }}" alt="" /></a>
                        <a href="#" class="text">
                            <h2>SHANGHAI - CHINA</h2>
                            <span>20</span>
                        </a>
                    </div>
                    <div class="sin-location-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/location/3.jpg') }}" alt="" /></a>
                        <a href="#" class="text">
                            <h2>london - england</h2>
                            <span>12</span>
                        </a>
                    </div>
                    <div class="sin-location-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/location/4.jpg') }}" alt="" /></a>
                        <a href="#" class="text">
                            <h2>venizia - italy</h2>
                            <span>08</span>
                        </a>
                    </div>
                    <div class="sin-location-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/location/3.jpg') }}" alt="" /></a>
                        <a href="#" class="text">
                            <h2>london - england</h2>
                            <span>12</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Offer
============================================ -->
<div class="our-offer-area margin-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Offer Slider -->
                <div class="our-offer-slider">
                    <div class="sin-offer-item row">
                        <a href="#" class="image col-md-5 col-xs-12 float-right"><img src="{{ URL::asset('templates/wyzi/img/offer/1.jpg') }}" alt="" /><span class="offer-label">DISCOUNT 30%</span></a>
                        <div class="content col-md-7 col-xs-12">
                            <div class="head fix">
                                <div class="logo float-right"><img src="{{ URL::asset('templates/wyzi/img/offer/logo.png') }}" alt="" /></div>
                                <div class="text float-left"><h3>OUR OFFER number 1</h3><h4>SUBTITLE OF THE OFFER GOES HERE</h4></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elit</p>
                            <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</p>
                            <a href="#" class="button orange icon">view offer <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="sin-offer-item row">
                        <a href="#" class="image col-md-5 col-xs-12 float-right"><img src="{{ URL::asset('templates/wyzi/img/offer/1.jpg') }}" alt="" /><span class="offer-label">DISCOUNT 30%</span></a>
                        <div class="content col-md-7 col-xs-12">
                            <div class="head fix">
                                <div class="logo float-right"><img src="{{ URL::asset('templates/wyzi/img/offer/logo.png') }}" alt="" /></div>
                                <div class="text float-left"><h3>OUR OFFER number 1</h3><h4>SUBTITLE OF THE OFFER GOES HERE</h4></div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elit</p>
                            <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</p>
                            <a href="#" class="button orange icon">view offer <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recently Added
============================================ -->
<div class="recently-added-area margin-bottom-100">
    <div class="container">
        <div class="row">
            <!-- Section Title -->
            <div class="section-title col-xs-12 margin-bottom-50">
                <h1>recently added</h1>
            </div>
            <div class="col-xs-12">
                <!-- Recently Added Slider -->
                <div class="recently-added-slider">
                    <div class="sin-added-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/recently-added/1.jpg') }}" alt="" /></a>
                        <div class="text fix">
                            <div class="ratting fix">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h2><a href="#">Bio Cometics</a></h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="sin-added-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/recently-added/2.jpg') }}" alt="" /></a>
                        <div class="text fix">
                            <div class="ratting fix">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h2><a href="#">Best Of Nature</a></h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="sin-added-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/recently-added/3.jpg') }}" alt="" /></a>
                        <div class="text fix">
                            <div class="ratting fix">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h2><a href="#">Earth Water Nature</a></h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="sin-added-item">
                        <a href="#" class="image"><img src="{{ URL::asset('templates/wyzi/img/recently-added/1.jpg') }}" alt="" /></a>
                        <div class="text fix">
                            <div class="ratting fix">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h2><a href="#">Bio Cometics</a></h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Top
============================================ -->
<div class="footer-top">
    <div class="container">
        <div class="row">
            <!-- Footer About -->
            <div class="sin-footer footer-about col-md-3 col-sm-6 col-xs-12">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
            <!-- Footer Contact -->
            <div class="sin-footer footer-contact col-md-3 col-sm-6 col-xs-12">
                <h3>Contact info</h3>
                <p><span>Address</span>12 Baker Street, NYQ´C 54412</p>
                <p><span>Phone</span>+49 012 454 213 789</p>
                <p><span>Fax</span>+49 012 454 213 789</p>
                <p><span>E-Mail</span><a href="#">info@wyzi.com</a></p>
            </div>
            <!-- Footer Twitter -->
            <div class="sin-footer footer-twitter col-md-3 col-sm-6 col-xs-12">
                <h3>Twitter Feed</h3>
                <div class="twitter-feed">
                    <p><a href="#">@TWITTER</a> consetetur sadipscing elitr, sed diam nonumy...</p>
                    <span># 2 hours ago</span>
                </div>
            </div>
            <!-- Footer Payment -->
            <div class="sin-footer footer-payment col-md-3 col-sm-6 col-xs-12">
                <h3>Payment Methods</h3>
                <img src="{{ URL::asset('templates/wyzi/img/payment-method.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom
============================================ -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Footer Menu -->
                <nav class="footer-menu text-center">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Offers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/vendor/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/bootstrap.min.js') }}"></script>
<!-- Mean Menu JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/jquery.meanmenu.min.js') }}"></script>
<!-- Owl Carousel JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/owl.carousel.min.js') }}"></script>
<!-- ScrollUP JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/jquery.scrollup.min.js') }}"></script>
<!-- Range Slider JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/rangeslider.min.js') }}"></script>
<!-- Magnific Popup JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Range Slider JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/range-active.js') }}"></script>
<!-- Google Map APi
============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script src="{{ URL::asset('templates/wyzi/js/map-active/home-map.js') }}"></script>
<!-- Main JS
============================================ -->
<script src="{{ URL::asset('templates/wyzi/js/main.js') }}"></script>

</body>
</html>
