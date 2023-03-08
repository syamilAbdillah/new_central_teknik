<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::all();
        return view('dashboard.social.index', [
            'socials' => $socials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'link' => 'required|string|url',
            'image' => 'required|image|file|max:1024'
        ]);

        $social = new Social();
        $social->name = $validated['name'];
        $social->link = $validated['link'];
        $social->image = $this->cloudinary($request->file('image')->getRealPath());
        $social->save();

        $request->session()->flash('success-message', 'berhasil membuat data sosmed');
        return redirect(route('socials.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view('dashboard.social.edit', ['social' => $social]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'link' => 'required|string|url',
            'image' => 'nullable|image|file|max:1024',
        ]);

        
        $social->name = $validated['name'];
        $social->link = $validated['link'];
        $image = $request->file('image');

        if($image) {
            $social->image = $this->cloudinary($image->getRealPath());
        }

        $social->save();

        
        $request->session()->flash('success-message', 'berhasil mengubah data sosmed');
        return redirect(route('socials.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Social $social)
    {
        $social->delete();
        $request->session()->flash('success-message', 'berhasil menghapus data sosmed');
        return redirect(route('socials.index'));
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
