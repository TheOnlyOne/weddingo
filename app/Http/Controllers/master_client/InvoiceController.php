<?php

namespace App\Http\Controllers\master_client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index() {
        // TODO:
        // $latest_purchase_details = db_fetch(latest_purchase)
        return view("master-client-view/invoice");
    }
}
