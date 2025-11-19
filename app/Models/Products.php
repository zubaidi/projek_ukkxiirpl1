<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    use HasFactory, Notifiable;
    /**
     * @var string
     */
    protected $table = 'products';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jumlah',
        'harga_barang'
    ];

}
