@if(user_akses2('kategori_berita',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Kategori Berita</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('kategori.index') }}"><span>Kategori Berita</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Kategori Berita</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow ">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Edit Kategori Berita
                        </h3>
                        <p>Kelola Kategori Berita</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('kategori.index') }}" class="btn btn-success float-right mt-2">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">

                <form action="{{ route('kategori.update', $kategori) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="nama">Nama Kategori Berita</label>
                        <input id="kategori_berita" type="text" name="kategori_berita"
                            value="{{ old('kategori_berita', $kategori->kategori_berita) }}"
                            class="form-control @error('kategori_berita') is-invalid @enderror"
                            placeholder="Ubah Nama Kategori Berita...">
                        @error('kategori_berita')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-sm float-right px-4">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@endif
