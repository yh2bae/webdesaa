<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dusun extends Model
{
    use HasFactory;

    protected $table = "dusun";
    protected $guarded = [];

    public function detailDusun()
    {
        return $this->hasMany(DetailDusun::class);
    }
}
