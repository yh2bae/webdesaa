<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\AnggaranRealisasi;
use App\Models\DetailJenisAnggaran;

class ApbdesController extends Controller
{
    public function index(Request $request)
    {
        $detail_jenis_anggaran = DetailJenisAnggaran::all();
        $desa = Desa::all()->first();
        $category = Kategori::all();
        $config = Configuration::all()->first();
        $data = $this->laporan($request);

        if (!$request->tahun || !$request->jenis) {
            return redirect('laporan-apbdes?jenis=laporan&tahun='.date('Y'));
        }

        if ($request->jenis == "laporan") {
            return view('frontend.laporan.index',compact('desa', 'config', 'category','detail_jenis_anggaran','data'));
        } else {
            return redirect('laporan-apbdes?jenis=laporan&tahun='.date('Y'));
        }

    }

    private function laporan($request)
    {
        $data['pendapatan_anggaran'] = 0; $data['pendapatan_realisasi'] = 0; $data['belanja_anggaran'] = 0; $data['belanja_realisasi'] = 0; $data['pembiayaan_anggaran'] = 0; $data['pembiayaan_realisasi'] = 0; $data['rincian'] = null;
        $data['penerimaan_biaya_anggaran'] = 0; $data['penerimaan_biaya_realisasi'] = 0; $data['pengeluaran_biaya_anggaran'] = 0; $data['pengeluaran_biaya_realisasi'] = 0;

        foreach (AnggaranRealisasi::whereTahun($request->tahun)->whereHas('detail_jenis_anggaran', function ($jenis) {$jenis->where('jenis_anggaran_id', 4);})->get() as $item) {
            $data['pendapatan_anggaran'] += $item->nilai_anggaran;
            $data['pendapatan_realisasi'] += $item->nilai_realisasi;
        }

        foreach (AnggaranRealisasi::whereTahun($request->tahun)->whereHas('detail_jenis_anggaran', function ($jenis) {$jenis->where('jenis_anggaran_id', 5);})->get() as $item) {
            $data['belanja_anggaran'] += $item->nilai_anggaran;
            $data['belanja_realisasi'] += $item->nilai_realisasi;
        }

        foreach (AnggaranRealisasi::whereTahun($request->tahun)->whereHas('detail_jenis_anggaran', function ($jenis) {$jenis->where('kelompok_jenis_anggaran_id', 61);})->get() as $item) {
            $data['penerimaan_biaya_anggaran'] += $item->nilai_anggaran;
            $data['penerimaan_biaya_realisasi'] += $item->nilai_realisasi;
        }

        foreach (AnggaranRealisasi::whereTahun($request->tahun)->whereHas('detail_jenis_anggaran', function ($jenis) {$jenis->where('kelompok_jenis_anggaran_id', 62);})->get() as $item) {
            $data['pengeluaran_biaya_anggaran'] += $item->nilai_anggaran;
            $data['pengeluaran_biaya_realisasi'] += $item->nilai_realisasi;
        }

        $data['pembiayaan_netto_anggaran'] = $data['penerimaan_biaya_anggaran'] - $data['pengeluaran_biaya_anggaran'];
        $data['pembiayaan_netto_realisasi'] = $data['penerimaan_biaya_realisasi'] - $data['pengeluaran_biaya_realisasi'];

        return $data;
    }
}
