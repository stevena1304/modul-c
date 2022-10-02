<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaKategori'
    ];
    protected $table = 'Kategori';

    public function produk()
    {
        return $this->hasMany('App\Models\Produk', 'kategori_id');
    }
}
