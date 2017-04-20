@extends('layouts.master-client-layout.header-ext')
@section('title', 'Upload')
@section('ext-scripts-n-styles')
    <!-- dropify CSS -->
    <link href="{{ URL::asset('plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet">
@endsection
@section('inner-page-title', 'העלאת מדיה')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">העלאת מדיה</li>
@endsection
@section('content')
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="javascript:void(0)" class="text-center db"><img src="{{ URL::asset('plugins/images/eliteadmin-logo-dark.png') }}" alt="Home" /><br/><img src="{{ URL::asset('plugins/images/eliteadmin-text-dark.png') }}" alt="Home" /></a>
                    <h3 class="box-title m-t-40 m-b-0">הוסף קטגוריה חדשה</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-material" id="add_new_title_form" action="" method="POST">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="add_title" class="form-control" type="text" required="" name="add_title" placeholder="רשום כאן את הקטגוריה שברצונך להוסיף">
                            </div>
                        </div>
                        <input type="hidden" id="title_token" name="_token" value="{{csrf_token()}}">
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button id="confirm_button" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">הוסף</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">העלאת קבצים </h3>
            <p class="text-muted m-b-30">נותרו {{$amountPic}} תמונות להעלאה</p>
            <form id="addImages" action="{{url('wedding/upload/store')}}" class="dropzone dz-clickable">
                <input type="hidden" id="upload_token" name="_token" value="{{csrf_token()}}">
                <input type="hidden" id="title_id" name="title_id" value="">
            </form>
            <br>
            <h3 class="box-title m-b-0">בחר קטגוריה לקבוצת התמונות:</h3>
            <select id="media_titles" name="photo_titles" class="form-control">
                @foreach($media_titles['client'] as $title)
                    <option value={{$title->id}}>{{$title->title}}</option>
                @endforeach
                @foreach($media_titles['private'] as $title)
                    <option value={{$title->id}}>{{$title->title}}</option>
                @endforeach
                    <option value=-1>הוסף קטגוריה חדשה...</option>
            </select>
        </div>
        <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-top alerttop" style="display: none; z-index:999999; direction: rtl; text-align: right; font-weight: bold;" id="error_results">
        </div>
    </div>
@endsection
@section('ext-footer-scripts')
    <script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ URL::asset('js/waves.js') }}"></script>
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#title_id").val($("#media_titles").val());
            $("#media_titles").change(function (event) {
                if($("#media_titles").val() == -1)
                {
                    $("#media_titles").val({{$media_titles['client'][0]->id}}).change();
                    $('#myModal').modal('show');
                }
                $("#title_id").val($("#media_titles").val());
            })

            $("#add_new_title_form").submit(function(e){
                e.preventDefault();
                var data =  {
                    title: $("#add_title").val(),
                    _token:$("#title_token").val(),
                };

                $.post('upload/new_title', data, function(callback) {
                    if(callback['success'] == true) {
                        var titles = document.getElementById("media_titles");
                        var option = document.createElement("option");
                        option.text = callback['title'];
                        option.value = callback['title_id'];
                        titles.add(option, titles[titles.length-1]);
                        $('#myModal').modal('toggle');
                    }
                    else {
                        $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "כותרת זו קיימת כבר במערכת" + '</span><a class="closed">×</a>');
                        $("#error_results").fadeIn("slow");
                        setTimeout(
                                function () {
                                    $("#error_results").fadeOut("slow");
                                }, 3000);
                    }
                });
            });
        });
    </script>
@endsection