<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        return view('frontend.home.index', [
            'desa' => $desa
        ]);
    }
}
