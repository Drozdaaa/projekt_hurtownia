<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        
        $userId = $request->input('user_id');

        if ($userId) {
            // Pobieranie zamówień dla danego użytkownika wraz z powiązanymi modelami
            $orders = Order::with(['user', 'employee', 'product'])
                           ->where('user_id', $userId)
                           ->get();
        } else {
            $orders = Order::with(['user', 'employee', 'product'])->get();
        }

        return view('orders.index', compact('orders', 'userId'));
    }

    public function edit($id)
    {
        $order = Order::with(['user', 'employee', 'product'])->findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'order_date' => 'required|date',
            'delivery_date' => 'required|date',
            'quantity' => 'required|integer',
            'shop_id' => 'required|integer',
            'employee_id' => 'required|integer',
            'product_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('orders.index');
    }
}
