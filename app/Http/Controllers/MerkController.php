<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merks = Merk::all()->sortBy('name');
        return view('dashboard.merk.index', [
            'merks' => $merks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.merk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|file|max:1024',
        ]);

        $merk = new Merk();
        $merk->name = $validated['name'];
        $merk->image =  $this->cloudinary($request->file('image')->getRealPath());
        $merk->save();
        return redirect(route('merks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merk $merk)
    {
        return view('dashboard.merk.edit', ['merk' => $merk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merk $merk)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'update_image' => 'image|file|max:1024',
        ]);

        $merk->name = $validated['name'];
        $update_image = $request->file('update_image');
        
        if($update_image) {
            $merk->image = $this->cloudinary($update_image->getRealPath());
        }

        $merk->save();

        return redirect(route('merks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merk $merk)
    {
        $merk->delete();
        return redirect(route('merks.index'));
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
