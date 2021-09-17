<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\Agama;
use App\Models\Darah;
use App\Models\Dusun;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\StatusPerkawinan;
use App\Http\Controllers\Controller;
use App\Http\Requests\PendudukRequest;
use App\Models\StatusHubunganDalamKeluarga;

class PendudukController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        $penduduk = Penduduk::latest()->get();

        return view('admin.penduduk.index', compact('desa','penduduk'));
    }

    public function create ()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $agama = Agama::all();
        $darah = Darah::all();
        $dusun = Dusun::all();
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $status_hubungan_dalam_keluarga = StatusHubunganDalamKeluarga::all();
        $status_perkawinan = StatusPerkawinan::all();

        return view('admin.penduduk.create', compact('desa','agama', 'darah', 'dusun', 'pekerjaan', 'pendidikan', 'status_hubungan_dalam_keluarga', 'status_perkawinan'));
    }

    public function store(PendudukRequest $request)
    {
        $data = $request->validated();
        Penduduk::create($data);

        return redirect()->route('penduduk.index')->with(['success' => 'Data Penduduk Berhasil ditambah']);
    }

    public function edit(Penduduk $penduduk)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $agama = Agama::all();
        $darah = Darah::all();
        $dusun = Dusun::all();
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $status_hubungan_dalam_keluarga = StatusHubunganDalamKeluarga::all();
        $status_perkawinan = StatusPerkawinan::all();

        return view('admin.penduduk.edit', compact('desa','agama', 'darah', 'dusun', 'pekerjaan', 'pendidikan', 'status_hubungan_dalam_keluarga', 'status_perkawinan', 'penduduk'));
    }

    public function update(PendudukRequest $request, Penduduk $penduduk)
    {
        $data = $request->validated();
        $penduduk->update($data);
        return redirect()->back()->with(['success' => 'Data Penduduk Berhasil diupdate']);
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->back()->with('success', 'Data Penduduk berhasil dihapus');
    }




}
