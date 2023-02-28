<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merks = Merk::all();
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
            'name' => 'required|string'
        ]);

        Merk::create($validated);
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
        return view('dashboard.merk.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merk $merk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merk $merk)
    {
        //
    }
}