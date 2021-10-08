@extends('frontend.layouts.base2')


@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Laporan Anggaran Desa {{ request('tahun') ? request('tahun') : date('Y') }}</h3>
        <hr width="50%">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left mb-3">
            <form id="form-tahun" action="{{ URL::current()}}" method="GET">
                <input type="hidden" name="jenis" value="{{ request('jenis') ? request('jenis') : "pendapatan"}}">
                <div class="d-flex">
                    <h6 class="mx-2 mt-2">Pilih Tahun:</h6> 
                    <input type="number" name="tahun" id="tahun" class="form-control" value="{{ request('tahun') ? request('tahun') : date('Y') }}" style="width: 100px; height:40px">
                </div>
                <img id="loading-tahun" src="{{ asset('admin/loading.gif') }}" alt="Loading" height="20px" style="display: none">
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-4">
                <thead>
                    <th class="text-white text-center" style="background-color: #1871bb;" colspan="3">Uraian</th>
                    <th class="text-white text-center" style="background-color: #1871bb;">Anggaran</th>
                    <th class="text-white text-center" style="background-color: #1871bb;">Realisasi</th>
                    <th class="text-white text-center" style="background-color: #1871bb;">Selisih</th>
                    <th class="text-white text-center" style="background-color: #1871bb;">Persentase</th>
                </thead>
                <tbody>
                    @foreach ($detail_jenis_anggaran->groupBy('jenis_anggaran_id') as $key => $jenis_anggaran)
                        @php
                            $anggaran_jenis = 0;
                            $realisasi_jenis = 0;
                            foreach ($jenis_anggaran as $kelompok_jenis_anggaran) {
                                foreach ($kelompok_jenis_anggaran->anggaran_realisasi as $value) {
                                    $tahun = request('tahun') ? request('tahun') : date('Y');
                                    if ($value->tahun == $tahun) {
                                        $anggaran_jenis += $value->nilai_anggaran;
                                        $realisasi_jenis += $value->nilai_realisasi;
                                    }
                                }
                            }
                        @endphp
                        <tr>
                            <th style="background-color: #7aa6c9; color:#fff;"  colspan="7">{{ $key }}. {{ $jenis_anggaran[0]->jenis_anggaran->nama }}</th>
                        </tr>
                        @foreach ($jenis_anggaran->groupBy('kelompok_jenis_anggaran_id') as $ke => $kelompok_jenis_anggaran)
                            @php
                                $kelompok_jenis = str_split($ke);
                                $kode_kelompok_jenis_anggaran = '';
                                $anggaran_kelompok = 0;
                                $realisasi_kelompok = 0;
                                foreach ($kelompok_jenis as $value) {
                                    $kode_kelompok_jenis_anggaran .= $value . ".";
                                }
                                foreach ($kelompok_jenis_anggaran as $detail_jenis) {
                                    foreach ($detail_jenis->anggaran_realisasi as $value) {
                                        $tahun = request('tahun') ? request('tahun') : date('Y');
                                        if ($value->tahun == $tahun) {
                                            $anggaran_kelompok += $value->nilai_anggaran;
                                            $realisasi_kelompok += $value->nilai_realisasi;
                                        }
                                    }
                                }
                            @endphp
                            <tr>
                                <th>{{ $kode_kelompok_jenis_anggaran }}</th>
                                <th colspan="2">{{ $kelompok_jenis_anggaran[0]->kelompok_jenis_anggaran->nama }}</th>
                                <th class="text-right">Rp. {{ substr(number_format($anggaran_kelompok, 2, ',', '.'),0,-3) }}</th>
                                <th class="text-right">Rp. {{ substr(number_format($realisasi_kelompok, 2, ',', '.'),0,-3) }}</th>
                                <th class="text-right">Rp. {{ substr(number_format($anggaran_kelompok - $realisasi_kelompok, 2, ',', '.'),0,-3) }}</th>
                                <th class="text-right">
                                    @php
                                        try {
                                            $persen = ($realisasi_kelompok/$anggaran_kelompok) * 100;
                                            echo number_format((float)$persen, 2, '.', '') . "%";
                                        } catch (\Throwable $th) {
                                            echo "-";
                                        }
                                    @endphp
                                </th>
                            </tr>
                            @foreach ($kelompok_jenis_anggaran as $detail)
                                @php
                                    $detail_jenis = str_split($detail->id);
                                    $kode_detail_jenis_anggaran = '';
                                    $anggaran = 0;
                                    $realisasi = 0;
                                    foreach ($detail_jenis as $value) {
                                        $kode_detail_jenis_anggaran .= $value . ".";
                                    }
                                    foreach ($detail->anggaran_realisasi as $value) {
                                        $tahun = request('tahun') ? request('tahun') : date('Y');
                                        if ($value->tahun == $tahun) {
                                            $anggaran += $value->nilai_anggaran;
                                            $realisasi += $value->nilai_realisasi;
                                        }
                                    }
                                @endphp
                                @if ($detail->jenis_anggaran_id != 5)
                                    <tr>
                                        <td></td>
                                        <th>{{ $kode_detail_jenis_anggaran }}</th>
                                        <th>{{ $detail->nama }}</th>
                                        <td class="text-right">Rp. {{ substr(number_format($anggaran, 2, ',', '.'),0,-3) }}</td>
                                        <td class="text-right">Rp. {{ substr(number_format($realisasi, 2, ',', '.'),0,-3) }}</td>
                                        <td class="text-right">Rp. {{ substr(number_format($anggaran - $realisasi, 2, ',', '.'),0,-3) }}</td>
                                        <td class="text-right">
                                            @php
                                                try {
                                                    $persen = ($realisasi/$anggaran) * 100 . "%";
                                                    echo number_format((float)$persen, 2, '.', '') . "%";
                                                } catch (\Throwable $th) {
                                                    echo "-";
                                                }
                                            @endphp
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                        @if ($key != 6)
                            <tr>
                                <td class="text-center text-uppercase text-white font-weight-bold" style="background-color: #56d3ba" colspan="3">Jumlah {{ $jenis_anggaran[0]->jenis_anggaran->nama }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($anggaran_jenis, 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($realisasi_jenis, 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($anggaran_jenis - $realisasi_jenis, 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">
                                    @php
                                        try {
                                            $persen = ($realisasi_jenis/$anggaran_jenis) * 100;
                                            echo number_format((float)$persen, 2, '.', '') . "%";
                                        } catch (\Throwable $th) {
                                            echo "-";
                                        }
                                    @endphp
                                </td>
                            </tr>
                        @endif
                        @if ($key == 5)
                            <tr>
                                <td class="text-center text-uppercase text-white font-weight-bold" style="background-color: #56d3ba"  colspan="3">SURPLUS / (DEFISIT)</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pendapatan_anggaran'] - $data['belanja_anggaran'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pendapatan_realisasi'] - $data['belanja_realisasi'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format(($data['pendapatan_anggaran'] - $data['belanja_anggaran']) - ($data['pendapatan_realisasi'] - $data['belanja_realisasi']), 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">
                                    @php
                                        try {
                                            $persen = (($data['pendapatan_realisasi'] - $data['belanja_realisasi'])/($data['pendapatan_anggaran'] - $data['belanja_anggaran'])) * 100;
                                            echo number_format((float)$persen, 2, '.', '') . "%";
                                        } catch (\Throwable $th) {
                                            echo "-";
                                        }
                                    @endphp
                                </td>
                            </tr>
                        @elseif($key == 6)
                            <tr>
                                <td class="text-center text-uppercase text-white font-weight-bold" style="background-color: #56d3ba" colspan="3">{{ $jenis_anggaran[0]->jenis_anggaran->nama }} Netto</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pembiayaan_netto_anggaran'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pembiayaan_netto_realisasi'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pembiayaan_netto_anggaran'] - $data['pembiayaan_netto_realisasi'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">
                                    @php
                                        try {
                                            $persen = ($data['pembiayaan_netto_realisasi']/$data['pembiayaan_netto_anggaran']) * 100;
                                            echo number_format((float)$persen, 2, '.', '') . "%";
                                        } catch (\Throwable $th) {
                                            echo "-";
                                        }
                                    @endphp
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-white font-weight-bold"  style="background-color: #56d3ba" colspan="3">SILPA/SiLPA TAHUN BERJALAN</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($anggaran_jenis, 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($data['pembiayaan_netto_realisasi'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">Rp. {{ substr(number_format($anggaran_jenis - $data['pembiayaan_netto_realisasi'], 2, ',', '.'),0,-3) }}</td>
                                <td class="text-right text-white font-weight-bold" style="background-color: #56d3ba">
                                    @php
                                        try {
                                            $persen = ($data['pembiayaan_netto_realisasi']/$anggaran_jenis) * 100;
                                            echo number_format((float)$persen, 2, '.', '') . "%";
                                        } catch (\Throwable $th) {
                                            echo "-";
                                        }
                                    @endphp
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection