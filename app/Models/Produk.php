<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'nama_barang', 'harga', 'deskripsi', 'stok',
    ];

    protected $casts = [
        'harga' => 'decimal:2', // Mengatur tipe data kolom price sebagai decimal dengan 2 angka di belakang koma
    ];
}
