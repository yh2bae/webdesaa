<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesaController extends Controller
{
    public function index()
    {
        $desa = Desa::all()->first();

        return view('admin.desa.index', compact('desa'));
    }

    public function update(Request $request, Desa $desa)
    {
        $request->validate([
            'nama_desa' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_kecamatan' => 'required',
            'nama_kabupaten' => 'required',
            'alamat' => 'required',
            'sejarah' => 'required',
            'visi_misi' => 'required',
            // 'nama_kepala_desa' => 'required',
            // 'alamat_kepala_desa' => 'required',

        ]);

        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $desa['logo'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/desa');
            $img->move($filePath, $desa['logo']);
        } else {
            $img = $desa->logo;
        }

        $desa->update([
            'nama_desa' => $request->nama_desa,
            'nama_kecamatan' => $request->nama_kecamatan,
            'nama_kabupaten' => $request->nama_kabupaten,
            'alamat' => $request->alamat,
            'sejarah' => $request->sejarah,
            'visi_misi' => $request->visi_misi,
            // 'nama_kepala_desa' => $request->nama_kepala_desa,
            // 'alamat_kepala_desa' => $request->alamat_kepala_desa,
            'logo' => $desa['logo'],
        ]);

        return redirect()->route('desa.index')->with(['success' => 'Profile Desa Berhasil diubah']);;
    }
}
