<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index (){
        $products = Product::orderby('created_at')->get() ;
        return view('products.index',['products' => $products]);
    }

    public function create (){
        return view('products.create');
    }


    public function store(Request $request){
        $product = new Product;
        $product -> name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('products.index')->with('success','Product added successfully');
    }
}
