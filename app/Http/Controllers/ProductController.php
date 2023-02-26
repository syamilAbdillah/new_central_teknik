<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => "required|string|max:128|unique:".Product::class,
            'price' => "required|numeric|gt:0",
        ]);

        Product::create($validated);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|string|max:128",
            'price' => "required|numeric|gt:0",
        ]);
        
        
        if($validator->fails()) {
            return redirect(route('products.edit', ['product' => $product]))
            ->withErrors($validator)
            ->withInput();
        }
        
        $validated = $validator->validated();
        
        $exist = Product::where('id', '<>', $product->id)
            ->where('name', $request->input('name'))
            ->first();

        if($exist != null) {
            $name = $validated['name'];
            $validator->errors()
                ->add('name', "'$name' has already been taken.");
            return redirect(route('products.edit', ['product' => $product]))
                ->withErrors($validator)
                ->withInput();
        }

        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->save();
        
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
