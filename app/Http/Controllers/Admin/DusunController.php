<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Dusun;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $dusun = Dusun::latest()->get();

        return view('admin.dusun.index', compact('desa','dusun'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.dusun.create', compact('desa'));
    }

    public function store(Request $request)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $request->validate([
            'nama' => 'required|max:16|string'
        ]);

        $dusun = Dusun::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('dusun.edit', $dusun)->with(['success' => 'Dusun Berhasil dibuat']);
    }

    public function edit(Dusun $dusun)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        
        return view('admin.dusun.edit', compact('desa', 'dusun'));
    }

    public function update(Request $request, Dusun $dusun)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }
        $data =  $request->validate([
            'nama' => 'required|max:16|string'
        ]);

        $dusun->update($data);

        return redirect()->back()->with(['success' => 'Dusun Berhasil diubah']);
    }

    public function destroy(Dusun $dusun)
    {
        $dusun->delete();

        return redirect()->route('dusun.index')->with(['success' => 'Dusun Berhasil dihapus']);
    }
}
