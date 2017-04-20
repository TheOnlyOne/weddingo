<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Saasapp :: Web App, Software, Mobile App & SaaS HTML template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('templates/frontend/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('templates/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('templates/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Stroke Gap Icons -->
    <link href="{{ URL::asset('templates/frontend/assets/stroke-gap-icons/style.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!--  Mean Menu -->
    <link rel="stylesheet" href="{{ URL::asset('templates/frontend/assets/meanmenu/meanmenu.min.css') }}">
    <!--  Owl stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('templates/frontend/assets/owl-carousel/owl.carousel.css') }}">
    <!-- Owl Theme -->
    <link rel="stylesheet" href="{{ URL::asset('templates/frontend/assets/owl-carousel/owl.theme.css') }}">
    <!-- Media Element -->
    <link rel="stylesheet" href="{{ URL::asset('templates/frontend/assets/media_elements/mediaelementplayer.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('templates/frontend/css/style.css') }}" rel="stylesheet">
    <!-- Color CSS -->
    <link id="main" href="{{ URL::asset('templates/frontend/css/color_01.css') }}" rel="stylesheet">
    <link id="theme" rel="stylesheet" href="{{ URL::asset('templates/frontend/css/color_01.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- ==============================================
     **PRE LOADER**
 =============================================== -->
<div id="page-loader" class="primary-bg">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- ==============================================
     **HEADER**
 =============================================== -->
<header>
    <!-- Main Navigation -->
    <div id="main-navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 no-padding">
                    <div class="main-logo">
                        <img src="{{ URL::asset('templates/frontend/images/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <nav>
                        <ul>
                            <li class="sub-menu-parent">
                                <a href="#">Home <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu secondary-bg">
                                    <li><a href="index.html">Home Style 1</a></li>
                                    <li><a href="index_02.html">Home Style 2</a></li>
                                    <li><a href="index_03.html">Home Style 3</a></li>
                                    <li><a href="index_04.html">Home Style 4</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-parent"><a href="#">About <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu secondary-bg">
                                    <li><a href="about_01.html">About Style 01</a></li>
                                    <li><a href="about_02.html">About Style 02</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-parent"><a href="#">Pages <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu secondary-bg">
                                    <li><a href="features.html">Features</a></li>
                                    <li><a href="features_single.html">Features Single</a></li>
                                    <li><a href="demo.html">Demo Request</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="coming_soon.html">Coming Soon</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li class="sub-menu-parent"><a href="#">Blog <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu secondary-bg">
                                    <li><a href="blog_list.html">Blog</a></li>
                                    <li><a href="blog_single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="menu-alt"><a href="login.html">Login</a></li>
                            <li class="menu-alt"><a href="signup.html">Signup</a></li>
                        </ul>
                    </nav><!-- End Main Navigation -->
                </div>
            </div>
        </div><!-- End Container -->
    </div>
</header><!-- End Header -->
<!-- ==============================================
     **IMAGE BANNER SECTION**
 =============================================== -->
<section id="main-banner">
    <div class="bg-animation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-content text-center">
                        <h3 class="hide">Banner</h3>
                        <img src="{{ URL::asset('templates/frontend/images/mac-book.png') }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>

        </div><!-- End Container -->
    </div><!-- End Background Animation -->
</section><!-- End Section -->
<!-- ==============================================
     **MAIN FEATURES**
 =============================================== -->
<section id="main-features" class="ptb-80 hash bb-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="box-style-1">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Web"></i>
                    </div>
                    <div class="body">
                        <h5>Bootstrap Based</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="box-style-1">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Book"></i>
                    </div>
                    <div class="body">
                        <h5>Well Documented</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="box-style-1">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Heart"></i>
                    </div>
                    <div class="body">
                        <h5>Easy To Use</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **HOW IT WORKS**
 =============================================== -->
