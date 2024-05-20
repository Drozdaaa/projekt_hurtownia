<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('orders.index',[
            'orders'=>Order::all()
        ]);
    }
    public function edit($id)
    {
        $order = order::findOrFail($id);
        return view('orders.edit', [
            'order' => $order,
            'orders' => order::all()
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

        $order = order::findOrFail($id);
        $input = $request->all();
        $order->update($input);
        return redirect()->route('orders.index');
    }
}
