<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/favicon.png') }}">
    <title>Weddingo - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    @yield('ext-scripts-n-styles')
    <![endif]-->
    <!-- Alef font -->
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">
</head>
<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><h2 style="font-family: sensations; font-weight: bold; font-size: 50px; text-align: center; color: #fff;">Weddingo</h2></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">הגדרות שלי</b> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="#"><i class="ti-wallet"></i> תשלומים</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ URL::route('/pricing/logout') }}"><i class="fa fa-power-off"></i> התנתק</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                </span> </div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro" style="text-align: center; font-weight: bold; font-size: 16px;"> <a href="#" class="waves-effect">ברוכים הבאים&nbsp;<span class="hide-menu">{{$couple_detail['bride_name']}} ו {{$couple_detail['groom_name']}}</span></a>
                </li>
                <li> <a href="{{ URL::route('master-client/index') }}" class="waves-effect"><i class="ti-home fa-fw" data-icon="v"></i> <span class="hide-menu"> עמוד הבית </span></a>
                </li>
                <li> <a href="{{ URL::route('/wedding/budgets') }}" class="waves-effect"><i class="ti-money fa-fw" data-icon="7"></i> <span class="hide-menu"> ניהול תקציב </span></a>
                </li>
                <li><a href="{{ URL::route('master-client/manageguests') }}" class="waves-effect"><i data-icon=")" class="ti-user fa-fw"></i> <span class="hide-menu">ניהול מוזמנים </span></a>
                </li>
                <li> <a href="{{ URL::route('/wedding/upload') }}" class="waves-effect"><i data-icon="/" class="ti-image fa-fw"></i> <span class="hide-menu">העלאת תמונות</span></a>
                </li>
                <li> <a href="{{ URL::route('/wedding/upload') }}" class="waves-effect"><i data-icon="&#xe00b;" class="ti-video-clapper fa-fw"></i> <span class="hide-menu">העלאת וידאו</span></a>
                </li>
                <li> <a href="{{ URL::route('/gallery') }}" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-file-image-o fa-fw"></i> <span class="hide-menu">הגלרייה שלי</span></a>
                </li>
                <li> <a href="{{ URL::route('master-client/user-template-picks') }}" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">בחירת תבנית הזמנה</span></a>
                </li>
                <li> <a href="{{ URL::route('/pricing') }}" class="waves-effect"><i data-icon="O" class="ti-package fa-fw"></i> <span class="hide-menu">הזמנת חבילה נוספת</span></a>
                </li>
                <li> <a href="{{ URL::route('/suppliers/list') }}" class="waves-effect"><i data-icon="S" class="ti-truck fa-fw"></i><span class="hide-menu" >ניהול ספקים</span></a> </li>
                <li> <a href="{{ URL::route('master-client/edit-last-pick-template') }}" class="waves-effect"><i data-icon="P" class="ti-slice fa-fw"></i> <span class="hide-menu">עריכת הזמנה </span></a> </li>
                <li> <a href="{{ URL::route('/wedding/task') }}" class="waves-effect"><i class="ti-check-box fa-fw" data-icon="7"></i> <span class="hide-menu">המשימות שלי</span></a></li>
                <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-table fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> סידורי הושבה <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">בקרוב</span></span></a></li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">@yield('inner-page-title')</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        @yield('breadcrumbs-nav')
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('content')
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; כל הזכויות שמורות לוודינגו</footer>
    </div>
    <!-- /#page-wrapper -->
</div>
@include('layouts.master-client-layout.footer-ext')
@yield('ext-footer-scripts')
</body>
</html>