<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Agama;
use App\Models\Kategori;
use App\Models\Penduduk;
use App\Models\Configuration;

class DataController extends Controller
{
    public function dataAgama()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();
      

        return view('frontend.data.agama', compact('desa', 'config', 'category', 'penduduk'));
    }

    public function dataPendidikan()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();

        return view('frontend.data.pendidikan', compact('desa', 'config', 'category', 'penduduk'));
    }
    
    public function dataPekerjaan()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();

        return view('frontend.data.pekerjaan', compact('desa', 'config', 'category', 'penduduk'));
    }

    public function dataUmur()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();

        return view('frontend.data.umur', compact('desa', 'config', 'category', 'penduduk'));
    }

    public function dataPerkawinan()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();

        return view('frontend.data.perkawinan', compact('desa', 'config', 'category', 'penduduk'));
    }

    public function dataDarah()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $penduduk = Penduduk::all();

        return view('frontend.data.darah', compact('desa', 'config', 'category', 'penduduk'));
    }

    
}
