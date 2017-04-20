@extends('layouts.master-client-layout.header-ext')
@section('title', 'Homepage')
@section('ext-scripts-n-styles')
    <!-- morris CSS -->
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">סה"כ מוזמנים</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{ $invited_guests }}</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">סה"כ אישרו הגעה</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash2"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{ $approval_guests }}</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">סה"כ ביטלו הגעה</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash3"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{ $cancelled_guests }}</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">הערכת הגעת אורחים</h3>
        <ul class="list-inline two-part">
            <li>
                <div id="sparklinedash4"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">{{ $statistical_guests }}</span></li>
        </ul>
    </div>
</div>
</div>
<!--/.row -->
<!-- .row -->
<div class="row">
<div class="col-md-12">
    <div class="white-box">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="box-title">הערכת הגעת אורחים</h3>
                <p class="m-t-30">לתכנן ולנהל אירוע זו משימה מאתגרת (במיוחד למי שעושה זאת בפעם הראשונה), אבל עם מערכת מתקדמת שמכוונת אתכם לאורך הדרך המשימה הופכת לחוויה מהנה. ארגז הכלים החדש שהכנו לכם מלא בכלים טכנולוגים מתקדמים שיהפכו אתכם למקצוענים!
                    .</p>
                <p>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div id="morris-area-chart" style="height:250px;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/.row -->
<!-- About couple section -->
<div class="col-md-4 col-lg-4 col-xs-12">
    <div class="white-box">
        <div class="user-bg"> <img src="../plugins/images/large/img1.jpg" alt="user" style="100%">
            <div class="overlay-box">
                <div class="user-content"> <a href="javascript:void(0)"></a>
                    <h2 class="text-white">זוהר וגל</h2>
                    <h1 class="text-white">מזל טוב!</h1>
                </div>
            </div>
        </div>
        <div class="user-btm-box">
            <div class="col-md-4 col-sm-4 text-center">
                <p class="text-blue">היום הגדול </p>
                <h3>24.04.17</h3>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <p class="text-blue">מיקום האירוע</p>
                <h3>שמש אדומה</h3>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <p class="text-blue">שעת כניסת אורחים
                </p>
                <h3>19:00</h3>
            </div>
            <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                <div class="stat-item">
                    <h6>היום הגדול מגיע, ואנחנו מתרגשים איתכם. בעוד:</h6>
                    <b>24 ימים, 3 שעות ו24 דקות</b></div>

            </div>
        </div>
    </div>
</div>
<!-- End of the couple section -->
<div class="col-md-4 col-xs-12 col-sm-6">
    <div class="white-box">
        <h3 class="box-title">רשימת המשימות שלי</h3>
        <ul class="list-task list-group" data-role="tasklist">
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                    <label for="inputSchedule" class=""> <span>Schedule meeting</span> </label>
                </div>
            </li>
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                    <label for="inputCall"> <span>Give Purchase report</span> <span class="label label-danger">Today</span> </label>
                </div>
            </li>
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                    <label for="inputBook"> <span>Book flight for holiday</span> </label>
                </div>
            </li>
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                    <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning">2 weeks</span> </label>
                </div>
            </li>
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                    <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                </div>
            </li>
            <li class="list-group-item" data-role="task">
                <div class="checkbox checkbox-info">
                    <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                    <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- End of todo list section-->
<!-- Features count section -->
<div class="col-lg-4 col-sm-16 col-xs-16">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">מוזמנים</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-people text-info"></i></li>
                    <li class="text-right"><span class="counter">{{ $invited_guests }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">תמונות</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-folder text-purple"></i></li>
                    <li class="text-right"><span class="counter">{{ $images_count }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">אישורי הגעה (סמסים)</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-folder-alt text-danger"></i></li>
                    <li class="text-right"><span class="">{{ $approval_guests }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">סוג חבילה</h3>
                <ul class="list-inline two-part">
                    <li><i class="ti-wallet text-success"></i></li>
                    <li class="text-right"><p class="">{{ $current_pricing_package }}</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of features count section -->
@endsection
@section('ext-footer-scripts')
<!--weather icon -->
<script src="{{ URL::asset('plugins/bower_components/skycons/skycons.js') }}"></script>
<!--Counter js -->
<script src="{{ URL::asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<script src="{{ URL::asset('js/dashboard4.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ URL::asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
@endsection