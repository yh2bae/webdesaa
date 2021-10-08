<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Struktur;

class PemerintahanDesa extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $struktur = Struktur::all();

        return view('frontend.pemerintahan.index', compact('desa', 'config', 'category', 'struktur'));
    }

    public function detailPemerintah($name)
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $struktur = Struktur::where('name', $name)->firstOrFail();

        return view('frontend.pemerintahan.detail', compact('desa', 'config', 'category', 'struktur'));
    }
}
