<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('data',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'code' => 'required',
            'nameproduct' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        Product::create([
            'code' => $request->code,
            'nameproduct' => $request->nameproduct,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return redirect('/');
    }

    public function destroy($id){
        Product::destroy($id);
        return back();
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('show',compact('product'));
    }

    public function edit($id){
        $product = Product::findorFail($id);
        $categories = Category::all();
        return view('update', compact('product','categories'));
    }

    public function update(Request $request, $id){
        Product::findorFail($id)->update([
            'code' => $request->code,
            'nameproduct' => $request->nameproduct,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return redirect('/');
    }
}
