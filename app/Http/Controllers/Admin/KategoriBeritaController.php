<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriBeritaController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }
        $desa = Desa::all()->first();
        
        $kategori = Kategori::latest()->get();

        return view('admin.kategori.index', compact('kategori', 'desa'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.kategori.create', compact('desa'));
    }

    public function store(Request $request)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $request->validate([
            'kategori_berita' => 'required|max:16|string'
        ]);

        $kategori = Kategori::create([
            'kategori_berita' => $request->kategori_berita
        ]);

        return redirect()->route('kategori.index', $kategori)->with(['success' => 'Kategori Berita Berhasil dibuat']);
    }

    public function edit(Kategori $kategori)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        
        return view('admin.kategori.edit', compact('desa', 'kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }
        $data =  $request->validate([
            'kategori_berita' => 'required|max:16|string'
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index',$kategori)->with(['success' => 'Kategori Berita Berhasil diubah']);
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Kategori Berita Berhasil dihapus']);
    }
}
