<?php

namespace App\Http\Controllers\master_client;

use Request;
use Validator;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Present;
use App\Wedding;
use App\WeddingBudget;

class PresentController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        $presents = Wedding::find(Session::get('weddingID'))->Presents;
        $budgets = WeddingBudget::SumPrice(Session::get('weddingID'));
        $data = array('presents' => $presents, 'budgets' => $budgets);
        return view('master-client-view.present', $data);
    }

    public function addPresent(Request $request)
    {
        $validator = Validator::make
        (
            array(
                'from' => Request::get('from'),
                'guest_count' => Request::get('guest_count'),
                'amount' => Request::get('amount'),
            ), array(
            'from' => 'required',
            'guest_count' => 'required|numeric|min:1',
            'amount' => 'required|numeric|min:0',
        ));
        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        if(Request::get("id") == 0)
            $present = new Present();
        else {
            $present = Present::find(Request::get("id"));
            if($present->wedding_id != Session::get('weddingID'))
            {
                return Response::json([
                    'success' => false,
                ]);
            }
        }
        $present->wedding_id = Session::get('weddingID');
        $present->from = Request::get('from');
        $present->guest_count = Request::get('guest_count');
        $present->amount = Request::get('amount');
        $present->comment = Request::get('comment');
        $present->save();

        return Response::json([
            'success' => true,
            'errors' => null,
            'id' => $present->id,
            'from' => $present->from,
            'guest_count' => $present->guest_count,
            'amount' => $present->amount,
            'comment' => $present->comment,
        ]);
    }

    public function deletePresent(Request $request)
    {
        $present = Present::find(Request::get('id'));
        if($present->wedding_id != Session::get('weddingID'))
        {
            return Response::json([
                'success' => false,
            ]);
        }
        Present::destroy($present->id);
        return Response::json([
            'success' => true,
            'guest_count' => $present->guest_count,
            'amount' => $present->amount,
        ]);

    }
}
