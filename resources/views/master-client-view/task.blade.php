@extends('layouts.master-client-layout.header-ext')
@section('title', 'My task')
@section('ext-scripts-n-styles')
    <link href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/colors/blue.css') }}" id="theme"  rel="stylesheet">
    <link href="{{ URL::asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection
@section('inner-page-title', 'המשימות שלי')
@section('breadcrumbs-nav')
    <li><a href="#">לוח ניהול</a></li>
    <li class="active">ניהול משימות</li>
@endsection
@section('content')
    <script>
        var taskIndex = 1;
        var totalTasks = 0;
        var tasksComp = 0;
        var tasksUncomp = 0;
        var tasksDel = 0;
    </script>
    <div class="white-box p-0">
        <div class="page-aside">
            <div class="left-aside">
                <div class="scrollable">
                    <ul class="list-style-none">
                        <li class="box-label"><h3>סוגי משימות</h3></li>
                        <li class="divider"></li>
                        <li><a onclick="BuildTable(1)">כל המשימות <span id="total_tasks"></span></a></li>
                        <li><a onclick="BuildTable(2)">משימות שבוצעו <span id="tasks_comp"></span></a></li>
                        <li><a onclick="BuildTable(3)">משימות שעדיין לא בוצעו <span id="tasks_uncomp"></span></a></li>
                        <li><a onclick="BuildTable(4)">משימות שנמחקו <span id="tasks_del"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="right-aside">
                <h3>המשימות שלי</h3>
                <h5 id="precent_tasks">סה"כ בוצעו 0% מהמשימות</h5>
                <div class="scrollable">
                    <div class="table-responsive">
                        <div id="task-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="form-horizontal form-material" id="add_new_task_form" action="" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">עריכת משימה</h4>
                                        </div>
                                        <div class="modal-body">
                                            <from class="form-horizontal form-material">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" id="m-name" placeholder="תיאור המשימה">
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
                                <th class="footable-sortable">בוצע<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">תיאור משימה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">הערות<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable">עריכה<span class="footable-sort-indicator"></span></th>
                                <th class="footable-sortable" id="recdel_title">מחיקה<span class="footable-sort-indicator"></span></th>
                            </tr>
                            </thead>
                            <tbody id="table_body">
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"></ul>
                                    </div></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('ext-footer-scripts')
    <script src="{{ URL::asset('js/footable-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            BuildTable(taskIndex);
        });

        function changeStatus(btn) {
            var status = 0;
            if(btn.checked)
                status = 1;
            console.log(status);
            var data = {
                id: btn.value,
                status: status,
                _token:$("#_token").val()
            };
            $.post('task/change_status', data, function (callback) {
                if(callback['success'] == true) {
                    if(status == 0)
                    {
                        tasksComp--;
                        tasksUncomp++;
                        if(taskIndex == 2) {
                            var row = btn.parentNode.parentNode;
                            row.parentNode.removeChild(row);
                        }
                    }
                    else
                    {
                        tasksComp++;
                        tasksUncomp--;
                        if(taskIndex == 3) {
                            var row = btn.parentNode.parentNode;
                            row.parentNode.removeChild(row);
                        }
                    }
                    UpdateTaskCtrl();
                }
                else
                {
                    alert("לא תצליח לעבוד עלינו :)");
                }
            });
        }

        function delrecTask(btn, parity) {
            var data = {
                id: btn.value,
                status: parity,
                _token:$("#_token").val()
            };
            $.post('task/delrec_task', data, function (callback) {
                if(callback['success'] == true) {
                    var row = btn.parentNode.parentNode;
                    if(parity == 0)
                    {
                        totalTasks++;
                        tasksDel--;
                        if(row.cells[1].children[0].checked)
                            tasksComp++;
                        else
                            tasksUncomp++;
                    }
                    else
                    {
                        totalTasks--;
                        tasksDel++;
                        if(row.cells[1].children[0].checked)
                            tasksComp--;
                        else
                            tasksUncomp--;
                    }
                    row.parentNode.removeChild(row);
                    UpdateTaskCtrl();
                }
                else
                {
                    alert("לא תצליח לעבוד עלינו :)");
                }
            });
        }

        function UpdateTaskCtrl() {
            $('#total_tasks').text(totalTasks);
            $('#tasks_comp').text(tasksComp);
            $('#tasks_uncomp').text(tasksUncomp);
            $('#tasks_del').text(tasksDel);
            if(totalTasks != 0)
                $('#precent_tasks').text('סה"כ בוצעו ' + tasksComp/totalTasks*100 + '% מהמשימות');
            else
                $('#precent_tasks').text('סה"כ בוצעו 0% מהמשימות');
        }

        function removeAll() {
            var rows = $("#table_body > *");
            for(var i = 0; i < rows.length; i++)
                rows[i].parentNode.removeChild(rows[i]);
        }

        function BuildTable(id)
        {
            taskIndex = id;
            totalTasks = 0;
            tasksComp = 0;
            tasksUncomp = 0;
            tasksDel = 0;

            removeAll();
            var title = $("#recdel_title");
            title.text("מחיקה");
            if(taskIndex == 4)
                title.text("שחזור");
            var table = $("#table_body");
            var index = 1;
            var data = {_token:$("#_token").val()};
            $.post('task/get_all_tasks', data, function (callback) {
                var tasks = callback['tasks'];
                for(var i = 0; i < tasks.length; i++) {
                    if ((id == 1 && tasks[i]['is_deleted'] == 0) ||
                            (id == 2 && tasks[i]['is_deleted'] == 0 && tasks[i]['exec'] == 1) ||
                            (id == 3 && tasks[i]['is_deleted'] == 0 && tasks[i]['exec'] == 0) ||
                            (id == 4 && tasks[i]['is_deleted'] == 1))
                    {
                        var tr = $('<tr class="footable-even" style="display: table-row;">');
                        var td1 = $('<td>');
                        td1.text(index++);
                        var td2 = $('<td>');
                        var innerTd2 = $('<input type="checkbox" value="" onclick="changeStatus(this)">');
                        if (tasks[i]['exec'] == 1)
                            innerTd2 = $('<input type="checkbox" value="" onclick="changeStatus(this)" checked>');
                        innerTd2.val(tasks[i]['id']);
                        td2.append(innerTd2);
                        var td3 = $('<td>');
                        td3.text(tasks[i]['task']['name']);
                        var td4 = $('<td>');
                        td4.text(tasks[i]['comment']);
                        var td5 = $('<td>');
                        var innerTd5 = $('<button type="button" onclick="editClick(this)" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Edit">');
                        var innerBTd5 = $('<i class="ti-pencil" aria-hidden="true">');
                        innerTd5.val(tasks[i]['id']);
                        innerTd5.append(innerBTd5);
                        td5.append(innerTd5);
                        var td6 = $('<td>');
                        var innerTd6 = $('<button type="button" onclick="delrecTask(this, 1)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete">');
                        var innerBTd6 = $('<i class="ti-close" aria-hidden="true">');
                        if (id == 4) {
                            innerTd6 = $('<button type="button" onclick="delrecTask(this, 0)" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete">');
                            innerBTd6 = $('<i class="ti-arrow-up" aria-hidden="true">');
                        }
                        innerTd6.val(tasks[i]['id']);
                        innerTd6.append(innerBTd6);
                        td6.append(innerTd6);

                        tr.append(td1);
                        tr.append(td2);
                        tr.append(td3);
                        tr.append(td4);
                        tr.append(td5);
                        tr.append(td6);
                        table.append(tr);
                        if(taskIndex == 4)
                        {
                            innerTd5.prop('disabled', true);
                            innerTd2.prop('disabled', true);
                        }
                    }
                    if(tasks[i]['is_deleted'] == 0)
                    {
                        totalTasks++;
                        if(tasks[i]['exec'] == 0)
                            tasksUncomp++;
                        else
                            tasksComp++;
                    }
                    else
                    {
                        tasksDel++;
                    }
                }
                UpdateTaskCtrl();
            });
        }

        function editClick(btn) {
            var row = btn.parentNode.parentNode;
            $('#m-id').val(btn.value);
            $('#m-index').val(row.cells[0].textContent.replace("document.write(index++);",""));
            $('#m-name').val(row.cells[2].textContent);
            $('#m-comment').val(row.cells[3].textContent);
            $('#task-modal').modal('show');
        }

        $(document).ready(function() {
            $("#add_new_task_form").submit(function (e) {
                e.preventDefault();
                var index = $('#m-index').val();
                var data =  {
                    id: $("#m-id").val(),
                    comment: $("#m-comment").val(),
                    _token:$("#_token").val()
                };

                $.post('task/store', data, function(callback) {
                    if(callback['success'] == true) {
                        $('#task-modal').modal('toggle');
                        var table = document.getElementById("demo-foo-addrow");
                        var row = table.rows[index];
                        console.log(row);
                        row.cells[3].innerHTML = callback['comment'];
                    }
                    else {
                        alert("לא תצליח לעבוד עלינו :)")
                    }
                });
            });
        });
    </script>
@endsection