<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Function to add product to cart
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $user_id = Auth::id();

        // Check if the product is already in the cart
        $cartItem = Cart::where('product_id', $product_id)
                        ->where('user_id', $user_id)
                        ->first();

        if ($cartItem) {
            // If product is already in the cart, update the quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Add new product to cart
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('message', 'Product added to cart successfully.');
    }

    // Function to view cart items
    public function viewCart()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        // Calculate total cost
        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('hurtownia.cart', compact('cartItems', 'totalCost'));
    }

    // Function to remove item from cart
    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.view')->with('message', 'Product removed from cart successfully.');
    }
}
