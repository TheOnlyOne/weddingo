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

    <title>Weddingo - Suppliers</title>
</head>

<body class="">

<div class="page-wrapper">
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <div class="document-title">
                        <h1>רשימת ספקים</h1>
                    </div>
                    <form class="filter" method="post" action="http://preview.byaviators.com/template/superlist/listing-row.html?">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <select id="areas" class="form-control" title="בחר איזור">
                                        <option value="all">הכל</option>
                                        @foreach($areas as $area)
                                            <option value="area{{$area->id}}">{{$area->name}}</option>
                                            @foreach($area->Cities as $city)
                                                <option value="city{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <select id="categories" class="form-control" title="בחר קטגוריה">
                                        <option value="all">הכל</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>


                    <h2 class="page-title" id="title">10 תוצאות תואמים את החיפוש שלך</h2>

                    <div class="cards-row" id="cards">
                        <div class="pager">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">5</a></li>
                                <li class="active"><a>6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div><!-- /.pagination -->
                    </div>
                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

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

<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/owl.carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('templates/superlist/assets/libraries/bootstrap-fileinput/fileinput.min.js') }}"></script>

<script src="{{ URL::asset('templates/superlist/assets/js/superlist.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        buildNewCards('all','all');
        var area = $("#areas");
        var category = $("#categories");
        area.change(function (event) {
            buildNewCards(category.val(), area.val());
        });
        category.change(function (event) {
            buildNewCards(category.val(), area.val());
        });
    });
</script>
<script>
    function removeAllCards() {
        var cards = $("#cards > *");
        for(var i = 0; i < cards.length-1; i++)
        {
            cards[i].parentNode.removeChild(cards[i]);
        }
    }
</script>
<script>
    function buildNewCards(category, area) {
        removeAllCards();
        var cards = $("#cards");
        var pagination = $("#cards > *")[0];
        var title = $('#title');
        var counter = 0;
        @foreach($suppliers as $supplier)
            var pass = false;
            if(category == '{{$supplier->supplier_type}}' || category == 'all' || category == '')
                pass = true;
            var type = area.substring(0,4);
            if(pass && type == "city")
            {
                pass = false;
                if(area.substring(4) == '{{$supplier->city_id}}')
                    pass = true;
            }
            else if(pass && type == "area")
            {
                pass = false;
                if(area.substring(4) == '{{$supplier->City->Area->id}}')
                    pass = true;
            }
            if(pass)
            {
                counter++;
                var cardRow = $('<div class="card-row">');
                var cardRowInner = $('<div class="card-row-inner">');
                var cardRowImage;
                @if($supplier->theme_id != 0)
                    cardRowImage = $('<div class="card-row-image" data-background-image="{{ URL::asset($supplier->Theme->image_url) }}">');
                    cardRowImage.css("background-image", "url({{ URL::asset($supplier->Theme->image_url) }})");
                @else
                    cardRowImage = $('<div class="card-row-image" data-background-image="{{ URL::asset("upload/media/suppliers/default-theme.jpg") }}">');
                    cardRowImage.css("background-image", "url({{ URL::asset("upload/media/suppliers/default-theme.jpg") }})");
                @endif
                var cardRowBody = $('<div class="card-row-body">');
                var cardRowTitle = $('<h2 class="card-row-title">');
                var cardRowTitleLink = $('<a href="detail/{{$supplier->id}}">');
                cardRowTitleLink.text('{{$supplier->name}}');
                var cardRowContent = $('<div class="card-row-content">');
                var cardRowContentP = $('<p>');
                cardRowContentP.text("{{$supplier->desc}}".substring(0,200)+"...");
                var cardRowProperties = $('<div class="card-row-properties">');
                var dl = $('<dl>');
                var dd1 = $('<dd>');
                dd1.text("קטגוריה");
                var dt1 = $('<dt>');
                dt1.text('{{\App\SupplierType::find($supplier->supplier_type)->name}}');
                var dd2 = $('<dd>');
                dd2.text("מיקום");
                var dt2 = $('<dt>');
                dt2.text('{{\App\City::find($supplier->city_id)->name}}, {{$supplier->street}}');

                cardRowTitle.append(cardRowTitleLink);
                cardRowContent.append(cardRowContentP);
                cardRowBody.append(cardRowTitle);
                cardRowBody.append(cardRowContent);

                dl.append(dd1);
                dl.append(dt1);
                dl.append(dd2);
                dl.append(dt2);
                cardRowProperties.append(dl);

                cardRowInner.append(cardRowImage);
                cardRowInner.append(cardRowBody);
                cardRowInner.append(cardRowProperties);
                cardRow.append(cardRowInner);
                cards.append(cardRow);
            }
        @endforeach
        cards.append(pagination);
        if(counter == 1)
            title.text("תוצאה אחת תואמת את החיפוש שלך");
        else
            title.text(counter + " תוצאות תואמים את החיפוש שלך");
    }
</script>
</body>
</html>
