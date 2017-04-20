@extends('layouts.master-client-layout.header-ext')
@section('title', 'Contacts Management')
@section('ext-scripts-n-styles')
    <!-- Those are extended css files -->
    <link href="{{ URL::asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection
@section('inner-page-title', 'ניהול מוזמנים')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">ניהול מוזמנים</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="white-box p-0">
            <!-- .left-right-aside-column-->
            <div class="page-aside">
                <!-- .left-aside-column-->
                <div class="left-aside">
                    <div class="scrollable">
                        <ul class="list-style-none">
                            <li class="box-label"><a href="javascript:void(0)">כל המוזמנים <span id="num_total_guests">{{ $total_guests_num }}</span></a></li>
                            <li class="divider"></li>
                            <div id="wedding-categories">
                            <div id="wedding-categories">
                                {!! $html_categories_output !!}
                            </div>
                            <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#responsive-modal-add-group" id="add-group-btn">+ הוספת קבוצה חדשה</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.left-aside-column-->
                <div class="right-aside">
                    <div class="right-page-header"><div class="pull-right"><input type="text" id="demo-input-search2" placeholder="חיפוש מוזמנים" class="form-control"></div><h3>ניהול מוזמנים</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="scrollable">
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-80 table-hover contact-list" data-page-size="10">
                                <thead>
                                <tr>
                                    <th>שם</th>
                                    <th>מס' טלפון</th>
                                    <th>מס' מוזמנים</th>
                                    <th>סטטוס אישור</th>
                                    <th>מחיקה</th>
                                    <th>עריכה</th>
                                    <th>שלח הודעה</th>
                                </tr>
                                </thead>
                                <tbody id="wedding-guests">
                                @foreach($guests as $guest)
                                    <tr class="{{ $guest->id }}" id="{{ $guest->category_id }}">
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ $guest->phone_number }}</td>
                                        <td>{{ $guest->guests_num }}</td>
                                        @if($guest->is_coming == 1)
                                            <td>אישר\ה הגעה</td>
                                        @endif
                                        @if($guest->is_coming == 2)
                                            <td>ביטל\ה הגעה</td>
                                        @endif
                                        @if($guest->is_coming == 0)
                                            <td>לא מעודכן</td>
                                        @endif
                                        <td><button class="btn btn-sm btn-icon btn-pure btn-outline"><i class="ti-close remove_wedding_guest" id="delete-{{ $guest->id }}" aria-hidden="true"></i></button></td>
                                        <td><button class="btn btn-sm btn-icon btn-pure btn-outline"><a data-toggle="modal" data-target="#responsive-modal" class="edit_wedding_guest" id="edit-{{ $guest->id }}"><i class="ti-pencil aria-hidden="true"></a></i></button></td>
                                        <td><span class="label label-danger"><a href='' data-toggle="modal" data-target="#responsive-modal-send-sms" style="color: #fff;" class="sendGuestSms" id="{{ $guest->phone_number }}">X</a></span> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2"><button type="button" class="btn btn-info btn-rounded" id="add-guest-btn" data-toggle="modal" data-target="#responsive-modal-add-contact">הוספת מוזמן חדש</button>&nbsp;&nbsp;<button type="button" class="btn btn-info btn-rounded" id="add-guest-btn" data-toggle="modal" data-target="#responsive-modal-add-contact">שלח הודעה לכולם</button></td>
                                    <td colspan="7"><div class="text-right">
                                            <ul class="pagination">
                                            </ul>
                                        </div></td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- .left-aside-column-->
                <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-top alerttop" style="display: none; z-index:999999; direction: rtl; text-align: right; font-weight: bold;" id="error_results">
                </div>
            </div>
            <!-- /.left-right-aside-column-->
            <!-- Edit contact form -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">עריכת מוזמן חתונה</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">שם מלא:</label>
                                    <input type="text" class="form-control" id="edit-guest-fullname">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' טלפון:</label>
                                    <input type="text" class="form-control" id="edit-guest-phonenumber">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' אורחים:</label>
                                    <input type="text" class="form-control" id="edit-guest-no-guests">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">קטגוריה:</label>
                                    <select name="category" class="form-control" id="edit-guest-category-id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">סטטס הגעה:</label>
                                    <select name="status" class="form-control" id="edit-guest-status">
                                        <option value="-1">ללא שינוי</option>
                                        <option value="1">מאשר הגעה</option>
                                        <option value="0">לא מעודכן</option>
                                        <option value="2">לא מאשר הגעה</option>
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" id="edit-guest-id" />
                                <input type="hidden" id="edit-guest-token" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="cancel-edit-guest">ביטול</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-edit-guest">שמור שינווים</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add contact form -->
            <div id="responsive-modal-add-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">הוספת מוזמן חתונה</h4>
                        </div>
                        <div class="modal-body">
                            <form id="add-wedding-guest-form">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">שם מלא:</label>
                                    <input type="text" class="form-control" id="guest-fullname" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' טלפון:</label>
                                    <input type="text" class="form-control" id="guest-phonenumber" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">קטגוריה:</label>
                                    <select name="category" class="form-control" id="guest-category-id" required="required">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">מס' מוזמנים:</label>
                                    <input type="number" class="form-control" id="guests_num" required="required">
                                </div>
                                <input type="hidden" id="guest-token" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-add-guest">הוסף מוזמן</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add group form -->
            <div id="responsive-modal-add-group" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">הוספת קבוצה חדשה</h4>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">
                                <form id="add-group-category-form">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">שם הקבוצה:</label>
                                        <input type="text" class="form-control" id="group_name" required="required">
                                    </div>
                                    <input type="hidden" id="group_token" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" id="submit-add-group">הוסף קבוצה</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Send Sms form -->
            <div id="responsive-modal-sens-sms" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">שליחת הזמנת סמס</h4>
                        </div>
                        <div class="modal-body">
                            <form id="add-wedding-guest-form">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">אל:</label>
                                    <input type="text" class="form-control" id="smsGuestPhoneNumber" required="required" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">סוג ההודעה:</label>
                                    <select name="smsMessageType" class="form-control" id="smsMessageType" required="required">
                                        <option value='1'>הזמנת חתונה</option>
                                        <option value='2'>כמה ימים לפני</option>
                                        <option value='3'>התמונות הועלו להזמנה</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">תוכן:</label>
                                    <textarea class="form-control" id="smsMessageContent" required="required" cols="30" rows="10">כאן יהיה התוכן של סמס ההזמנה</textarea>
                                </div>
                                <input type="hidden" id="sendSmsFormToken" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">ביטול</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="submitSendSms">שליחת סמס</button>
                        </div>
                    </div>
                </div>
            </div>
            <span id="wedding_id">{{ $wedding_id }}</span>
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
            $(".sendGuestSms").click(function(e) {
                e.preventDefault();
                console.log('1');
                console.log("You will send sms to: " + $(this).attr("id"));
                var phoneNumber =  $(this).attr("id");
                $("#smsGuestPhoneNumber").val(phoneNumber);
                $("#submitSendSms").click(function(e) {
                    e.preventDefault();
                    var _token = $("#sendSmsFormToken").val();
                    var messageType = $("#smsMessageType").val();
                    var messageContent = $("#smsMessageContent").val();
                    var data = {
                        _token,
                        phoneNumber,
                        messageType,
                        messageContent,
                        phoneNumber,
                    };
                    console.log("phoneNumber: " + phoneNumber);
                    console.log("data: " + data);

                    $.post("{{ URL::route('master-client/sendSmsGuest') }}", data, function(callback_data) {
                        // TODO: check if data contains any error, if it does show the misconception popup box.
                        /* $("#error_results").html('<i class="ti-user"></i>' + callback_data + '<a href="" class="closed">×</a>');
                         $("#error_results").fadeIn("slow"); */
                    });
                });
            });

            $("#smsMessageType").on('change', function() {
                if ($(this).val() == '1'){
                    $("#smsMessageContent").val("כאן יהיה התוכן של סמס ההזמנה");
                } else if($(this).val() == '2') {
                    $("#smsMessageContent").val("כאן יהיה התוכן של סמס התזכורת כמה ימים לפני");
                } else if($(this).val() == '3') {
                    $("#smsMessageContent").val("כאן יהיה התוכן של סמס המודיע על העלאת התמונות לאתר");
                } else {
                    // missing.
                }
            });

            $("#submit-send-sms").click(function(e) {
                e.preventDefault();
                var _token = $("#sms-token").val();
                var messageContent = $("#smsMessageContent").val();
                var recv = $("sms-guest-phonenumber").val();
                var data = {
                  _token,
                  messageContent,
                  recv,
                };
                // TODO: handler.
            });

            $("#add-group-btn").click(function(e) {
                e.preventDefault();
                console.log("add group button has been clicked");
                $("#responsive-modal add-group").show("slow");
            });

            $("#add-guest-btn").click(function(e) {
                e.preventDefault();
                $("#responsive-modal-add-contact").show("slow");
                console.log("add contact button has been clicked");
                var html_type = "select";
                var _token = $("#guest-token").val();

                var update_category_data = {
                    _token,
                    html_type
                };
                console.log("add-guest-btn has been clicked");
                $.post("{{ URL::route('master-client/get_wedding_categories') }}", update_category_data, function(callback_data) {
                    // TODO: check if data contains any error, if it does show the misconception popup box.
                    /* $("#error_results").html('<i class="ti-user"></i>' + callback_data + '<a href="" class="closed">×</a>');
                    $("#error_results").fadeIn("slow"); */

                    $("#guest-category-id").html(callback_data);
                });

            });

            $("#demo-foo-addrow .remove_wedding_guest").click(function(e) {
               e.preventDefault();
               console.log("remove wedding guest link has been clicked");
               var guest_id = $(this).attr("id").split("-")[1];
               var _token = $("#edit-guest-token").html();
               console.log("guest_id: " + guest_id);
               var data = {
                   guest_id,
                   _token
               }

               var footable_even_id = $(this).parent().parent().parent();
               $.post("{{ URL::route('master-client/remove-wedding-guest') }}", data, function(callback) {
                   console.log(callback);
                   footable_even_id.fadeOut("slow");
               });

               var html_type = "ul";
               var update_category_data = {
                    html_type,
                    _token
               };

               $.post("{{ URL::route('master-client/get_wedding_categories') }}", update_category_data, function(callback_data) {
                    // TODO: check if data contains any error, if it does show the misconception popup box.
                    /* $("#error_results").html('<i class="ti-user"></i>' + callback_data + '<a href="" class="closed">×</a>');
                     $("#error_results").fadeIn("slow"); */
                    $("#wedding-categories").html(callback_data['html_output']);
                    $("#num_total_guests").html(callback_data['total_guests_num']);
               });
            });

            $("#demo-foo-addrow .edit_wedding_guest").click(function(e) {
                e.preventDefault();
                console.log("edit wedding guest button has been clicked");
                $("#responsive-modal").show("slow");

                var id = $(this).attr("id").split("-")[1];
                var _token = $("#edit-guest-token").val();
                var html_type = "select";
                var wedding_id = $("#wedding_id").html();

                console.log("id: " + id);

                var data = {
                    id,
                    html_type,
                    wedding_id,
                    _token,
                }

                $.post("{{ URL::route('master-client/get_wedding_categories') }}", data, function(callback) {
                    $("#edit-guest-category-id").html(callback);
                });

                $.post("{{ URL::route('master-client/get-updated-guest-data') }}", data, function(callback) {
                    console.log(callback.name);
                    $("#edit-guest-fullname").val(callback.name);
                    $("#edit-guest-phonenumber").val(callback.phone_number);
                    $("#edit-guest-no-guests").val(callback.guests_num);
                    $("#edit-guest-id").val(id);
                });
            });

            $("#submit-add-group").click(function(e) {
                console.log("#submit-add-group btn clicked");
                var _token = $("#group_token").val();
                var name = $("#group_name").val();
                var html_type = "ul";

                var data = {
                    _token,
                    html_type,
                    name
                };

                $.post("{{ URL::route('master-client/validate-add-category') }}", data, function(callback_data) {
                    if (callback_data['success'] == false) {
                        if (callback_data["errors"]["name"] != undefined) {
                            console.log('1');
                            $("#error_results").html('<i class="ti-user"></i>' + callback_data["errors"]["name"] + '<a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else {
                            $("#error_results").html('<i class="ti-user"></i>' + callback_data["errors"] + '<a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        }
                        setTimeout(
                            function()
                            {
                                $("#error_results").fadeOut("slow");
                                console.log('1');
                            }, 3000);
                    } else {
                        $.post("{{ URL::route('master-client/add-new-group-category') }}", data, function(callback_data) {
                            $("#error_results").html('<i class="ti-user"></i>' + callback_data + '<a class="closed">×</a>');
                             $("#error_results").fadeIn("slow");
                            setTimeout(
                                function()
                                {
                                    $("#error_results").fadeOut("slow");
                                    console.log('1');
                                }, 3000);
                        }).done(function() {
                            $.post("{{ URL::route('master-client/get_wedding_categories') }}", data, function(inner_callback_data) {
                                $("#wedding-categories").html(inner_callback_data.html_output);
                                $("#add-group-category-form").trigger("reset");
                            });
                        });
                    }
                });
            });

            $("#submit-add-guest").click(function(e) {
                e.preventDefault();
                var _token = $("#guest-token").val();
                var name = $("#guest-fullname").val();
                var group_cat = $("#guest-category-id").val();
                var phone_number = $("#guest-phonenumber").val();
                var category_id = $("#guest-category-id").val();
                var guests_num = $("#guests_num").val();
                var html_type = "ul";

                var data = {
                    _token,
                    html_type,
                    name,
                    phone_number,
                    category_id,
                    guests_num,
                    group_cat
                };

                $.post("{{ URL::route('master-client/validate-add-guest') }}", data, function(callback_data) {
                    if(callback_data['success'] == false) {
                        if(callback_data["errors"]["fullname"] != undefined) {
                            console.log('1');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'שם מלא'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(callback_data["errors"]["phonenumber"] != undefined) {
                            console.log('2');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'מספר טלפון'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(callback_data["errors"]["guests_num"] != undefined) {
                            console.log('3');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'מספר מוזמנים'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + callback_data["errors"] + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        }
                        setTimeout(
                            function()
                            {
                                $("#error_results").fadeOut("slow");
                                console.log('1');
                            }, 3000);
                    } else {
                        var HebrewChars = new RegExp("^[\u0590-\u05FF]+$")
                        if (name.length < 3) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'שם מלא' חייב להכיל לפחות 3 תווים" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(!HebrewChars.test(name.split(" ").join(""))) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'שם מלא חייב להכיל אותיות בעברית בלבד'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(!/^((\+972|972)|0)( |-)?([1-468-9]( |-)?\d{7}|(5|7)[0-9]( |-)?\d{7})$/.test(phone_number)) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'מספר טלפון' חייב להיות תקין" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(guests_num < 0 || guests_num > 7) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'מספר מוזמנים' חייב להיות בין 0 ל-6" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else {
                            $.post("{{ URL::route('master-client/add-new-wedding-guest') }}", data, function (callback_data) {
                                $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אורח נוסף בהצלחה למערכת." + '</span><a class="closed">×</a>');
                                $("#error_results").fadeIn("slow");
                                setTimeout(
                                    function () {
                                        $("#error_results").fadeOut("slow");
                                        console.log('1');
                                    }, 3000);
                            }).done(function () {
                                $.post("{{ URL::route('master-client/get_wedding_guests') }}", data, function (inner_callback_data) {
                                    $("#wedding-guests").html(inner_callback_data);
                                    $("#wedding-guests").show();
                                }).done(function () {
                                    var html_type = "ul";
                                    var _token = $("#guest-token").val();
                                    var update_category_data = {
                                        _token,
                                        html_type
                                    };
                                    $.post("{{ URL::route('master-client/get_wedding_categories') }}", update_category_data, function (callback_data) {
                                        $("#wedding-categories").html(callback_data['html_output']);
                                        $("#num_total_guests").html(callback_data['total_guests_num']);
                                        $("#add-wedding-guest-form").trigger("reset");
                                    });
                                });
                            });
                        }
                        setTimeout(
                            function()
                            {
                                $("#error_results").fadeOut("slow");
                                console.log('1');
                            }, 3000);
                    }
                });

                $(this).closest('form').find("input[type=text], textarea").val("");
            });

            $("#submit-edit-guest").click(function(e) {
                e.preventDefault();
                console.log("#submit-edit-guest btn clicked");

                var name = $("#edit-guest-fullname").val();
                var phone_number = $("#edit-guest-phonenumber").val();
                var guests_num = $("#edit-guest-no-guests").val();
                var is_coming = $("#edit-guest-status").val();
                console.log("is_coming:" + is_coming);
                var category_id = $("#edit-guest-category-id").val();
                var guest_id = $("#edit-guest-id").val();
                var _token = $("#edit-guest-token").val();
                var request_type = "update";
                var html_type = "ul";
                var wedding_id = $("#wedding_id").val();

                var data = {
                    guest_id,
                    name,
                    phone_number,
                    guests_num,
                    is_coming,
                    category_id,
                    _token,
                    request_type,
                    html_type,
                    wedding_id,
                };

                $.post("{{ URL::route('master-client/validate-add-guest') }}", data, function (callback_data) {
                    if (callback_data['success'] == false) {
                        if(callback_data["errors"]["fullname"] != undefined) {
                            console.log('1');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'שם מלא'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(callback_data["errors"]["phonenumber"] != undefined) {
                            console.log('2');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'מספר טלפון'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(callback_data["errors"]["guests_num"] != undefined) {
                            console.log('3');
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "אנא מלא את השדה 'מספר מוזמנים'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if(name.length < 3) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'שם מלא' חייב להכיל לפחות 3 תווים" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + callback_data["errors"] + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        }
                        setTimeout(
                        function()
                        {
                            $("#error_results").fadeOut("slow");
                            console.log('1');
                        }, 3000);
                    } else {
                        var HebrewChars = new RegExp("^[\u0590-\u05FF]+$")
                        if (name.length < 3) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'שם מלא' חייב להכיל לפחות 3 תווים" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if (!HebrewChars.test(name.split(" ").join(""))) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'שם מלא חייב להכיל אותיות בעברית בלבד'" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if (!/^((\+972|972)|0)( |-)?([1-468-9]( |-)?\d{7}|(5|7)[0-9]( |-)?\d{7})$/.test(phone_number)) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'מספר טלפון' חייב להיות תקין" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else if (guests_num < 0 || guests_num > 7) {
                            $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + "השדה 'מספר מוזמנים' חייב להיות בין 0 ל-6" + '</span><a class="closed">×</a>');
                            $("#error_results").fadeIn("slow");
                        } else {
                            $.post("{{ URL::route('master-client/update_wedding_guest') }}", data, function (callback) {
                                $("#error_results").html('<i class="ti-user"></i><span style="position: relative; right: 10px;">' + callback_data["errors"] + '</span><a class="closed">×</a>');
                                $("#error_results").fadeIn("slow");
                                setTimeout(
                                    function () {
                                        $("#error_results").fadeOut("slow");
                                        console.log('1');
                                    }, 3000);
                            }).done(function () {
                                $.post("{{ URL::route('master-client/get_wedding_guests') }}", data, function (inner_callback_data) {
                                    $("#wedding-guests").html(inner_callback_data);
                                });
                            }).done(function () {
                                $.post("{{ URL::route('master-client/get_wedding_categories') }}", data, function (callback_data) {
                                    console.log("callback_data:" + callback_data);
                                    $("#wedding-categories").html(callback_data['html_output']);
                                    $("#num_total_guests").html(callback_data['total_guests_num']);
                                });
                            });
                        }
                        setTimeout(
                            function()
                            {
                                $("#error_results").fadeOut("slow");
                                console.log('1');
                            }, 3000);
                    }
                });
            });

            $("#wedding-categories li:not(.box-label)").click(function(e) {
                e.preventDefault();
                $("tr").show();
                var table = $('#demo-foo-addrow');
                var tr = $("tr");
                $("#wedding-guests tr[id!='" + $(this).attr("class") + "']").hide();
            });
        });
    </script>
@endsection

