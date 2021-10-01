<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;

class VisiController extends Controller
{
    public function index()
    {
        $config = Configuration::all()->first();
        $desa = Desa::all()->first();
        $category = Kategori::all();
        return view('frontend.visi&misi.index', [
            'desa' => $desa,
            'config' => $config,
            'category' => $category
        ]);
    }
}

