<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;

class PetaDesaController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();

        return view('frontend.peta.index', compact('desa', 'config', 'category'));
    }
}
