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

    public function detailArtikel($slug)
    {
        $desa = Desa::all()->first();
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $slider = Slider::all();
        
        return view('frontend.home.detail', compact('desa', 'slider', 'artikel', 'config', 'category'));
    }
}
