@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Dashboard</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
@endsection

@section('content')

<div class="row my-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        
       
        <div class="row my-2">
            <div class="col-md-3 col-lg-3">
                <div class="card shadow" style="background: #3b3f5c">
                    <div class="card-body">
                       <div class="icon-svg1">
                           <svg style="color: #3b3f5c" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                               stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                               <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                               <circle cx="12" cy="7" r="4"></circle>
                           </svg>
                       </div>

                        <h5
                            style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                            {{ $totalPenduduk->where('status_hubungan_dalam_keluarga_id',2)->count() }}</h5>
                        <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Kepala Keluarga</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card shadow" style="background: #2196f3">
                    <div class="card-body">
                        <div class="icon-svg1" style="background: #f9f9fa">
                            <svg style="color: #2196f3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h5
                            style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                            {{ $totalPenduduk->count() }}</h5>
                        <p class="card-text" style="color: #fff; font-weight:500;">Total Penduduk</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card shadow" style="background: #1abc9c">
                    <div class="card-body">
                        <div class="icon-svg1" style="background: #f9f9fa">
                            <svg style="color: #1abc9c" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h5
                            style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                            {{ $totalPenduduk->where('jenis_kelamin',1)->count() }}</h5>
                        <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Laki - Laki</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card shadow" style="background: #d32d7a">
                    <div class="card-body">
                        <div class="icon-svg1" style="background: #f9f9fa">
                            <svg style="color: #d32d7a" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h5
                            style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                            {{ $totalPenduduk->where('jenis_kelamin',2)->count() }}</h5>
                        <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Perempuan</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row mt-4">
            @include('admin.dashboard.statistik')
        </div>

        

    </div>
</div>


<style>
    .icon-svg1{
        background: #f9f9fa; 
        margin-bottom:20px;
        display:inline-block; 
        padding:12px; 
        border-radius:50%;
    }
</style>
@endsection

@push('js-internal')
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
<script src="{{ asset('admin/statistik.js') }}"></script>
@endpush

