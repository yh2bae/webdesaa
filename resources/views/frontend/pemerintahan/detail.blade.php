@extends('frontend.layouts.base2')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Informasi Detail Pemerintahan</h3>
        <hr width="50%">
        <div class="row">
            <div class="col-md-3 col-lg-3 text-center mb-2">
                @if ($struktur->image == '')
                <img src="{{ asset('upload/strukturdesa/noavatar.png') }}" width="200px" class="rounded" height="200px"
                    alt="image">
                @else
                <img src="{{ asset('upload/strukturdesa/'. $struktur->image) }}" width="200px" class="rounded"
                    height="200px" alt="image">
                @endif
            </div>
            <div class="col-md-9 col-lg-9">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="label-pemerintah">Nama</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->name }}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Jabatan</td>
                            <td width="2%">:</td>
                            <td width="60%" style="text-transform: uppercase">{{ $struktur->position }}</td>
                        </tr>

                        <tr>
                            <td class="label-pemerintah">NIAP</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->niap ? $struktur->niap : '-' }}</td>
                        </tr>

                        <tr>
                            <td class="label-pemerintah">Tempat, Tanggal Lahir</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->tempat_lahir }}, {{ date('d F Y',strtotime($struktur->tanggal_lahir)) }}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Agama</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->agama->nama }}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Pendidikan Terakhir</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->pendidikan ? $struktur->pendidikan->nama : '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Nomor SK</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->nomor_sk ? $struktur->nomor_sk : '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Tanggal SK</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->tanggal_sk ? $struktur->tanggal_sk : '-'}}</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Masa Jabatan</td>
                            <td width="2%">:</td>
                            <td width="60%">{{ $struktur->masa_jabatan }} Tahun</td>
                        </tr>
                        <tr>
                            <td class="label-pemerintah">Status</td>
                            <td width="2%">:</td>
                            <td width="60%" title="">{{ $struktur->status == 1 ? "Aktif" : "Tidak Aktif" }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection