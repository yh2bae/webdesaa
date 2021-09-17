<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penduduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "penduduk";
    protected $guarded = [];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function darah()
    {
        return $this->belongsTo(Darah::class);
    }

    public function detailDusun()
    {
        return $this->belongsTo(DetailDusun::class);
    }

    public function statusHubunganDalamKeluarga()
    {
        return $this->belongsTo(StatusHubunganDalamKeluarga::class);
    }

    public function statusPerkawinan()
    {
        return $this->belongsTo(StatusPerkawinan::class);
    }
}
