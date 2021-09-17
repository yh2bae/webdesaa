@if(user_akses2('dusun',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Dusun</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('dusun.index') }}"><span>Dusun</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Dusun</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow " >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Tambah Dusun</h3>
                        <p>Kelola Dusun</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('dusun.index') }}" class="btn btn-success float-right mt-2">
                             Kembali
                        </a>  
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">

                <form action="{{ route('dusun.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Name Dusun</label>
                        <input id="nama" type="text" name="nama" value="{{ old('nama') }}"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan nama dusun...">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-sm float-right px-4">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@endif
