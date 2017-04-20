<?php

namespace App\Http\Controllers\master_client;

use App\Http\Controllers\Controller;
use App\Wedding;
use Illuminate\Support\Facades\Auth;
use App\WeddingBudget;
use App\BudgetType;
use Illuminate\Support\Facades\Session;
use Request;
use Validator;
use Response;

class BudgetController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        $WeddingBudget = Wedding::find(Session::get('weddingID'))->weddingBudget;
        $BudgetTypes = BudgetType::all();
        $data = array('budgetTypes' => $BudgetTypes, 'weddingBudget' => $WeddingBudget);
        return view('master-client-view.budget', $data);
    }

    public function addBudget(Request $request)
    {
        $validator = Validator::make
        (
            array(
                'budget_type' => Request::get('budget_type'),
                'price' => Request::get('price'),
                'paid' => Request::get('paid'),
            ), array(
            'price' => 'required|numeric|min:0',
            'budget_type' => 'required',
            'paid' => 'numeric|min:0|max:'.Request::get('price'),
        ));
        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        if(Request::get("id") == 0)
            $budget = new WeddingBudget();
        else
            $budget = WeddingBudget::find(Request::get("id"));
        $budget->wedding_id = Session::get('weddingID');
        $budget->budget_type_id = Request::get('budget_type');
        $budget->supplier_name = Request::get('supplier');
        $budget->price = Request::get('price');
        $budget->paid = 0;
        if(Request::get('paid') != "")
            $budget->paid = Request::get('paid');
        $budget->comment = Request::get('comment');
        $budget->save();

        return Response::json([
            'success' => true,
            'errors' => null,
            'id' => $budget->id,
            'type' => BudgetType::find($budget->budget_type_id)->name,
            'typeNo' => $budget->budget_type_id,
            'supplier' => $budget->supplier_name,
            'price' => $budget->price,
            'paid' => $budget->paid,
            'comment' => $budget->comment,
        ]);
    }

    public function deleteBudget(Request $request)
    {
        WeddingBudget::DeleteById(Request::get('id'));
        return Response::json([
            'success' => true,
        ]);
    }
}
