<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockBarang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang',
        'tanggal_update',
        'tipe_produk',
        'stok',
        'warna',
        'ukuran'
    ];
}