<section id="works" class="ptb-80 bb-1">
    <div class="container">
        <div class="text-center">
            <h2>How It Works?</h2>
            <div class="seperator"></div>
        </div>
        <div class="tabbable full-width-tabs">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-one">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <img src="{{ URL::asset('templates/frontend/images/step-1.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 col-xs-12 ptb-40">
                            <div class="main-content p-20">
                                <h3><span>Build Your Own</span><br>Application Pool</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. Aliquam nunc nunc, eleifend a sodales vel, tempor sit amet mi. Sed quis orci at orci elementum hendrerit. Nulla libero arcu, dapibus ut nunc vel, luctus fringilla mi. Nullam in fermentum ipsum. Mauris iaculis dui hendrerit, mattis erat id, porttitor ipsum.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-two">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <img src="{{ URL::asset('templates/frontend/images/step-2.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 col-xs-12 ptb-40">
                            <div class="main-content p-20">
                                <h3><span>Search for</span><br>Uploaded Files</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. Aliquam nunc nunc, eleifend a sodales vel, tempor sit amet mi. Sed quis orci at orci elementum hendrerit. Nulla libero arcu, dapibus ut nunc vel, luctus fringilla mi. Nullam in fermentum ipsum. Mauris iaculis dui hendrerit, mattis erat id, porttitor ipsum.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-three">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <img src="{{ URL::asset('templates/frontend/images/step-3.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 col-xs-12 ptb-40">
                            <div class="main-content p-20">
                                <h3><span>Keep The Files</span><br>Safe and Secure</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. Aliquam nunc nunc, eleifend a sodales vel, tempor sit amet mi. Sed quis orci at orci elementum hendrerit. Nulla libero arcu, dapibus ut nunc vel, luctus fringilla mi. Nullam in fermentum ipsum. Mauris iaculis dui hendrerit, mattis erat id, porttitor ipsum.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-four">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <img src="{{ URL::asset('templates/frontend/images/step-4.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 col-xs-12 ptb-40">
                            <div class="main-content p-20">
                                <h3><span>Share with</span><br>Your Own Friends</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. Aliquam nunc nunc, eleifend a sodales vel, tempor sit amet mi. Sed quis orci at orci elementum hendrerit. Nulla libero arcu, dapibus ut nunc vel, luctus fringilla mi. Nullam in fermentum ipsum. Mauris iaculis dui hendrerit, mattis erat id, porttitor ipsum.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list">
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Lorem ipsum dolor sit amet</li>
                                            <li><i class="fa fa-arrow-circle-o-right primary-color"></i>Duis lacinia dolor quis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab-one" data-toggle="tab" class="primary-bg">
                        <i>1</i>
                        <h5 class="heading-alt"><span>Build Your Own</span><br>Application Pool</h5>
                    </a>
                </li>
                <li>
                    <a href="#tab-two" data-toggle="tab" class="secondary-bg">
                        <i>2</i>
                        <h5 class="heading-alt"><span>Search for</span><br>Uploaded Files</h5>
                    </a>
                </li>
                <li>
                    <a href="#tab-three" data-toggle="tab" class="primary-bg">
                        <i>3</i>
                        <h5 class="heading-alt"><span>Keep The Files</span><br>Safe and Secure</h5>
                    </a>
                </li>
                <li>
                    <a href="#tab-four" data-toggle="tab" class="secondary-bg">
                        <i>4</i>
                        <h5 class="heading-alt"><span>Share with</span><br>Your Own Friends</h5>
                    </a>
                </li>
            </ul>

        </div> <!-- /tabbable -->
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **FEATURES SECTION**
 =============================================== -->
<section class="feature ptb-80 hash bb-1">
    <h3 class="hide">Features</h3>
    <div class="col-md-6 col-md-push-6 feature-image no-padding">
        <div class="browser">
            <div class="top-bar">
                <ul class="lights">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="frame">
                <img class="img-responsive" alt="" src="{{ URL::asset('templates/frontend/images/builder-hero.png') }}">
            </div>
        </div>

    </div>
    <div class="container feature-desc">
        <div class="row">
            <div class="col-md-5 feature-info">
                <article>
                    <h3><span>Create Your </span><br> File Zone</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud officia deserunt mollit exercitation.</p>
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui anim id est laborum.</p>
                    <a class="btn btn-theme-primary" href="#">Learn More</a>
                </article>

            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<section class="feature ptb-80 bb-1">
    <h3 class="hide">Features</h3>
    <div class="col-md-6 feature-image no-padding">
        <div class="browser">
            <div class="top-bar">
                <ul class="lights">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="frame">
                <img class="img-responsive" alt="" src="{{ URL::asset('templates/frontend/images/builder-hero.png') }}">
            </div>
        </div>

    </div>
    <div class="container feature-desc">
        <div class="row">
            <div class="col-md-5 col-md-push-7 feature-info">
                <article>
                    <h3><span>Organize Quickly</span><br> and Safely</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud officia deserunt mollit exercitation.</p>
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui anim id est laborum.</p>
                    <a class="btn btn-theme-primary" href="#">Learn More</a>
                </article>

            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<section class="feature ptb-80 hash bb-1">
    <h3 class="hide">Features</h3>
    <div class="col-md-6 col-md-push-6 feature-image no-padding">
        <div class="browser">
            <div class="top-bar">
                <ul class="lights">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="frame">
                <img class="img-responsive" alt="" src="{{ URL::asset('templates/frontend/images/builder-hero.png') }}">
            </div>
        </div>

    </div>
    <div class="container feature-desc">
        <div class="row">
            <div class="col-md-5 feature-info">
                <article>
                    <h3><span>Share With Your</span><br> Friends</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud officia deserunt mollit exercitation.</p>
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui anim id est laborum.</p>
                    <a class="btn btn-theme-primary" href="#">Learn More</a>
                </article>

            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **NEEDS OF THE APP**
 =============================================== -->
<section id="needs" class="ptb-80">
    <div class="container">
        <div class="text-center">
            <h2>Need of Saasapp</h2>
            <div class="seperator"></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Like"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Clean Design</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Crown"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Item Support</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Tablet"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Responsive Design</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Web"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Bootstrap Based</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-30">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Keyboard"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Clean Coded</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Book"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Well Documented</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Heart"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Easy to Use</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box-style-2">
                    <div class="icon-container primary-bg">
                        <i class="icon icon-Starship"></i>
                    </div>
                    <div class="body text-center pt-20">
                        <h5>Product Based</h5>
                        <p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **VIRTUAL TOUR**
 =============================================== -->
<section id="video" class="secondary-overlay ptb-80">
    <h3 class="hide">Video</h3>
    <div class="container">
        <div class="text-center pb-20">
            <h2 class="heading-alt">Take a Visual  Tour</h2>
            <div class="seperator para-alt"></div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="fullhw">
                    <video class="virtual-video" style="width:100%;height:100%" poster="{{ URL::asset('templates/frontend/videos/laptop-video.png') }}" controls="controls" preload="none">
                        <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                        <source type="video/mp4" src="videos/laptop-video.mp4" />
                        <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                        <source type="video/webm" src="myvideo.html" />
                        <!-- Ogg/Vorbis for older Firefox and Opera versions -->
                        <source type="video/ogg" src="videos/laptop-video.ogv" />
                        <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                        <object   type="application/x-shockwave-flash" data="{{ URL::asset('templates/frontend/assets/media_elements/flashmediaelement.swf') }}">
                            <param name="movie" value="{{ URL::asset('templates/frontend/assets/media_elements/flashmediaelement.swf') }}" />
                            <param name="flashvars" value="controls=true&file=videos/laptop-video.mp4" />
                            <!-- Image as a last resort -->
                            <img src="{{ URL::asset('templates/frontend/videos/laptop-video.png') }}" width="320" height="240" alt="video" title="No video playback capabilities" />
                        </object>
                    </video>
                </div>
            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **MOBILE APP SECTION**
 =============================================== -->
<section id="mobile-app" class="bb-1 pt-20">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 hidden-xs">
                <div class="mobile-app-image">
                    <img src="{{ URL::asset('templates/frontend/images/mobileapp.png') }}" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="mobile-app-description  ptb-80">
                    <h3><span>Download Our</span><br>Mobile App</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. Aliquam nunc nunc, eleifend a sodales vel, tempor sit amet mi. Sed quis orci at orci elementum hendrerit. Nulla libero arcu, dapibus ut nunc vel, luctus fringilla mi. Nullam in fermentum ipsum. Mauris iaculis dui hendrerit, mattis erat id, porttitor ipsum.
                    </p>
                    <p class="pt-30">
                        <a class="btn btn-appstore" href="javascript:void(0);" role="button"></a>
                        <a class="btn btn-googleplay" href="javascript:void(0);" role="button"></a>
                    </p>
                </div>
            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **TESTIMONIAL SECTION**
 =============================================== -->
<section id="testimonials" class="ptb-80 hash">
    <div class="container">
        <div class="row text-center pb-20">
            <h2>Users Says</h2>
            <div class="seperator"></div>
        </div>
        <div class="row">
            <div id="testimonials-carousel">
                <div class="item">
                    <figure class="testimonial-card">
                        <div class="author">
                            <img src="{{ URL::asset('templates/frontend/images/p1.jpg') }}" alt="sq-sample7"/>
                            <h5>Alex Samuel</h5><span>Saasapp User</span>
                        </div>
                        <blockquote class="card-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. </blockquote>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial-card">
                        <div class="author">
                            <img src="{{ URL::asset('templates/frontend/images/p2.jpg') }}" alt="sq-sample7"/>
                            <h5>BAHUBALI</h5><span>Data Analyst</span>
                        </div>
                        <blockquote class="card-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. </blockquote>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial-card">
                        <div class="author">
                            <img src="{{ URL::asset('templates/frontend/images/p3.jpg') }}" alt="sq-sample7"/>
                            <h5>PONNAMMA BABU</h5><span>Business Women</span>
                        </div>
                        <blockquote class="card-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. </blockquote>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial-card">
                        <div class="author">
                            <img src="{{ URL::asset('templates/frontend/images/p4.jpg') }}" alt="sq-sample7"/>
                            <h5>AKSHARA KISHORE</h5><span>Student</span>
                        </div>
                        <blockquote class="card-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis lectus vitae lobortis dapibus. </blockquote>
                    </figure>
                </div>

            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **PARTNERS SECTION**
 =============================================== -->
<section id="partners" class="ptb-50">
    <div class="container">
        <div class="row text-center pb-20">
            <h3><span class="text-uppercase text-muted">Driving Solution at some of the world's smartest companies</span></h3>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo1.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo2.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo3.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo4.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo5.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo6.png') }}"  alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo7.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo8.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo1.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo2.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo3.png') }}"  alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 p-10 text-center">
                <img class="img-responsive" src="{{ URL::asset('templates/frontend/images/logo4.png') }}"  alt="">
            </div>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **PROMOTIONAL SECTION**
 =============================================== -->
<section id="promotional" class="ptb-80 primary-bg">
    <div class="container">
        <div class="row text-center">
            <h2 class="heading-alt">Are You Really Interested In Saasapp!</h2>
            <p class="para-alt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="pt-20">
                <a href="signup.html" class="btn btn-theme-default">Sign Up Now</a>

            </p>
        </div>
    </div><!-- End Container -->
</section><!-- End Section -->
<!-- ==============================================
     **FOOTER**
 =============================================== -->
<footer id="footer" class="secondary-bg dark-footer">
    <div class="container footer-level-1 ptb-50" >
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h5 class="heading-alt">HOME</h5>
                <ul class="footer-menu">
                    <li><a href="index.html">Home Style 1</a></li>
                    <li><a href="index_02.html">Home Style 1</a></li>
                    <li><a href="index_03.html">Home Style 1</a></li>
                    <li><a href="index_04.html">Home Style 1</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h5 class="heading-alt">ABOUT</h5>
                <ul class="footer-menu">
                    <li><a href="about_01.html">About Style 1</a></li>
                    <li><a href="about_02.html">About Style 2</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="features_single.html">Features Single</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h5 class="heading-alt">PAGES</h5>
                <ul class="footer-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Signup</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h5 class="heading-alt">BLOG</h5>
                <ul class="footer-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog_single.html">Blog Single</a></li>
                    <li><a href="careers.html">Careers</a></li>
                    <li><a href="coming_soon.html">Coming Soon</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h5 class="heading-alt">OTHER</h5>
                <ul class="footer-menu">
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="demo.html">Demo Request</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ URL::asset('templates/frontend/images/logo.png') }}" alt="" class="img-responsive">
                <br>
                <p>Voluptatem ad provident non veritatis beatae cupiditate.</p>
            </div>
        </div>
    </div><!-- End Container -->
    <div class="container footer-level-2">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 ptb-20 min-height">
                <h5 class="heading-alt">CONNECT WITH US</h5>
                <p>Voluptatem ad provident non veritatis beatae cupiditate.</p>
                <ul class="social-links">
                    <li><a href="javascript:void(0);"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="javascript:void(0);"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="javascript:void(0);"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="javascript:void(0);"><span class="fa fa-google-plus"></span></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 ptb-20 fbl-1 min-height">
                <h5 class="heading-alt">SUBSCRIBE</h5>
                <form class="subscribe-form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme-primary">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 ptb-20 fbl-1 min-height">
                <h5 class="heading-alt">CALL US</h5>
                <div class="footer-contact">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <p>+1 555 123456<br>(Anytime 24x7)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 ptb-20 min-height">
                <h5 class="heading-alt">MAIL US</h5>
                <div class="footer-contact">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <p>Customer Support<br><a href="mailto:support@company.com">support@company.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 ptb-20 text-center">
                <p>Copyright &COPY; Saasapp Software, Inc. 2005-2016. </p>
                <p class="policy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud officia deserunt mollit exercitation.</p>
            </div>
        </div>
    </div><!-- End Container -->
</footer><!-- End Footer -->
<!-- jQuery  -->
<script src="{{ URL::asset('templates/frontend/js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::asset('templates/frontend/js/bootstrap.min.js') }}"></script>
<!-- Mean Menu -->
<script src="{{ URL::asset('templates/frontend/assets/meanmenu/jquery.meanmenu.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ URL::asset('templates/frontend/assets/owl-carousel/owl.carousel.min.js') }}"></script>
<!-- Media Elements -->
<script src="{{ URL::asset('templates/frontend/assets/media_elements/mediaelement-and-player.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::asset('templates/frontend/js/custom.js') }}"></script>
</body>
</html>
