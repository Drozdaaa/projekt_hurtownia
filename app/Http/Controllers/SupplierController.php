<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
=======

>>>>>>> 16042116d879712469bcd358737837c23b503966
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
<<<<<<< HEAD
        return view('supplier.index',[
            'supplier'=>supplier::all()
        ]);
    }
    public function edit($id)
    {
        $shsupplierop = supplier::findOrFail($id);
        return view('supplier.edit', [
            'supplier' => $supplier,
            'suppliers' => supplier::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|integer',
            'email' => 'required|string',

        ]);

        $supplier = supplier::findOrFail($id);
        $input = $request->all();
        $supplier->update($input);
        return redirect()->route('supplier.index');
    }   
}
=======
        return view('supppliers.index',[
            'suppliers'=>supplier::all()
        ]);
    }
}
>>>>>>> 16042116d879712469bcd358737837c23b503966
