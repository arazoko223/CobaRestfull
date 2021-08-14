<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class StockBarang extends Model
{

    protected $table="stock_barang";
    public $timestamps= false;
    protected $primaryKey = 'id';



    protected $fillable = [
        'nama_barang',
        'tanggal_update',
        'tipe_produk',
        'stok',
        'warna',
        'ukuran'
    ];
}
