<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {

        if(request()->has('keyword')) {
            $keyword = request()->keyword;
            $products = Product::latest()
            ->where('name', 'like', "%$keyword%")
            ->orWhere('price', $keyword)
            ->paginate(2);
        }else {
            $products = Product::latest()->paginate(2);
        }


        // $products = Product::orderBy('name', 'asc')->paginate(2);
        // $products = Product::orderBy('name', 'asc')->paginate(2);
        return view('products.index')->with('products', $products);
        // return view('products.index', compact('products'));
        // return view('products.index',[
        //     'products' => $products
        // ]);
    }

    function create() {
        return view('products.create');
    }

    function store(Request $request) {

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|max:400',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = 'product_'.rand().'_'.rand().'.'.$ex;
        $request->file('image')->move(public_path('uploads/products'), $new_name);

        // Add Data Using Object
        // $product = new Product();
        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->image = $new_name;
        // $product->price = $request->price;
        // $product->stock = $request->stock;
        // $product->save();

        // Add Data Using Class
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $new_name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Products Added Successfully');
    }

    function edit($id) {
        $product = Product::find($id);
        dd($product);
        return view('products.');
    }

    function update() {
        return view('products.');
    }

    function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
        // return view('products.');
    }

    function show() {
        return view('products.');
    }

    public function delete_all()
    {
        Product::truncate();
        return redirect()->route('products.index');
    }
}
