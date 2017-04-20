<?php

namespace App\Http\Controllers\master_client;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\TaskToWedding;
use App\wedding;
use Response;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        return view('master-client-view.task');
    }

    public function allTasks()
    {
        $tasks = Wedding::find(Session::get('weddingID'))->TasksToWedding;
        foreach ($tasks as $task)
        {
             $task->Task;
        }
        return Response::json([
            'tasks' =>  $tasks,
        ]);
    }

    public function changeStatus()
    {
        $task_id = Request::get('id');
        $WeddingTask = TaskToWedding::find($task_id);
        if($WeddingTask->wedding_id != Session::get('weddingID'))
        {
            return Response::json([
                'success' => false,
            ]);
        }
        $WeddingTask->exec = Request::get('status');
        $WeddingTask->save();
        return Response::json([
            'success' => true,
        ]);
    }

    public function delrecTask()
    {
        $task_id = Request::get('id');
        $WeddingTask = TaskToWedding::find($task_id);
        if($WeddingTask->wedding_id != Session::get('weddingID'))
        {
            return Response::json([
                'success' => false,
            ]);
        }
        $WeddingTask->is_deleted = Request::get('status');
        $WeddingTask->save();
        return Response::json([
            'success' => true,
        ]);
    }

    public function store()
    {
        $task = TaskToWedding::find(Request::get('id'));
        if($task->wedding_id != Session::get('weddingID'))
        {
            return Response::json([
                'success' => false,
            ]);
        }
        $task->comment = Request::get('comment');
        $task->save();
        return Response::json([
            'success' => true,
            'comment' => $task->comment,
        ]);
    }
}
