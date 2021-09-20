<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class KarangTarunaController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();

        return view('frontend.karangtaruna.index', [
            'desa' => $desa
        ]);
    }
}
