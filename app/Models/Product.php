<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Nama tabel di database
    protected $fillable = ['name', 'price', 'kategory_id', 'subkategory_id', 'image'];

    // Relasi dengan Kategory
    public function kategory()
    {
        return $this->belongsTo(Kategory::class, 'kategory_id');
    }

    // Relasi dengan Subkategory
    public function subkategory()
    {
        return $this->belongsTo(Subkategory::class, 'subkategory_id');
    }
}
