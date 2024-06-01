<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Employee; // Import modelu Employee
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    // Funkcja dodawania produktu do koszyka
    public function addToCart(Request $request)
    {

        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $user_id = Auth::id();

        // Pobierz produkt z bazy danych
        $product = Product::findOrFail($product_id);

        // Walidacja ilości
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|integer|min:1',
        ]);

        // Dodaj własne sprawdzenie dostępnej ilości produktu
        $validator->after(function ($validator) use ($product, $quantity) {
            if ($quantity > $product->quantity) {
                $validator->errors()->add('quantity', 'Za mała ilość produktu w magazynie.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Sprawdź, czy produkt już znajduje się w koszyku
        $cartItem = Cart::where('product_id', $product_id)
                        ->where('user_id', $user_id)
                        ->first();

        if ($cartItem) {
            // Jeśli produkt jest już w koszyku, zaktualizuj ilość
            $newQuantity = $cartItem->quantity + $quantity;

            // Sprawdzenie dostępnej ilości przed aktualizacją
            if ($newQuantity > $product->quantity) {
                return redirect()->back()->withErrors(['quantity' => 'Za mała ilość produktu w magazynie.'])->withInput();
            }

            $cartItem->quantity = $newQuantity;
            $cartItem->save();
        } else {
            // Dodaj nowy produkt do koszyka
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('message', 'Produkt dodany do koszyka.');
    }

    // Funkcja obsługująca proces checkout
    public function checkout()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.view')->with('message', 'Twój koszyk jest pusty.');
        }

        // Znajdź pracownika z najmniejszą ilością zamówień
        $employee = Employee::withCount('orders')
                            ->orderBy('orders_count', 'asc')
                            ->first();

        if (!$employee) {
            return redirect()->route('cart.view')->with('message', 'Brak dostępnych pracowników do przypisania.');
        }

        // Utwórz zamówienia z pozycji koszyka
        foreach ($cartItems as $cartItem) {
            Order::create([
                'order_date' => now(),
                'delivery_date' => now()->addDays(7), // Przykładowa data dostawy
                'quantity' => $cartItem->quantity,
                'employee_id' => $employee->id, // Przypisz pracownika z najmniejszą ilością zamówień
                'product_id' => $cartItem->product_id,
                'user_id' => $user_id,
            ]);

            // Usuń pozycję z koszyka
            $cartItem->delete();
        }

        return redirect()->route('hurtownia.index');
    }

    // Funkcja wyświetlania pozycji w koszyku
    public function viewCart()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        // Oblicz całkowity koszt
        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('hurtownia.cart', compact('cartItems', 'totalCost'));
    }

    // Funkcja usuwania pozycji z koszyka
    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.view')->with('message', 'Produkt został usunięty z koszyka.');
    }
}
