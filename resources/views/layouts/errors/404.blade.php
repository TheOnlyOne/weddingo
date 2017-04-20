<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Weddingo - עמוד לא נמצא</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h1>404</h1>
            <h3 class="text-uppercase">העמוד שביקשת לא נמצא, אנא נסה שנית מאוחר יותר</h3>
            <p class="text-muted m-t-30 m-b-30">לא הצלחנו למצוא את הדף שאליו ניסית לגשת, אנא נסה במועד מאוחר יותר</p>
            <a href="{{ URL::route('master-client/manageguests')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">חזרה לעמוד הבית</a> </div>
        <footer class="footer text-center">כל הזכויות שמורות לוודינגו</footer>
    </div>
</section>
<!-- jQuery -->
<script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>

</body>
</html>
