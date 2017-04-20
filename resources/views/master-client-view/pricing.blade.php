@extends('layouts.master-client-layout.header-ext')
@section('title', 'Pricing')
@section('inner-page-title', 'חבילות מחירים')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">חבילות מחירים</li>
@endsection
@section('content')
<div class="col-md-12">
    <form id="pricing_form" class="form-horizontal form-material" id="loginform" action="" method="POST">
        <div class="white-box">
            <div class="row pricing-plan">
                @foreach($packages as $package)
                    <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                        @if(strcmp($package->name,"זהב") == 0)
                            <div class="pricing-box featured-plan">
                                @else
                                    <div class="pricing-box">
                                        @endif
                            <div class="pricing-body b-l">
                                <div class="pricing-header">
                                    @if(strcmp($package->name,"זהב") == 0)
                                        <h4 class="price-lable text-white bg-warning"> מומלץ</h4>
                                    @endif
                                    <h4 class="text-center">{{$package->name}}</h4>
                                    <h2 class="text-center"><span class="price-sign">₪</span>{{$package->price}}</h2>
                                    <p class="uppercase">תשלום חד פעמי</p>
                                </div>
                                <div class="price-table-content">
                                    <div class="price-row"> {{$package->amount_orders}} הזמנות <i class="icon-envelope-letter"></i></div>
                                    <div class="price-row">ניהול מלא של החתונה <i class="icon-docs"></i></div>
                                    <div class="price-row">{{$package->amount_pictures}} תמונות נוספות להעלאה <i class="icon-picture"></i></div>
                                    <div class="price-row"> גישה מלאה לרשתות חברתיות <i class="icon-social-instagram"></i></div>
                                    <div class="price-row">
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <select id="{{$package->id}}" name="{{$package->id}}" style="text-align-last: center" class="form-control">
                                                    <option value=0 >כמות חבילות</option>
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <option value={{$i}}>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <input type="hidden" id="pricing_token" name="_token" value="{{csrf_token()}}">
            <div class="price-row">
                <button id="confirm_button" type="submit" class="btn btn-success waves-effect waves-light m-t-20">קנה</button>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <a href="pricing/logout" class="text-primary m-l-5"><b>התנתק</b></a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('ext-footer-scripts')
<script src="js/custom.min.js"></script>

<script>
    $(document).ready(function(){
        @foreach($packages as $package)
            $("#{{$package->id}}").change(function (event) {
                $("#confirm_button").get(0).setCustomValidity("");
            })
        @endforeach
    });
</script>
<script>
    $(document).ready(function(){
        $("#pricing_form").submit(function(e){
            e.preventDefault();
            var data =  {
                @foreach($packages as $package)
                '{{$package->id}}': $("#{{$package->id}}").val(),
                @endforeach
                _token:$("#pricing_token").val(),
            };

            $.post('pricing/store', data, function(callback) {
                if(callback['success'] == false) {
                    $("#confirm_button").get(0).setCustomValidity(callback['errors']);
                    $("#confirm_button").click()
                }
                else {
                    alert("success");
                    window.location = "pricing";
                }
            });
        });
    });
</script>
@endsection