<?php

namespace App\Http\Controllers\master_supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;
use App\SupplierType;
use App\Supplier;

class SuppliersListController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $areas = Area::all();
        $categories = SupplierType::all();
        $suppliers = Supplier::all();
        $data = array('areas' => $areas, 'categories' => $categories, 'suppliers' => $suppliers);
        return view('master-supplier-view.suppliers-list', $data);
    }
}
