<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.index', [
            'produk' => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_produk = $request->validate([
            'image'=>'image|file',
            'nama_barang' => ['required'],
            'harga' => ['required'],
            'deskripsi' => ['required'],
            'stok' => ['required'],
        ]);

        $data_produk['image'] = $request->file('image')->store('post-images');


        Produk::create($data_produk);
        return redirect('/produk/index')->with('success', 'Produk di Tambahkan');

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
    public function edit(Produk $produk)
    {
        return view('produk.edit',[
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $data_produk = $request->validate([
            'nama_barang' => ['required'],
            'harga' => ['required'],
            'deskripsi' => ['required'],
            'stok' => ['required'],
        ]);
        $produk->update($data_produk);
        return redirect('/produk/index')->with('success', 'Update Produk Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return back()->with('succsess', "Produk di Hapus");
    }
}
