@if(user_akses2('roles',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Role</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('role.index') }}"><span>Role</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Role</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="widget widget-content-area br-4">
            <h4><strong>Tambah Role</strong></h4>
            <div class="widget-one">

                <form action="{{ route('role.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name_role">Name Role</label>
                        <input id="name_role" type="text" name="name_role" value="{{ old('name_role') }}"
                            class="form-control @error('name_role') is-invalid @enderror">
                        @error('name_role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-sm float-right px-4">Simpan</button>
                            <a href="{{ route('role.index') }}" class="btn btn-success btn-sm float-right mr-2 px-4">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@endif
