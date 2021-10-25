<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;

class NewsController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $artikel = Artikel::where('publish', '1')->orderBy('id' , 'DESC')->paginate(5);

        return view('frontend.artikel.index', compact('desa', 'config', 'category', 'artikel'));
    }

    
    public function detailBerita($slug)
    {
        $desa = Desa::all()->first();
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        
        return view('frontend.artikel.detail', compact('desa', 'artikel', 'config', 'category'));
    }

    public function searchBerita(Request $request)
    {
        $desa = Desa::all()->first();
        $config = Configuration::all()->first();
        $category = Kategori::all();
        $keyword = $request->keyword;
        $artikel = Artikel::where('title', 'like', "%" . $keyword . "%")->paginate(5);
        return view('frontend.artikel.index', compact('desa', 'config', 'category', 'artikel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
