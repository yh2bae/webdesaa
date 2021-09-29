<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Configuration;
use App\Models\Desa;
use App\Models\Kategori;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeDesaController extends Controller
{
    public function index()
    {
       $desa = Desa::all()->first();
       $slider = Slider::all();
       $artikel = Artikel::orderBy('id' , 'ASC')->limit('5')->get();
       $config = Configuration::all()->first();
       $category = Kategori::all();

       return view('frontend.home.index',[
           'slider' => $slider,
           'artikel' => $artikel,
           'config' => $config,
           'category' => $category,
           'desa' => $desa
       ]);
    }
}
