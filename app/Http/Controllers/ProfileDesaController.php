<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class ProfileDesaController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        return view('frontend.profil_desa.index', [
            'desa' => $desa
        ]);
    }

    public function sejarahDesa()
    {
        $desa = Desa::all()->first();
        return view('frontend.sejarah.index', [
            'desa' => $desa
        ]);
    }
}
