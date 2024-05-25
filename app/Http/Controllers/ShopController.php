<?php

namespace App\Http\Controllers;
use App\Models\shop;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShopRequest;
class ShopController extends Controller
{
    public function index(){
        return view('shops.index',[
            'shops' => Shop::orderBy('id')->get()
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
            'phone_number' => 'required|integer|max:999999999',
            'email' => 'required|string',
            'industry' => 'required|string',

        ]);

        $shop = shop::findOrFail($id);
        $input = $request->all();
        $shop->update($input);
        return redirect()->route('shops.index');
    }
    public function create()
    {
        return view('shops.create'

        );
    }
    public function store(StoreShopRequest $request)
    {
        $input = $request->all();
        shop::create($input);

        return redirect()->route('shops.index'
    );
    }
}
