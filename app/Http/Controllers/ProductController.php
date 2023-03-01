<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('merk')->get()->sortBy('name');
        return view('dashboard.product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merks = Merk::all()->sortBy('name');
        return view('dashboard.product.create', [
            'merks' => $merks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => "required|string|max:128|unique:".Product::class,
            'price' => "required|numeric|gt:0",
            'merk_id' => "required|numeric|exists:merks,id",
            'image' => "required|image|file|max:1024",
        ]);

        $product = new Product();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->merk_id = $validated['merk_id'];
        $product->image = $this->cloudinary($request->file('image')->getRealPath());
        $product->save();
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
        $merks = Merk::all()->sortBy('name');
        return view('dashboard.product.edit', [
            'product' => $product,
            'merks' => $merks,
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
            'merk_id' => "required|numeric|exists:merks,id",
            'image' => "nullable|image|file|max:1024",
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

        $image = $request->file('image');
        if($image) {
            $product->image = $this->cloudinary($image->getRealPath());
        }

        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->merk_id = $validated['merk_id'];
        $product->save();
        
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }

    private function cloudinary(string $path): string
    {

        Configuration::instance(env('CLOUDINARY_URL'));     
        $upload = new UploadApi();
        $result = $upload->upload($path, [
            'folder' => 'new_central_teknik',
        ]);

        return $result['secure_url'];
    }
}
