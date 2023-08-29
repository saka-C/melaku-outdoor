<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipe;
use App\Models\Produk;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tipe.index', [
            'tipe'=> Tipe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tipe = $request->validate([
            'tipe' => ['required']
        ]);
        Tipe::create($data_tipe);
        return redirect('/tipe/index')->with('success', 'Tipe ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipe $tipe)
    {
        return view('tipe.edit', [
            'tipe'=> $tipe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipe $tipe)
    {
        $data_tipe = $request->validate([
            'tipe' => ['required']
        ]);
        $tipe->update($data_tipe);
        return redirect('/tipe/index')->with('success', 'Update kategori Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipe $tipe)
    {
        $tipe->delete();
        return back()->with('success', 'data dihapus');
    }
}
