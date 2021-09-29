
@if(user_akses2('kepala-desa',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Kepala Desa Desa</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Kepala Desa</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Kepala Desa</h3>
                        <p>Kelola Kepala Desa</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('kepala-desa.index') }}" class="btn btn-success float-right mt-2">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area br-6 mt-2">
            <form action="{{ route('kepala-desa.update', $kepala_desa) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- NIK --}}
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="nama"><strong>Nama Lengkap</strong></label>
                            <input id="nama" type="text" name="nama" value="{{ old('nama', $kepala_desa->nama) }}"
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Masukkan Nama...">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- End NIK --}}

                    {{-- jabatan --}}
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="masa_jabatan"><strong>Masa Jabatan</strong></label>
                            <input id="masa_jabatan" type="text" name="masa_jabatan" value="{{ old('masa_jabatan', $kepala_desa->masa_jabatan) }}"
                                class="form-control @error('masa_jabatan') is-invalid @enderror"
                                placeholder="Masukkan Masa Jabatan...">
                            @error('masa_jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- End jabatan --}}

                    {{-- Keterangan --}}
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="keterangan"><strong>Keterangan</strong></label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                            id="keterangan" placeholder="Masukkan Keterangan ...">{{ old('keterangan', $kepala_desa->keterangan) }}</textarea>
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- End Keterangan --}}





                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3" id="simpan">Simpan Data</button>

            </form>
        </div>

    </div>
</div>
@endsection

@endif

