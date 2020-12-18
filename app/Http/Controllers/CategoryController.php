<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function create(){
        $products = Product::all();
        return view('crecategory',compact('products'));
    }

    public function destroy($id){
        Category::destroy($id);
        return back();
    }

    public function store(Request $request){
        $request->validate([
            'product_id' => 'required',
            'category_product' => 'required'
        ]);
        Category::create([
            'product_id' => $request->product_id,
            'category_product' => $request->category_product
        ]);
        return redirect('/category');
    }

    public function show($id){
        $category = Category::findOrFail($id);
        return view('catshow',compact('category'));
    }

    public function update(Request $request, $id){
        Category::findorFail($id)->update([
            'product_id' => $request->product_id,
            'category_product' => $request->category_product
        ]);
        return redirect('/category');
    }

    public function edit($id){
        $category = Category::findorFail($id);
        $products = Product::all();
        return view('upcategory', compact('category','products'));
    }
}
