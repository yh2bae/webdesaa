<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;

class ProfileDesaController extends Controller
{
    public function sejarahDesa()
    {

        $config = Configuration::all()->first();
        $desa = Desa::all()->first();
        $category = Kategori::all();
        return view('frontend.sejarah.index', [
            'desa' => $desa,
            'config' => $config,
            'category' => $category
        ]);
    }
}
