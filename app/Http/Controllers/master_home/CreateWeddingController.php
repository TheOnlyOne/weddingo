<?php

namespace App\Http\Controllers\master_home;

use Illuminate\Support\Facades\Auth;
use App\Wedding;
use App\WeddingManager;
use App\SupplierType;
use App\Task;
use App\TaskToWedding;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Request;
use Validator;
use Response;

class CreateWeddingController extends Controller
{
    public function __construct()
    {
        $this->middleware('create_wedding_auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wedding_halls = SupplierType::find(1)->Suppliers;
        $data = array('wedding_halls' => $wedding_halls);
        return view('master-home-view.create-wedding', $data);
    }


    public function logout()
    {
        Auth::logout();
        Session::forget('weddingID');
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make
        (
            array(
                'groom_name' => Request::get('groom_name'),
                'bride_name' => Request::get('bride_name'),
                'date' => Request::get('date'),
                'wedding_hall' => Request::get('wedding_hall'),
            ), array(
            'groom_name' => 'required|max:20',
            'bride_name' => 'required|max:20',
            'date' => 'required|date|after:tomorrow',
            'wedding_hall' => 'required',
        ));


        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $wedding = new Wedding();
        $wedding->groom_name = Request::get("groom_name");
        $wedding->bride_name = Request::get("bride_name");
        $wedding->date = Request::get("date");
        $wedding->wedding_hall = Request::get("wedding_hall");
        $wedding->template_id = null;
        $wedding->save();

        $weddingManager = new WeddingManager();
        $weddingManager->user_id = Auth::user()->id;
        $weddingManager->wedding_id = $wedding->id;
        $weddingManager->save();

        $tasks = Task::all();
        foreach ($tasks as $task)
        {
            $weddingTask = new TaskToWedding();
            $weddingTask->wedding_id = $wedding->id;
            $weddingTask->task_id = $task->id;
            $weddingTask->exec = false;
            $weddingTask->place = $task->place;
            $weddingTask->is_deleted = false;
            $weddingTask->save();
        }

        Session::set('weddingID', $wedding->id);
        return Response::json([
            'success' => true,
            'errors' => null,
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
