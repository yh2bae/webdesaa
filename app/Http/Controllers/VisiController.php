<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        return view('frontend.visi&misi.index', [
            'desa' => $desa
        ]);
    }
}
