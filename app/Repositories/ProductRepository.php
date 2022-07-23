<?php

namespace App\Repositories;

use App\Http\Requests\StoreProductRequest;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface{

    public function index(){

        $products = Product::simplePaginate(3);

        return view('products.index',compact('products'));
    }

    public function create()
    {
        // TODO: Implement create() method.

        return view('products.create');
    }


    public function store(StoreProductRequest $request)
    {
        try {

            $product = new Product();
            $product->product_name = $request->product_name;
            $product->sell_price = $request->sell_price;

            $product->save();

            return redirect()->route('products.index')->with('success','product created successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }


    public function edit($id){

        $product = Product::findOrFail($id);

        return view('products.edit',compact('product'));
    }

    public function update(StoreProductRequest $request,$id){

        try {

            $product = new Product();
            $product->product_name = $request->product_name;
            $product->sell_price = $request->sell_price;

            $product->save();

            return redirect()->route('products.index')->with('success','product updated successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }


    }

    public function delete($id){

        try {

            $product = Product::findOrFail($id);

            $product->delete();
            return redirect()->route('products.index')->with('delete','product deleted successfully');

        }catch (\Exception $exception){

            return redirect()->back()->withErrors(['error' => $exception->getMessage()]);
        }
    }

}