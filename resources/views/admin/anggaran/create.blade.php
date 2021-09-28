@if(user_akses2('anggaran',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Anggaran Pendapatan Belanja Desa</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('anggaran-realisasi.index') }}?jenis={{ request('jenis') }}&tahun={{ request('tahun') }}&page={{ request('page') }}"><span>APBDes</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Anggaran Pendapatan Belanja Desa</span></li>
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow " >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Tambah Anggaran Pendapatan Belanja Desa</h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('anggaran-realisasi.index') }}?jenis={{ request('jenis') }}&tahun={{ request('tahun') }}&page={{ request('page') }}" class="btn btn-success float-right ">
                             Kembali
                        </a>  
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">
                <form action="{{ route('anggaran-realisasi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col md-2 col-lg-2">
                            <div class="form-group">
                                <label for="tahun"><strong>Tahun</strong></label>
                                <input type="number" onkeypress="return hanyaAngka(event);" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" placeholder="Masukkan Tahun ..." value="{{ old('tahun', request('tahun') ? request('tahun') : date('Y')) }}">
                                @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="jenis_anggaran"><strong>Jenis Anggaran</strong></label>
                                <div>
                                    <select
                                        class="selectpicker form-control @error('jenis_anggaran') is-invalid @enderror"
                                        name="jenis_anggaran" id="jenis_anggaran">

                                        <option selected disabled value="">Pilih Jenis Anggaran</option>

                                        @foreach ($jenis_anggaran as $item)
                                        @php
                                        $jenis = '';
                                        if (request('jenis') == 'pendapatan') {
                                        $jenis = 4;
                                        } elseif (request('jenis') == 'belanja') {
                                        $jenis = 5;
                                        } elseif (request('jenis') == 'pembiayaan') {
                                        $jenis = 6;
                                        }
                                        @endphp
                                        <option value="{{ $item->id }}"
                                            {{ old('jenis_anggaran'. $jenis) == $item->id ? 'selected' : '' }}>
                                            {{ $item->id }}. {{ $item->nama }}</option>
                                        @endforeach

                                    </select>

                                    @error('jenis_anggaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"><strong>Detail Jenis Anggaran</strong></label>
                                <select class=" form-control @error('detail_jenis_anggaran_id') is-invalid @enderror" name="detail_jenis_anggaran_id" id="detail_jenis_anggaran_id" value="{{ old('detail_jenis_anggaran_id') }}">
                                    <option value="" selected disabled>Pilih Detail Jenis Anggaran</option>
                                </select>

                                @error('detail_jenis_anggaran_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"><strong>Nilai Anggaran</strong></label>
                                <input type="number" onkeypress="return hanyaAngka(event);" class="form-control @error('nilai_anggaran') is-invalid @enderror" name="nilai_anggaran" id="nilai_anggaran" placeholder="Masukkan Nilai Anggaran ..." value="{{ old('nilai_anggaran') }}">
                                @error('nilai_anggaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"><strong>Nilai Realisasi</strong></label>
                                <input type="number" onkeypress="return hanyaAngka(event);" class="form-control @error('nilai_realisasi') is-invalid @enderror" name="nilai_realisasi" id="nilai_realisasi" placeholder="Masukkan Nilai Realisasi ..." value="{{ old('nilai_realisasi') }}">
                                @error('nilai_realisasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label class="form-control-label"><strong>Keterangan Lainnya</strong></label>
                            <textarea class="form-control @error('keterangan_lainnya') is-invalid @enderror" name="keterangan_lainnya" id="keterangan_lainnya" placeholder="Masukkan Keterangan Lainnya ...">{{ old('keterangan_lainnya') }}</textarea>
                            @error('keterangan_lainnya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        

                        <div class="col-md-12 col-lg-12 ">
                            <button type="submit" class="btn btn-primary btn-block float-right px-4">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bootstrap-select/bootstrap-select.min.css') }}">
@endpush

@push('js-external')
<script src="{{ asset('admin/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
@endpush

@push('js-internal')
<script>
    $(document).ready(function () {
        if ($("#jenis_anggaran") != "") {
            $.getJSON(baseURL + "/admin-panel/detail-jenis-anggaran/" + $("#jenis_anggaran").val(), function (response) {
                $("#detail_jenis_anggaran_id").html(`<option value="" selected disabled>Pilih Detail Jenis Anggaran</option>`);
                $.each(response, function(key, item) {
                    if (!item.nama) {
                        $.getJSON(baseURL + "/admin-panel/kelompok-jenis-anggaran/" + item.kelompok_jenis_anggaran_id, res => {
                            $("#detail_jenis_anggaran_id").append(`<option value="${item.id}">${res.nama}</option>`);
                        });
                    } else {
                        let id = item.id;
                        id = id.toString();
                        let kode_rincian_split = id.split('');
                        let kode = '';
                        kode_rincian_split.forEach(element => {
                            kode += element + ".";
                        });
                        $("#detail_jenis_anggaran_id").append(`<option value="${item.id}">${kode} ${item.nama}</option>`);
                    }
                    $("#detail_jenis_anggaran_id").val($("#detail_jenis_anggaran_id").attr('value'));
                });
            });
        }

        $('#jenis_anggaran').change(function () {
            $("#detail_jenis_anggaran_id").html(`<option value="" selected disabled>Loading ...</option>`);
            $.getJSON(baseURL + "/admin-panel/detail-jenis-anggaran/" + $(this).val(), function (response) {
                $("#detail_jenis_anggaran_id").html(`<option value="" selected disabled>Pilih Detail Jenis Anggaran</option>`);
                $.each(response, function(key, item) {
                    if (!item.nama) {
                        $.getJSON(baseURL + "/admin-panel/kelompok-jenis-anggaran/" + item.kelompok_jenis_anggaran_id, res => {
                            $("#detail_jenis_anggaran_id").append(`<option value="${item.id}">${res.nama}</option>`);
                        });
                    } else {
                        let id = item.id;
                        id = id.toString();
                        let kode_rincian_split = id.split('');
                        let kode = '';
                        kode_rincian_split.forEach(element => {
                            kode += element + ".";
                        });
                        $("#detail_jenis_anggaran_id").append(`<option value="${item.id}">${kode} ${item.nama}</option>`);
                    }
                });
            });
        });
    });
</script>
@endpush

@endif

