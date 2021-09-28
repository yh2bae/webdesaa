@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Anggaran Pendapatan</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Anggaran Pendapatan</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Anggaran Pendapatan</h3>
                        <p>Kelola Anggaran Pendapatan Belanja Desa</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        {{-- @if(user_akses2('penduduk',Session()->get('level'))->input ?? 0 =='1') --}}
                        <a href="{{ route('anggaran-realisasi.create') }}?jenis={{ request('jenis') }}&tahun={{ request('tahun') }}&page={{ request('page') }}" class="btn btn-primary float-right mt-2">+ Tambah APBDes</a>  
                        {{-- @endif    --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mt-4" style="background: #f7fafc">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left mb-3">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'pendapatan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=pendapatan&tahun={{ request('tahun') }}"><i class="fas fa-hand-holding-usd mr-2"></i>PENDAPATAN</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'belanja' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=belanja&tahun={{ request('tahun') }}"><i class="fas fa-shopping-cart mr-2"></i>BELANJA</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'pembiayaan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=pembiayaan&tahun={{ request('tahun') }}"><i class="fas fa-money-check-alt mr-2"></i>PEMBIAYAAN</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'laporan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=laporan&tahun={{ request('tahun') }}"><i class="fas fa-money-check-alt mr-2"></i>Laporan</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'grafik' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=grafik&tahun={{ request('tahun') }}"><i class="fas fa-chart-bar mr-2"></i>Grafik</a>
                            </li>
                        </ul>
                    </div>
                    <form id="form-tahun" action="{{ URL::current()}}" method="GET">
                        <input type="hidden" name="jenis" value="{{ request('jenis') ? request('jenis') : "pendapatan"}}">
                        Tahun: <input type="number" name="tahun" id="tahun" class="form-control" value="{{ request('tahun') ? request('tahun') : date('Y') }}" style="width: 100px; height:40px">
                        <img id="loading-tahun" src="{{ asset(Storage::url('loading.gif')) }}" alt="Loading" height="20px" style="display: none">
                    </form>
                </div>
                @include('admin.anggaran.grafik-apbdes')
            </div>
        </div>
    </div>
</div>
@endsection

@push('js-internal')
<script src="{{ asset('admin/apbdes.js') }}"></script>
@endpush
