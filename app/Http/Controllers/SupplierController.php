<?php

namespace App\Http\Controllers;
use App\Models\supplier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSupplierRequest;
class SupplierController extends Controller
{
    public function index(){
        return view('suppliers.index',[
            'suppliers' => supplier::orderBy('id')->get()
        ]);
    }
    public function edit($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('suppliers.edit', [
            'supplier' => $supplier,
            'suppliers' => supplier::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|integer|min:100000000|max:999999999',
            'email' => 'required|string',
            'description' => 'required|string',

        ]);


        $supplier = supplier::findOrFail($id);
        $input = $request->all();
        $supplier->update($input);
        return redirect()->route('suppliers.index');
    }
    public function create()
    {
        return view('suppliers.create'

        );
    }
    public function store(StoreSupplierRequest $request)
    {
        $input = $request->all();
        supplier::create($input);

        return redirect()->route('suppliers.index'
    );
    }
    public function destroy(supplier $shop)
    {
        $shop->delete();
        return redirect()->route('suppliers.index');
    }
}

