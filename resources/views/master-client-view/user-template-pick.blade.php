@extends('layouts.master-client-layout.header-ext')
@section('title', 'Contacts Management')
@section('ext-scripts-n-styles')
    <!-- Those are extended css files -->
    <link href="{{ URL::asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection
@section('inner-page-title', 'בחר תבנית נושא')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">בחר תבנית נושא</li>
@endsection
@section('content')
    <div class="row">
        <div class="heading-title white-box" >
            <h1>בחר תבנית נושא</h1>
        </div>
        <input type="hidden" id="templatePickerCSRFToken" name="_token" value="{{ csrf_token() }}">
        @foreach($wedding_templates as $template)
            @if($template->id == $template_id)
                <div class="col-md-4 col-xs-12 col-sm-6" id="row-detail"> <img class="img-responsive" alt="user" src="{{ URL::asset($template->screenshot) }}" style="border: 3px solid #03a9f3;">
                    <div class="white-box">
                        <div class="text-muted"><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> {{ rand(30, 60) }}</a></div>
                        <h3 class="m-t-20 m-b-20">{{ $template->nickname }}</h3>
                        <p>{{ $template->description }}</p>
                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20" id="{{$template->id}}">בחר תבנית</button>
                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">צפה בדוגמא</button>
                    </div>
                </div>
            @else
                <div class="col-md-4 col-xs-12 col-sm-6" id="row-detail"> <img class="img-responsive" alt="user" src="{{ URL::asset($template->screenshot) }}">
                    <div class="white-box">
                        <div class="text-muted"><a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> {{ rand(30, 60) }}</a></div>
                        <h3 class="m-t-20 m-b-20">{{ $template->nickname }}</h3>
                        <p>{{ $template->description }}</p>
                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20" id="{{$template->id}}">בחר תבנית</button>
                        <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">צפה בדוגמא</button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
@section('ext-footer-scripts')
    <!-- Those are extended javascript files -->
    <!-- Footable -->
    <script src="{{ URL::asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ URL::asset('js/footable-init.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#row-detail button").click(function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var _token = $("#templatePickerCSRFToken").val();
                var data = {
                    id,
                    _token
                };

                console.log(data);

                $.post('updateUserTemplate', data, function(callback) {
                    if(callback == "success") {
                        window.location.href = "edit-last-pick-template";
                    }
                });
            });
        });
    </script>
@endsection