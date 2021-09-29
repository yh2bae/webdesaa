<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Http\Controllers\Controller;

class KarangTarunaController extends Controller
{
    public function index()
    {
        $config = Configuration::all()->first();
        $desa = Desa::all()->first();
        $category = Kategori::all();
        return view('frontend.karangtaruna.index', [
            'desa' => $desa,
            'config' => $config,
            'category' => $category
        ]);
    }
}
