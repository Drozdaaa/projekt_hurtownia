<?php

namespace App\Http\Controllers;
use App\Models\shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('shops.index',[
            'shops'=>shop::all()
        ]);
    }
    public function edit($id)
    {
        $shop = shop::findOrFail($id);
        return view('shops.edit', [
            'shop' => $shop,
            'shops' => shop::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|integer',
            'email' => 'required|string',
            'industry' => 'required|string',

        ]);

        $shop = shop::findOrFail($id);
        $input = $request->all();
        $shop->update($input);
        return redirect()->route('shop.index');
    }
}
