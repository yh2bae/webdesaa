<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori_berita";

    protected $guarded =[];

    public function berita()
    {
        return $this->hasMany(Artikel::class);
    }
    
}
