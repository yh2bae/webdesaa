<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\KepalaDesa;

class ProfileDesaController extends Controller
{
    // public function index()
    // {
    //     $desa = Desa::all()->first();
    //     return view('frontend.profil_desa.index', [
    //         'desa' => $desa
    //     ]);
    // }

    public function sejarahDesa()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $kades = KepalaDesa::all();

        return view('frontend.sejarah.index', compact('desa', 'config', 'category', 'kades'));
    }

    public function visiMisi()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();

        return view('frontend.visimisi.index', compact('desa', 'config', 'category'));
    }
}
