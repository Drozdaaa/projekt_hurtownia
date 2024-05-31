<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\supplier;
use App\Models\shop;
use Database\Seeders\SupplierSeeder;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',[
            'products' => Product::orderBy('id')->get(),
            'types' => ProductType::all(),
            'suppliers' => Supplier::all(),
            'shops' => Shop::all(),
        ]);
    }
    public function home()
    {
        $products = Product::where('product_type_id', 1)->get();
        return view('products.home', compact('products'));
    }
    public function garden()
    {
        $products = Product::where('product_type_id', 2)->get();
        return view('products.garden', compact('products'));
    }
    public function food()
    {
        $products = Product::where('product_type_id', 3)->get();
        return view('products.food', compact('products'));
    }
    public function agd()
    {
        $products = Product::where('product_type_id', 4)->get();
        return view('products.agd', compact('products'));
    }
    public function chemistry()
    {
        $products = Product::where('product_type_id', 5)->get();
        return view('products.chemistry', compact('products'));
    }
    public function toys()
    {
        $products = Product::where('product_type_id', 6)->get();
        return view('products.toys', compact('products'));
    }
    public function clothes()
    {
        $products = Product::where('product_type_id', 7)->get();
        return view('products.clothes', compact('products'));
    }
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('product.edit', [
            'product' => $product,
            'products' => product::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string|min:0',
            'quantity' => 'required|integer|min:0',
            'supplier_id' => 'required|exists:suppliers,id',
            'product_type_id' => 'required|exists:product_types,id',
        ]);

        $product = product::findOrFail($id);
        $input = $request->all();
        $product->update($input);
        return redirect()->route('products.index');
    }


    public function create()
    {
        $types = ProductType::all();
        $suppliers = Supplier::all();
        $shops = Shop::all();
        return view('products.create', compact('types', 'suppliers','shops'));
    }


    public function store(StoreProductRequest $request)
    {
        $input = $request->all();
        product::create($input);

        return redirect()->route('products.index'
    );
    }
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }}
