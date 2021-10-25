@extends('frontend.layouts.base2')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Data Usia Penduduk Desa {{ $desa->nama_desa }}</h3>
        <hr>
        <div id="chart-usia"></div>

    </div>
</div>

@endsection

@push('js-internal')
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
<script src="{{ asset('frontend/umur.js') }}"></script>
@endpush