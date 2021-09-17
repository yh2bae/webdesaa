<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailDusun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dusun;

class DetailDusunController extends Controller
{
    public function index(Request $request)
    {
        // if(Session()->get('username')=="") {
        //     return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        // }

        $detailDusun = DetailDusun::where('dusun_id', $request->id)->get();
        return response()->json($detailDusun);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'rw'  => 'required|string|max:3',
            'rt'  => 'required|string|max:3',
            'dusun_id'  => 'required|numeric',
        ]);

        $detailDusun = DetailDusun::create($data);

        return response()->json([
            'success'   => true,
            'message'   => 'Detail dusun berhasil ditambahkan',
            'data'      => $detailDusun
        ]);
    }

    public function show(DetailDusun $detailDusun)
    {
        return response()->json($detailDusun);
    }

    public function update(Request $request, DetailDusun $detailDusun)
    {
        $data = $request->validate([
            'rw'  => 'required|string|max:3',
            'rt'  => 'required|string|max:3',
        ]);

        $detailDusun->update($data);
        return response()->json([
            'success'   => true,
            'message'   => 'Detail dusun berhasil diperbarui',
            'data'      => $detailDusun
        ]);
    }

    public function destroy(DetailDusun $detailDusun)
    {
        $detailDusun->delete();
        return redirect()->back()->with('success', 'Detail dusun berhasil dihapus');
    }
}
