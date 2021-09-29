@if(user_akses2('struktur',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Struktur Desa</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('struktur.index') }}"><span>Struktur Desa</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Struktur Desa</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow ">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Tambah Struktur Desa
                        </h3>
                        <p>Kelola Struktur Desa</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('penduduk.index') }}" class="btn btn-success float-right mt-2">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2" style="background: #f7fafc">
            <div class="widget-one">

                <form action="{{ route('struktur.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        {{-- NIK --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="name"><strong>Nama Lengkap KTP</strong></label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Masukkan Nama...">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End NIK --}}

                        {{-- jabatan --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="position"><strong>Jabatan</strong></label>
                                <input id="position" type="text" name="position" value="{{ old('position') }}"
                                    class="form-control @error('position') is-invalid @enderror"
                                    placeholder="Masukkan Jabatan...">
                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End jabatan --}}

                        {{-- niap --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="niap"><strong>Niap</strong></label>
                                <input id="niap" type="number" name="niap" value="{{ old('niap') }}"
                                    class="form-control @error('niap') is-invalid @enderror"
                                    placeholder="Masukkan NIAP...">
                                @error('niap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End niap --}}

                        {{-- Tempat Lahir --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="tempat_lahir"><strong>Tempat Lahir</strong></label>
                                <input id="tempat_lahir" type="text" name="tempat_lahir"
                                    value="{{ old('tempat_lahir') }}"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    placeholder="Masukkan Tempat Lahir...">
                                @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Tempat Lahir --}}

                        {{-- Tanggal Lahir --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label>
                                <input id="tanggal_lahir" type="text" name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="form-control flatpickr flatpickr-input active @error('tanggal_lahir') is-invalid @enderror"
                                    placeholder="Pilih Tanggal Lahir">
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Tanggal Lahir --}}

                        {{-- Agama --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="agama_id"><strong>Agama</strong></label>
                                <div>
                                    <select class="selectpicker @error('agama_id') is-invalid @enderror" name="agama_id"
                                        id="agama_id" data-width="100%">
                                        <option selected value="">Pilih Agama</option>
                                        @foreach ($agama as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('agama_id') == $item->id ? 'selected="true"' : ''  }}>
                                            {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('agama_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        {{-- End Agama --}}

                        {{-- Pendidikan --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="pendidikan_id"><strong>Pendidikan</strong></label>
                                <div>
                                    <select class="selectpicker @error('pendidikan_id') is-invalid @enderror"
                                        name="pendidikan_id" id="pendidikan_id" data-width="100%">
                                        <option selected value="">Pilih Pendidikan</option>
                                        @foreach ($pendidikan as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('pendidikan_id') == $item->id ? 'selected="true"' : ''  }}>
                                            {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        {{-- End Pendidikan --}}

                        {{-- Nomor Sk --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nomor_sk"><strong>Nomor SK</strong></label>
                                <input id="nomor_sk" type="number" name="nomor_sk" value="{{ old('nomor_sk') }}"
                                    class="form-control @error('nomor_sk') is-invalid @enderror"
                                    placeholder="Masukkan Nama...">
                                @error('nomor_sk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nomor Sk --}}

                        {{-- Tanggal SK --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="tanggal_sk"><strong>Tanggal SK</strong></label>
                                <input id="tanggal_sk" type="text" name="tanggal_sk" value="{{ old('tanggal_sk') }}"
                                    class="form-control @error('tanggal_sk') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal SK...">
                                @error('tanggal_sk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Tanggal SK --}}

                        {{-- Tanggal SK --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="masa_jabatan"><strong>Masa Jabatan</strong></label>
                                <input id="masa_jabatan" type="number" name="masa_jabatan"
                                    value="{{ old('masa_jabatan') }}"
                                    class="form-control @error('masa_jabatan') is-invalid @enderror"
                                    placeholder="Masukkan Masa Jabatan...">
                                @error('masa_jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Tanggal SK --}}


                        {{-- Alamat--}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="address"><strong>Alamat</strong></label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                    id="address" placeholder="Masukkan Alamat ...">{{ old('address') }}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Alamat--}}

                        {{-- status --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="status"><strong>Status</strong></label>
                                <div>
                                    <select class="selectpicker @error('status') is-invalid @enderror" name="status"
                                        id="status" data-width="100%">
                                        <option selected value="">Pilih Status</option>
                                        <option value="1" {{ old('status') == 1 ? 'selected="true"' : ''  }}>Aktif
                                        </option>
                                        <option value="2" {{ old('status') == 2 ? 'selected="true"' : ''  }}>Tidak Aktif
                                        </option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        {{-- End status --}}

                        {{--  image --}}
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="image">IMAGE</label>
                                    <div>
                                        <img id="imageview" src="https://image.flaticon.com/icons/png/512/2/2409.png"
                                            alt="your image" width="100px" class="rounded">
                                    </div>
                                    <input type="file" id="imgInp" name="image"
                                        class="form-control-file mt-4 @error('image') is-invalid @enderror"
                                        accept="image/*">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        {{-- End image --}}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3" id="simpan">Simpan Data</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bootstrap-select/bootstrap-select.min.css') }}">
<link href="{{ asset('admin/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('js-internal')
<script src="{{ asset('admin/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/plugins/flatpickr/flatpickr.js') }}"></script>
@endpush

@push('js-external')
<script>
    $(function () {
        var f1 = flatpickr(document.getElementById('tanggal_lahir'));
    });
    $(function () {
        var f1 = flatpickr(document.getElementById('tanggal_sk'));
    });

</script>
@endpush

@endif
