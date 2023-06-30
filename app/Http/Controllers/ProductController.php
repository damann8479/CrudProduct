<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        $product->create([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'description' => $request->description
        ]);
        return redirect('products')->with('msg', 'Product '.$request->name.' wurde angelegt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'description' => $request->description
        ]);
        return redirect('products')->with('msg', 'Product '.$request->name.' wurde geändert!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('products')->with('msg', 'Product '.$product->name.' wurde gelöscht!');

    }
}
