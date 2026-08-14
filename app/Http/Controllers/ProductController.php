<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(StoreProductRequest $request){

        Product::create($request->validated());

        return redirect()->route('products.index')
                          ->with('success', 'Produit ajoute avec succes.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' =>'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('sucess', 'Produit modifie avec succes.');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produit supprime avec succes.');
    }
}
