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
}
