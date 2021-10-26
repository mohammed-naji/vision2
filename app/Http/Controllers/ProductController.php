<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        $products = Product::all();
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

        return redirect()->route('products.index');
    }

    function edit() {
        return view('products.');
    }

    function update() {
        return view('products.');
    }

    function destroy() {
        return view('products.');
    }

    function show() {
        return view('products.');
    }
}
