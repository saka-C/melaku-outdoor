<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $tipe = Tipe::all();
        return view('produk.index', compact('produk', 'tipe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipe = Tipe::all(); // Mengambil semua data tipe produk
        return view('produk.create', compact('tipe'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_produk = $request->validate([
            'image'=>'image|file',
            'nama_barang' => ['required'],
            'tipe_id'=> ['required'],
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
        $tipe = Tipe::all(); // Misalnya, Anda mengambil data dari model Tipe
    
        return view('produk.edit', [
            'produk' => $produk,
            'tipe' => $tipe,
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

        if ($request->hasFile('image')) {
            // Hapus gambar lama (jika ada)
            if ($produk->image) {
                Storage::delete('public/' . $produk->image);
            }
    
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('public/images');
            $data_produk['image'] = $imagePath;
        }
    


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
