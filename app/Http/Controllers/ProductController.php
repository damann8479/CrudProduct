<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $products;
    public $categories;

    public function __construct() 
    {
        $this->products = Product::all();
        $this->categories = Category::all();
    }
    public function index()
    {
        //$products = Product::all();
        
        return view('product.index', [
            'products' => $this->products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create');
        return view('product.create', [
            'categories' => $this->categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'description' => $request->description
        ]);
        $product->categories()->sync($request->categories);
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
        $this->authorize('update', $product);
        return view('product.edit', [
            'product' => $product,
            'categories' => $this->categories
        ]);
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
        $product->categories()->sync($request->categories);

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
