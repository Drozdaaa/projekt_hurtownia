<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; 
class WholesalerController extends Controller
{
    public function index()
    {

        $suppliers = Supplier::all();

        return view('hurtownia.index', [
            'suppliers' => $suppliers,
            'randomSuppliers' => $suppliers->random(4),
        ]);
    }
}
