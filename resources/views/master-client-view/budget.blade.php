@extends('layouts.master-client-layout.header-ext')
@section('title', 'Create Wedding')
@section('ext-scripts-n-styles')
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection
@section('inner-page-title', 'ניהול תקציב')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">ניהול תקציב</li>
@endsection
@section('content')
    <div class="white-box p-0">
        <div class="page-aside">
            <div class="left-aside">
                <div class="scrollable">
                    <ul class="list-style-none">
                        <li class="box-label"><h3>סיכום הוצאות</h3></li>
                        <li class="divider"></li>
                        <li><a>סה"כ הוצאות <span id="total_cost"></span></a></li>
                        <li><a>סה"כ שולם <span id="total_paid"></span></a></li>
                        <li><a>סה"כ נותר לשלם <span id="total_left"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="right-aside">
                <h3>טבלת הוצאות</h3>
                <div class="clearfix"></div>
                <div class="scrollable">
                    <div class="table-responsive">
                        <div id="budget-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="form-horizontal form-material" id="add_new_budget_form" action="" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">הוספת הוצאה חדשה</h4>
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <select id="m-budget_type" name="m-budget_type" class="form-control">
                                                            <option value=0 disabled selected>בחר סוג הוצאה</option>
                                                            @foreach($budgetTypes as $budgetType)
                                                                <option value={{$budgetType->id}}>{{$budgetType->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-supplier_name" placeholder="שם ספק">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-price" placeholder="סכום">
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-paid" placeholder="שולם">
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
                                <th class="footable-sortable">סוג הוצאה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">שם הספק<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">סכום<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">שולם<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">נותר לשלם<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">הערות<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">עריכה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">מחיקה<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <script>
                                var index=1;
                                var totalCost=0;
                                var totalPaid=0;
                            </script>
                            @foreach($weddingBudget as $budget)
                                <tr class="footable-even" style="display: table-row;">
                                    <td><script>document.write(index++);</script></td>
                                    <td axis="{{$budget->budget_type_id}}">{{\App\BudgetType::find($budget->budget_type_id)->name}}</td>
                                    <td>{{$budget->supplier_name}}</td>
                                    <td>{{$budget->price}}₪</td>
                                    <td>{{$budget->paid}}₪</td>
                                    <td>{{($budget->price - $budget->paid)}}₪</td>
                                    <td>{{$budget->comment}}</td>
                                    <td><button type="button" value="{{$budget->id}}" onclick="editClick(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></td>
                                    <td><button type="button" value="{{$budget->id}}" onclick="deleteRow(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td>
                                    <script>
                                        totalCost += parseInt("{{$budget->price}}");
                                        totalPaid += parseInt("{{$budget->paid}}");
                                    </script>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><button id="add_budget" type="button" class="btn btn-info btn-rounded">הוצאה חדשה</button></td>
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
                                <h3 class="box-title" style="font-weight: bold">עוגת סך כל התקציב</h3>
                                <div>
                                    <canvas id="chart3" height="379" width="759" style="width: 759px; height: 379px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white-box">
                                <h3 class="box-title" style="font-weight: bold">עוגת תקציב הנותר לשלם</h3>
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

    <script src="{{ URL::asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ URL::asset('js/footable-init.js') }}"></script>

    <script>
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            var strC = row.cells[3].textContent.replace("₪","");
            var strP = row.cells[4].textContent.replace("₪","");
            var data = {
                id: btn.value,
                _token:$("#_token").val()
            };
            $.post('budgets/delete_budget', data, function (callback) {
                 if(callback['success'] == true) {
                     var row = btn.parentNode.parentNode;
                     row.parentNode.removeChild(row);
                     totalCost -= parseInt(strC);
                     totalPaid -= parseInt(strP);
                     index--;
                     updatePrices();
                 }
                 else
                 {
                    alert("אין לנו מושג למה.. אבל המחיקה לא הצליחה")
                 }
            });
        }
    </script>
    <script>
        function updatePrices() {
            document.getElementById("total_cost").textContent = totalCost+"₪";
            document.getElementById("total_paid").textContent = totalPaid+"₪";
            document.getElementById("total_left").textContent = (totalCost-totalPaid)+"₪";
        }
    </script>
    <script>
        $(document).ready(function(){
            updatePrices();

            $("#m-price").change(function (event) {
                $("#m-paid").get(0).setCustomValidity("");
                $("#m-price").get(0).setCustomValidity("");
            });
            $("#m-budget_type").change(function (event) {
                $("#m-budget_type").get(0).setCustomValidity("");
            });
            $("#m-paid").change(function (event) {
                $("#m-paid").get(0).setCustomValidity("");
            });
        });
    </script>
    <script>
        function editClick(btn)
        {
            var row = btn.parentNode.parentNode;
            $("#confirm_button").html("עדכן");
            $("#myModalLabel").html("עדכון הוצאה");
            $("#m-id").val(btn.value);
            $("#m-index").val(row.cells[0].textContent.replace("document.write(index++);",""));
            $("#m-budget_type").val(row.cells[1].axis);
            $("#m-supplier_name").val(row.cells[2].textContent);
            $("#m-price").val(row.cells[3].textContent.replace("₪",""));
            $("#m-paid").val(row.cells[4].textContent.replace("₪",""));
            $("#m-comment").val(row.cells[6].textContent);
            $('#budget-modal').modal('show');
        }

        $(document).ready(function() {
            $("#add_budget").click(function () {
                $("#confirm_button").html("הוסף");
                $("#myModalLabel").html("הוספת הוצאה חדשה");
                $("#m-id").val(0);
                $("#m-budget_type").val(0);
                $("#m-price").val("");
                $("#m-comment").val("");
                $("#m-supplier_name").val("");
                $("#m-paid").val("");
                $('#budget-modal').modal('show');
            });

            $("#add_new_budget_form").submit(function(e){
                e.preventDefault();
                var data =  {
                    id: $("#m-id").val(),
                    index: $("#m-index").val(),
                    budget_type: $("#m-budget_type").val(),
                    supplier: $("#m-supplier_name").val(),
                    price: $("#m-price").val(),
                    paid: $("#m-paid").val(),
                    comment: $("#m-comment").val(),
                    _token:$("#_token").val()
                };

                $.post('budgets/new_budget', data, function(callback) {
                    if(callback['success'] == false) {
                        if(callback['errors'].price != undefined) {
                            $("#m-price").get(0).setCustomValidity(callback['errors'].price[0]);
                        }
                        if(callback['errors'].budget_type != undefined) {
                            $("#m-budget_type").get(0).setCustomValidity(callback['errors'].budget_type[0]);
                        }
                        if(callback['errors'].paid != undefined) {
                            $("#m-paid").get(0).setCustomValidity(callback['errors'].paid[0]);
                        }
                        $("#confirm_button").click();
                    }
                    else {
                        $('#budget-modal').modal('toggle');
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
                totalCost -= parseInt(row.cells[3].textContent.replace("₪",""));
                totalPaid -= parseInt(row.cells[4].textContent.replace("₪",""));
                row.cells[1].innerHTML = Data['type'];
                row.cells[1].axis = Data['typeNo'];
                row.cells[2].innerHTML = Data['supplier'];
                row.cells[3].innerHTML = Data['price']+'₪';
                row.cells[4].innerHTML = Data['paid']+'₪';
                row.cells[5].innerHTML = (parseInt(Data['price'])-parseInt(Data['paid']))+'₪';
                row.cells[6].innerHTML = Data['comment'];
                totalCost += parseInt(Data['price']);
                totalPaid += parseInt(Data['paid']);
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
                var cell9 = row.insertCell(8);
                cell1.innerHTML = index++;
                cell2.innerHTML = details['type'];
                cell2.axis = details['typeNo'];
                cell3.innerHTML = details['supplier'];
                cell4.innerHTML = details['price']+'₪';
                cell5.innerHTML = details['paid']+'₪';
                cell6.innerHTML = (parseInt(details['price'])-parseInt(details['paid']))+'₪';
                cell7.innerHTML = details['comment'];
                cell8.innerHTML = '<button type="button" value='+details["id"]+' onclick="editClick(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button>';
                cell9.innerHTML = '<button type="button" value='+details["id"]+' onclick="deleteRow(this)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>';
                totalCost += parseInt(details['price']);
                totalPaid += parseInt(details['paid']);
            }
        });
    </script>
    <script>
        var ctx3 = document.getElementById("chart3").getContext("2d");

        data3 = new Array();
        @foreach($weddingBudget as $budget)
            data3.push({
                value: parseInt("{{$budget->price}}"),
                color:"#25a6f7",
                highlight: "#25a6f7",
                label: "{{$budget->BudgetType->name}}, {{$budget->supplier_name}}"
            });
        @endforeach
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
    </script>
    <script>
        var ctx2 = document.getElementById("chart2").getContext("2d");

        data2 = new Array();
        @foreach($weddingBudget as $budget)
            data2.push({
                value: parseInt("{{$budget->price}}")-parseInt("{{$budget->paid}}"),
                color:"#25a6f7",
                highlight: "#25a6f7",
                label: "{{$budget->BudgetType->name}}, {{$budget->supplier_name}}"
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
    </script>
@endsection