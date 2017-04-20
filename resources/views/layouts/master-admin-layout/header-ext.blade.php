<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('plugins/images/favicon.png') }}">
    <title>Weddingo - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    @yield('ext-scripts-n-styles')
    <![endif]-->
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
            <div class="top-left-part"><a class="logo" href="index.html"><b><img src="{{ URL::asset('/plugins/images/eliteadmin-logo.png') }}" alt="home" /></b><span class="hidden-xs"><img src="{{ URL::asset('plugins/images/eliteadmin-text.png') }}" alt="home" /></span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-right-circle ti-menu"></i></a></li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center"> <a href="#">
                                    <div class="user-img"> <img src="{{ URL::asset('plugins/images/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ URL::asset('plugins/images/users/sonu.jpg') }}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ URL::asset('plugins/images/users/arijit.jpg') }}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ URL::asset('plugins/images/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a> </div>
                        </li>
                        <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ URL::asset('plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- .Megamenu -->
                <li class="mega-dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                    <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Forms Elements</li>
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-advanced.html">Form Addons</a></li>
                                <li><a href="form-material-elements.html">Form Material</a></li> <li><a href="form-float-input.html">Form Float Input</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Advance Forms</li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-pickers.html">Form-pickers</a></li>
                                <li><a href="form-wizard.html">Form-wizards</a></li>
                                <li><a href="form-typehead.html">Typehead</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Table Example</li>
                                <li><a href="basic-table.html">Basic Tables</a></li> <li><a href="table-layouts.html">Table Layouts</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                <li><a href="editable-tables.html">Editable Tables</a></li>
                                <li><a href="foo-tables.html">FooTables</a></li>
                                <li><a href="jsgrid.html">JsGrid Tables</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Charts</li>
                                <li> <a href="flot.html">Flot Charts</a> </li>
                                <li><a href="morris-chart.html">Morris Chart</a></li>
                                <li><a href="chart-js.html">Chart-js</a></li>
                                <li><a href="peity-chart.html">Peity Charts</a></li>                                     <li><a href="knob-chart.html">Knob Charts</a></li>
                                <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                <li><a href="extra-charts.html">Extra Charts</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-12 m-t-40 demo-box">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-purple"><a href="../eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                            Demo 1</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-success"><a href="../eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                            Demo 2</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-info"><a href="../eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                            Demo 3</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-inverse"><a href="../eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                            Demo 4</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-warning"><a href="../eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                            Demo 5</a></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>
                                            Buy Now</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- /.Megamenu -->
                <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
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
                <li class="user-pro"> <a href="#" class="waves-effect"><img src="{{ URL::asset('plugins/images/users/varun.jpg') }}" alt="user-img"  class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">הקישורים שלי</li>
                <li> <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="index.html">Demographical</a> </li>
                        <li> <a href="index2.html">Minimalistic</a> </li>
                        <li> <a href="index3.html">Analitical</a> </li>
                        <li> <a href="index4.html">Simpler</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="../eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                        <li> <a href="../eliteadmin-crm/index.html">CRM Admin</a> </li>
                        <li> <a href="../eliteadmin-university/index.html">University Admin</a> </li>
                        <li> <a href="../eliteadmin-music/index.html">Music Admin</a> </li>
                        <li> <a href="../eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                        <li role="separator" class="divider"></li>
                        <li> <a href="../eliteadmin-inverse/index.html">Inverse</a></li>
                        <li> <a href="../eliteadmin-colors/index.html">Colors</a></li>
                        <li> <a href="../eliteadmin/index.html">Eliteadmin</a></li>
                        <li> <a href="../eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                        <li> <a href="../eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                        <li> <a href="../eliteadmin-modern/index.html">Modern</a></li>
                        <li> <a href="../eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                        <li> <a href="../eliteadmin-material/index3.html">Material Design</a></li>
                        <li> <a href="../eliteadmin-dark/index.html">Dark</a></li>
                        <li> <a href="../eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                        <li> <a href="../eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                        <li> <a href="../eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                        <li> <a href="../eliteadmin-iconbar/index4.html">Iconbar</a></li>
                        <li> <a href="../eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                        <li> <a href="../eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                    </ul>
                </li>
                <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="chat.html">Chat-message</a></li>
                        <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="inbox.html">Mail box</a></li>
                                <li> <a href="inbox-detail.html">Inbox detail</a></li>
                                <li> <a href="compose.html">Compose mail</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="contact.html">Contact1</a></li>
                                <li> <a href="contact2.html">Contact2</a></li>
                                <li> <a href="contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="panels-wells.html">Panels and Wells</a></li> <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="sweatalert.html">Sweat alert</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="progressbars.html">Progress Bars</a></li>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="list-style.html">List & Media object</a></li>
                        <li><a href="user-cards.html">User Cards</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                        <li><a href="nestable.html">Nesteble</a></li>
                        <li><a href="range-slider.html">Range Slider</a></li>
                        <li><a href="bootstrap.html">Bootstrap UI</a></li>
                        <li><a href="tooltip-stylish.html">Stylish Tooltips</a></li>
                    </ul>
                </li>
                <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form-basic.html">Basic Forms</a></li>
                        <li><a href="form-layout.html">Form Layout</a></li>
                        <li><a href="form-advanced.html">Form Addons</a></li>
                        <li><a href="form-material-elements.html">Form Material</a></li> <li><a href="form-float-input.html">Form Float Input</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                        <li><a href="form-img-cropper.html">Image Cropping</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-dropzone.html">File Dropzone</a></li>
                        <li><a href="form-pickers.html">Form-pickers</a></li>
                        <li><a href="form-wizard.html">Form-wizards</a></li>
                        <li><a href="form-typehead.html">Typehead</a></li>
                        <li><a href="form-xeditable.html">X-editable</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                        <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- Proffessional</li>
                <li> <a href="#" class="waves-effect active"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="starter-page.html">Starter Page</a></li>
                        <li><a href="blank.html">Blank Page</a></li>
                        <li><a href="javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="../email-templates/basic.html">Basic</a></li>
                                <li> <a href="../email-templates/alert.html">Alert</a></li>
                                <li> <a href="../email-templates/billing.html">Billing</a></li>
                                <li> <a href="../email-templates/password-reset.html">Reset Pwd</a></li>
                            </ul>
                        </li>
                        <li><a href="lightbox.html">Lightbox Popup</a></li>
                        <li><a href="treeview.html">Treeview</a></li>
                        <li><a href="search-result.html">Search Result</a></li>
                        <li><a href="utility-classes.html">Utility Classes</a></li>
                        <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="login2.html">Login v2</a></li>
                        <li><a href="animation.html">Animations</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="register2.html">Register v2</a></li>
                        <li><a href="recoverpw.html">Recover Password</a></li>
                        <li><a href="lock-screen.html">Lock Screen</a></li>
                        <li><a href="400.html">Error 400</a></li>
                        <li><a href="403.html">Error 403</a></li>
                        <li><a href="404.html">Error 404</a></li>
                        <li><a href="500.html">Error 500</a></li>
                        <li><a href="503.html">Error 503</a></li>
                    </ul>
                </li>
                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="flot.html">Flot Charts</a> </li>
                        <li><a href="morris-chart.html">Morris Chart</a></li>
                        <li><a href="chart-js.html">Chart-js</a></li>
                        <li><a href="peity-chart.html">Peity Charts</a></li>                                     <li><a href="knob-chart.html">Knob Charts</a></li>
                        <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                        <li><a href="extra-charts.html">Extra Charts</a></li>
                    </ul>
                </li>
                <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="basic-table.html">Basic Tables</a></li> <li><a href="table-layouts.html">Table Layouts</a></li>
                        <li><a href="data-table.html">Data Table</a></li>
                        <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                        <li><a href="responsive-tables.html">Responsive Tables</a></li>
                        <li><a href="editable-tables.html">Editable Tables</a></li>
                        <li><a href="foo-tables.html">FooTables</a></li>
                        <li><a href="jsgrid.html">JsGrid Tables</a></li>
                    </ul>
                </li>
                <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="fontawesome.html">Font awesome</a> </li>
                        <li> <a href="themifyicon.html">Themify Icons</a> </li>
                        <li> <a href="simple-line.html">Simple line Icons</a> </li>
                        <li><a href="linea-icon.html">Linea Icons</a></li>
                        <li><a href="weather.html">Weather Icons</a></li>
                    </ul>
                </li>
                <li> <a href="map-google.html" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
                <li> <a href="map-vector.html" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
                <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                <li class="nav-small-cap">--- Support</li>
                <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Starter Page</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Starter Page</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('content')
            </div>
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                    <label for="checkbox2" > Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4" > Toggle Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/genu.jpg') }}" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/ritesh.jpg') }}" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/arijit.jpg') }}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/govinda.jpg') }}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/hritik.jpg') }}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/john.jpg') }}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
                            <li><a href="javascript:void(0)"><img src="{{ URL::asset('plugins/images/users/pawandeep.jpg') }}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
@include('layouts.master-client-layout.footer-ext')
@yield('ext-footer-scripts')
</body>
</html>