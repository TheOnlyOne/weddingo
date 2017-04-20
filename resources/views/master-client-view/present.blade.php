@extends('layouts.master-client-layout.header-ext')
@section('title', 'Create Wedding')
@section('ext-scripts-n-styles')
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection
@section('inner-page-title', 'ניהול מתנות')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">ניהול מתנות</li>
@endsection
@section('content')
    <div class="white-box p-0">
        <div class="page-aside">
            <div class="left-aside">
                <div class="scrollable">
                    <ul class="list-style-none">
                        <li class="box-label"><h3>סיכום מתנות</h3></li>
                        <li class="divider"></li>
                        <li><a>סה"כ מתנות <span id="total_presents"></span></a></li>
                        <li><a>סה"כ אורחים <span id="total_guests"></span></a></li>
                        <li><a>ממוצע לאדם <span id="avgPerGuest"></span></a></li>
                        <li><a>סה"כ הוצאות <span id="total_budgets"></span></a></li>
                        <li><a>איזון הכנסות-הוצאות <span id="budgets_presents"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="right-aside">
                <h3>טבלת מתנות</h3>
                <div class="scrollable">
                    <div class="table-responsive">
                        <div id="present-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="form-horizontal form-material" id="add_new_present_form" action="" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">הוספת מתנה חדשה</h4>
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">

                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-from" placeholder="שם נותנ/י המתנה">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-guest_count" placeholder="כמות האורחים">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-amount" placeholder="סכום המתנה">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-comment" placeholder="הערות">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="hidden" id="m-id" name="m-id" value="">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="hidden" id="m-index" name="m-index" value="">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
                                                    </div>
                                                </div>
                                            </from>
                                        </div>
                                        <div class="modal-footer">
                                            <button id="confirm_button" class="btn btn-info" type="submit">הוסף</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">ביטול</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table id="demo-foo-addrow" class="table m-t-80 table-hover contact-list" data-page-size="10">
                            <thead>
                            <tr>
                                <th class="footable-sortable">#<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">שם נותנ/י המתנה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">כמות האורחים<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">סכום המתנה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">סכום לאורח<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">הערות<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">עריכה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">מחיקה<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <script>
                                var index=1;
                                var totalAmount=0;
                                var totalGuests=0;
                            </script>
                            @foreach($presents as $present)
                                <tr class="footable-even" style="display: table-row;">
                                    <td><script>document.write(index++);</script></td>
                                    <td>{{$present->from}}</td>
                                    <td>{{$present->guest_count}}</td>
                                    <td>{{$present->amount}}₪</td>
                                    <td>{{$present->amount/$present->guest_count}}₪</td>
                                    <td>{{$present->comment}}</td>
                                    <td><button type="button" value="{{$present->id}}" onclick="editClick(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></td>
                                    <td><button type="button" value="{{$present->id}}" onclick="deleteRow(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td>
                                    <script>
                                        totalAmount += parseInt("{{$present->amount}}");
                                        totalGuests += parseInt("{{$present->guest_count}}");
                                    </script>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2"><button id="add_present" type="button" class="btn btn-info btn-rounded">מתנה חדשה</button></td>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"></ul>
                                    </div></td>
                            </tr>
                            </tfoot>
                        </table>
                        <hr>
                        <div class="col-lg-6">
                            <div class="white-box">
                                <h3 class="box-title" style="font-weight: bold">עוגת איזון הכנסות-הוצאות</h3>
                                <div>
                                    <canvas id="chart3" height="379" width="759" style="width: 759px; height: 379px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white-box">
                                <h3 class="box-title" style="font-weight: bold">עוגת מתנות</h3>
                                <div>
                                    <canvas id="chart2" height="379" width="759" style="width: 759px; height: 379px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('ext-footer-scripts')
    <script src="{{ URL::asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ URL::asset('js/waves.js') }}"></script>
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/footable-init.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/Chart.js/Chart.min.js') }}"></script>
    <script>
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            var data = {
                id: btn.value,
                _token:$("#_token").val()
            };
            $.post('present/delete_present', data, function (callback) {
                if(callback['success'] == true) {
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    totalGuests -= parseInt(callback['guest_count']);
                    totalAmount -= parseInt(callback['amount']);
                    index--;
                    updatePrices();
                }
                else
                {
                    alert("לא תצליח לעבוד עלינו :)");
                }
            });
        }
    </script>
    <script>
        function updatePrices() {
            $("#total_presents").text(totalAmount+"₪");
            $("#total_guests").text(totalGuests);
            $("#avgPerGuest").text((totalAmount/totalGuests)+"₪");
            $("#total_budgets").text("{{$budgets}}"+"₪");
            $("#budgets_presents").text(totalAmount-parseInt("{{$budgets}}"+"₪")+"₪");
        }
    </script>
    <script>
        $(document).ready(function(){
            updatePrices();

            $("#m-from").change(function (event) {
                $("#m-from").get(0).setCustomValidity("");
            });
            $("#m-amount").change(function (event) {
                $("#m-amount").get(0).setCustomValidity("");
            });
            $("#m-guest_count").change(function (event) {
                $("#m-guest_count").get(0).setCustomValidity("");
            });
        });
    </script>
    <script>
        function editClick(btn)
        {
            var row = btn.parentNode.parentNode;
            $("#confirm_button").html("עדכן");
            $("#myModalLabel").html("עדכון מתנה");
            $("#m-id").val(btn.value);
            $("#m-index").val(row.cells[0].textContent.replace("document.write(index++);",""));
            $("#m-from").val(row.cells[1].textContent);
            $("#m-guest_count").val(row.cells[2].textContent);
            $("#m-amount").val(row.cells[3].textContent.replace("₪",""));
            $("#m-comment").val(row.cells[5].textContent);
            $('#present-modal').modal('show');
        }

        $(document).ready(function() {
            $("#add_present").click(function () {
                $("#confirm_button").html("הוסף");
                $("#myModalLabel").html("הוספת מתנה חדשה");
                $("#m-id").val(0);
                $("#m-from").val("");
                $("#m-guest_count").val("");
                $("#m-amount").val("");
                $("#m-comment").val("");
                $('#present-modal').modal('show');
            });

            $("#add_new_present_form").submit(function(e){
                e.preventDefault();
                var data =  {
                    id: $("#m-id").val(),
                    index: $("#m-index").val(),
                    from: $("#m-from").val(),
                    guest_count: $("#m-guest_count").val(),
                    amount: $("#m-amount").val(),
                    comment: $("#m-comment").val(),
                    _token:$("#_token").val()
                };

                $.post('present/new_present', data, function(callback) {
                    if(callback['success'] == false) {
                        if(callback['errors']['from'] != undefined) {
                            $("#m-from").get(0).setCustomValidity(callback['errors']['from'][0]);
                        }
                        if(callback['errors']['guest_count'] != undefined) {
                            $("#m-guest_count").get(0).setCustomValidity(callback['errors']['guest_count'][0]);
                        }
                        if(callback['errors']['amount'] != undefined) {
                            $("#m-amount").get(0).setCustomValidity(callback['errors']['amount'][0]);
                        }
                        $("#confirm_button").click();
                    }
                    else {
                        $('#present-modal').modal('toggle');
                        if(data['id'] == 0)
                            addToTable(callback);
                        else
                            editTable(data['index'], callback);
                        updatePrices();
                    }
                });
            });

            function editTable(index, Data)
            {
                var table = document.getElementById("demo-foo-addrow");
                var row = table.rows[index];
                totalGuests -= parseInt(row.cells[2].textContent);
                totalAmount -= parseInt(row.cells[3].textContent.replace("₪",""));
                row.cells[1].innerHTML = Data['from'];
                row.cells[2].innerHTML = Data['guest_count'];
                row.cells[3].innerHTML = Data['amount']+'₪';
                row.cells[4].innerHTML = (parseInt(Data['amount'])/parseInt(Data['guest_count']))+'₪';
                row.cells[5].innerHTML = Data['comment'];
                totalGuests += parseInt(Data['guest_count']);
                totalAmount += parseInt(Data['amount']);
            }

            function addToTable(details) {
                var table = document.getElementById("demo-foo-addrow");
                var row = table.insertRow(index);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                cell1.innerHTML = index++;
                cell2.innerHTML = details['from'];
                cell3.innerHTML = details['guest_count'];
                cell4.innerHTML = details['amount']+'₪';
                cell5.innerHTML = (parseInt(details['amount'])/parseInt(details['guest_count']))+'₪';
                cell6.innerHTML = details['comment'];
                cell7.innerHTML = '<button type="button" value='+details["id"]+' onclick="editClick(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button>';
                cell8.innerHTML = '<button type="button" value='+details["id"]+' onclick="deleteRow(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>';
                totalGuests += parseInt(details['guest_count']);
                totalAmount += parseInt(details['amount']);
            }
        });
    </script>
    <script>
        $(document).ready(function() {

            var ctx3 = document.getElementById("chart3").getContext("2d");

            data3 = new Array();
            data3.push({
            value: parseInt(totalAmount),
            color:"#25a6f7",
            highlight: "#25a6f7",
            label: "סך הכל מתנות"
            });
            data3.push({
                value: "{{$budgets}}",
                color:"#25a6f7",
                highlight: "#25a6f7",
                label: "סך הכל הוצאות"
            });
            /*var data3 = [
             {
             value: 300,
             color:"#25a6f7",
             highlight: "#25a6f7",
             label: "Blue"
             },
             {
             value: 50,
             color: "#01c0c8",
             highlight: "#01c0c8",
             label: "Light"
             },
             {
             value: 50,
             color: "#b4c1d7",
             highlight: "#b4c1d7",
             label: "Dark"
             },
             {
             value: 50,
             color: "#b8edf0",
             highlight: "#b8edf0",
             label: "Megna"
             },
             {
             value: 100,
             color: "#fcc9ba",
             highlight: "#fcc9ba",
             label: "Orange"
             }
             ];*/

            var myPieChart = new Chart(ctx3).Pie(data3,{
                segmentShowStroke : true,
                segmentStrokeColor : "#fff",
                segmentStrokeWidth : 0,
                animationSteps : 100,
                tooltipCornerRadius: 0,
                animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
                legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    });
    </script>
    <script>
        $(document).ready(function() {
            var ctx2 = document.getElementById("chart2").getContext("2d");

            data2 = new Array();
            @foreach($presents as $present)
                data2.push({
                    value: "{{$present->amount}}",
                    color:"#25a6f7",
                    highlight: "#25a6f7",
                    label: "{{$present->from}}"
                });
            @endforeach

            var myPieChart = new Chart(ctx2).Pie(data2,{
                segmentShowStroke : true,
                segmentStrokeColor : "#fff",
                segmentStrokeWidth : 0,
                animationSteps : 100,
                tooltipCornerRadius: 0,
                animationEasing : "easeOutBounce",
                animateRotate : true,
                animateScale : false,
                legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
            responsive: true
            });
        });
    </script>
@endsection