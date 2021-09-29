<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\KepalaDesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KepalaDesaController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $kepala_desa = KepalaDesa::latest()->get();

        return view('admin.kades.index', compact('desa', 'kepala_desa'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.kades.create', compact('desa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'masa_jabatan' => 'required',
            'keterangan' => 'required',
        ]);

        KepalaDesa::create([
            'nama' => $request->nama,
            'masa_jabatan' => $request->masa_jabatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('kepala-desa.index')->with(['success', 'Kepala Desa Berhasil ditambah']);
    }

    public function edit($id)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $kepala_desa = KepalaDesa::findOrFail($id);

        return view('admin.kades.edit', compact('desa', 'kepala_desa'));
    }

    public function update(Request $request, KepalaDesa $kepalaDesa)
    {
        $request->validate([
            'nama' => 'required',
            'masa_jabatan' => 'required',
            'keterangan' => 'required',
        ]);

        $kepalaDesa->update([
            'nama' => $request->nama,
            'masa_jabatan' => $request->masa_jabatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('kepala-desa.index')->with(['success', 'Kepala Desa Berhasil diupdate']);
        
    }

    public function destroy(KepalaDesa $kepalaDesa)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $kepalaDesa->delete();

        return redirect()->back()->with('success', 'Kepala Desa berhasil dihapus');
    }
}
