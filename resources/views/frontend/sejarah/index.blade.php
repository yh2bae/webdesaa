@extends('frontend.layouts.base2')


@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Sejarah Desa</h3>
        <hr width="50%">
        <div class="mt-5">
            <p>{!! $desa->sejarah !!}</p>
        </div>

        <h6 class="text-center my-4">Table Kepala Desa {{ $desa->nama_desa }}</h6>

        <table class="table table-bordered table-striped" width="100%">
            <thead>
                <tr>
                    <th class="text-center uppercase" width="5%">No.</th>
                    <th class="text-center uppercase">Nama</th>
                    <th class="text-center uppercase">Masa Jabatan</th>
                    <th class="text-center uppercase">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1
                @endphp
                @foreach ($kades as $kades )
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td style=" text-transform: uppercase">{{ $kades->nama }}</td>
                    <td class="text-center">{{ $kades->masa_jabatan }}</td>
                    <td>{{ $kades->keterangan }}</td>
                </tr>
                @php
                    $i++
                @endphp
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection