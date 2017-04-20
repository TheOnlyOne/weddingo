<?php

namespace App\Http\Controllers\master_supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;

class SupplierDetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $data = array('supplier' => $supplier);
        return view('master-supplier-view.supplier-detail', $data);
    }
}
