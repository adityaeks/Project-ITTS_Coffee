<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Nama tabel di database
    protected $fillable = ['name', 'price', 'kategory', 'subkategory', 'image'];

    // Relasi dengan Kategory
    public function kategory()
    {
        return $this->belongsTo(Kategory::class, 'kategorys');
    }

    // Relasi dengan Subkategory
    public function subkategory()
    {
        return $this->belongsTo(Subkategory::class, 'subkategorys');
    }
}
