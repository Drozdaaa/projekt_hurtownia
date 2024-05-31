<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $types = ProductType::all();
        return view('product_types.index', compact('types'));
    }

    public function create()
    {
        return view('product_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'types' => 'required|string|max:255',
        ]);

        ProductType::create($request->all());

        return redirect()->route('product_types.index')
            ->with('success', 'Typ produktu został dodany.');
    }
}
