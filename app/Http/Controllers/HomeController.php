<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Slider;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;

class HomeController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        $slider = Slider::all();
        $artikel = Artikel::where('publish', '1')->orderBy('id' , 'DESC')->limit('5')->get();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        
        return view('frontend.home.index', compact('desa', 'slider', 'artikel', 'config', 'category'));
    }

}
