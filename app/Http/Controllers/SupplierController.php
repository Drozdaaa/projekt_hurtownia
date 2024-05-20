<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return view('supppliers.index',[
            'suppliers'=>supplier::all()
        ]);
    }
}
