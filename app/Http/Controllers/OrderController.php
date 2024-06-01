<?php
namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function getOrdersByUser($userId)
    {
        // Call the stored procedure using DB facade
        $results = DB::select('CALL get_orders_by_user(?)', [$userId]);

        // Process the results if needed
        foreach ($results as $result) {
            // Handle each result as needed
            echo "Order ID: $result->id, Order Date: $result->order_date, Delivery Date: $result->delivery_date, Quantity: $result->quantity, Product: $result->product_name <br>";
        }
    }

    public function index()
    {
        $orders = Order::with(['user', 'employee'])->get();
        return view('orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::with(['user', 'employee'])->findOrFail($id);
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
