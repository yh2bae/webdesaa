<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusHubunganDalamKeluarga extends Model
{
    use HasFactory;

    protected $table = "status_hubungan_dalam_keluarga";
    protected $guarded = [];

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
