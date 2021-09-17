@if(user_akses2('penduduk',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Penduduk</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('dusun.index') }}"><span>Penduduk</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Penduduk</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow " >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Tambah Penduduk</h3>
                        <p>Kelola Penduduk</p>
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

                <form action="{{ route('penduduk.update', $penduduk) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">

                        {{-- NIK --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nik"><strong>NIK</strong></label>
                                <input id="nik" type="text" name="nik" value="{{ old('nik', $penduduk->nik) }}"
                                    class="form-control @error('nik') is-invalid @enderror" placeholder="Masukkan NIK...">
                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End NIK --}}

                        {{-- KK --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="kk"><strong>KK</strong></label>
                                <input id="kk" type="text" name="kk" value="{{ old('kk',$penduduk->kk) }}"
                                    class="form-control @error('kk') is-invalid @enderror" placeholder="Masukkan KK...">
                                @error('kk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End KK --}}

                        {{-- Nama --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nama"><strong>Nama</strong></label>
                                <input id="nama" type="text" name="nama" value="{{ old('nama', $penduduk->nama) }}"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama...">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nama --}}

                        {{-- Jenis Kelamin --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
                                <div>
                                    <select class="selectpicker @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" data-width="100%">
                                        <option selected value="">Pilih Jenis Kelamin</option>
                                        <option value="1" {{ old('jenis_kelamin', $penduduk->jenis_kelamin) == 1 ? 'selected="true"' : ''  }}>Laki-laki</option>
                                        <option value="2" {{ old('jenis_kelamin', $penduduk->jenis_kelamin) == 2 ? 'selected="true"' : ''  }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Jenis Kelamin --}}

                        {{-- Tempat Lahir --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="tempat_lahir"><strong>Tempat Lahir</strong></label>
                                <input id="tempat_lahir" type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $penduduk->tempat_lahir) }}"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Tempat Lahir...">
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
                                <input id="tanggal_lahir" type="text" name="tanggal_lahir" value="{{ old('tanggal_lahir', $penduduk->tanggal_lahir) }}" class="form-control flatpickr flatpickr-input active @error('tanggal_lahir') is-invalid @enderror" placeholder="Pilih Tanggal Lahir">
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Tanggal Lahir --}}

                        {{-- Golongan Darah --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="darah_id"><strong>Golongan Darah</strong></label>
                                <div>
                                    <select class="selectpicker @error('darah_id') is-invalid @enderror" name="darah_id" id="darah_id" data-width="100%" data-live-search="true" >
                                        <option selected value="">Pilih Golongan Darah</option>
                                        @foreach ($darah as $item)
                                            <option value="{{ $item->id }}" {{ old('darah_id', $penduduk->darah_id) == $item->id ? 'selected="true"' : ''  }}>{{ $item->golongan }}</option>
                                        @endforeach
                                    </select>
                                    @error('darah_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                        {{-- End Gologan Darah --}}

                        {{-- Agama --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="agama_id"><strong>Agama</strong></label>
                                <div>
                                    <select class="selectpicker @error('agama_id') is-invalid @enderror" name="agama_id" id="agama_id" data-width="100%">
                                        <option selected value="">Pilih Agama</option>
                                        @foreach ($agama as $item)
                                            <option value="{{ $item->id }}" {{ old('agama_id', $penduduk->agama_id) == $item->id ? 'selected="true"' : ''  }}>{{ $item->nama }}</option>
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
                                    <select class="selectpicker @error('pendidikan_id') is-invalid @enderror" name="pendidikan_id" id="pendidikan_id" data-width="100%">
                                        <option selected value="">Pilih Pendidikan</option>
                                        @foreach ($pendidikan as $item)
                                            <option value="{{ $item->id }}" {{ old('pendidikan_id', $penduduk->pendidikan_id) == $item->id ? 'selected="true"' : ''  }}>{{ $item->nama }}</option>
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

                        {{-- Pekerjaan --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="pekerjaan_id"><strong>Pekerjaan</strong></label>
                                <div>
                                    <select class="selectpicker @error('pekerjaan_id') is-invalid @enderror" name="pekerjaan_id" id="pekerjaan_id" data-width="100%">
                                        <option selected value="">Pilih Pekerjaan</option>
                                        @foreach ($pekerjaan as $item)
                                        <option value=" {{ $item->id }} " {{ old('pekerjaan_id', $penduduk->pekerjaan_id) == $item->id ? 'selected="true"' : ''  }}> {{ $item->nama }} </option>
                                        @endforeach
                                    </select>
                                    @error('pekerjaan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Pekerjaan --}}

                        {{-- Status Perkawinan --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="status_perkawinan_id"><strong>Status Perkawinan</strong></label>
                                <div>
                                    <select class="selectpicker @error('status_perkawinan_id') is-invalid @enderror" name="status_perkawinan_id" id="status_perkawinan_id" data-width="100%">
                                        <option selected value="">Pilih Status Perkawinan</option>
                                        @foreach ($status_perkawinan as $item)
                                        <option value=" {{ $item->id }} " {{ old('status_perkawinan_id', $penduduk->status_perkawinan_id) == $item->id ? 'selected="true"' : ''  }}> {{ $item->nama }} </option>
                                        @endforeach
                                    </select>
                                    @error('status_perkawinan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Status Perkawinan --}}

                        {{-- Status Keluarga --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="status_hubungan_dalam_keluarga_id"><strong>Status Hubungan Dalam Keluarga</strong></label>
                                <div>
                                    <select class="selectpicker @error('status_hubungan_dalam_keluarga_id') is-invalid @enderror" name="status_hubungan_dalam_keluarga_id" id="status_hubungan_dalam_keluarga_id" data-width="100%">
                                        <option selected value="">Pilih Status Hubungan Keluarga</option>
                                        @foreach ($status_hubungan_dalam_keluarga as $item)
                                        <option value=" {{ $item->id }} " {{ old('status_hubungan_dalam_keluarga_id', $penduduk->status_hubungan_dalam_keluarga_id) == $item->id ? 'selected="true"' : ''  }}> {{ $item->nama }} </option>
                                        @endforeach
                                    </select>
                                    @error('status_hubungan_dalam_keluarga_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Status Keluarga --}}

                        {{-- Kewarganegaraan --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="kewarganegaraan"><strong>Kewarganegaraan</strong></label>
                                <div>
                                    <select class="selectpicker @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" id="kewarganegaraan" data-width="100%">
                                        <option>Pilih Kewarganegaraan</option>
                                        <option selected value="">Pilih Kewarganegaraan</option>
                                        <option value="1" {{ old('kewarganegaraan', $penduduk->kewarganegaraan) == 1 ? 'selected' : ''  }}>WNI</option>
                                        <option value="2" {{ old('kewarganegaraan', $penduduk->kewarganegaraan) == 2 ? 'selected' : ''  }}>WNA</option>
                                        <option value="3" {{ old('kewarganegaraan', $penduduk->kewarganegaraan) == 3 ? 'selected' : ''  }}>Dua Kewarganegaraan</option>
                                    </select>
                                    @error('kewarganegaraan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Kewarganegaraan --}}

                        {{-- Nomor Pasport --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nomor_paspor"><strong>Nomor Pasport</strong></label>
                                <input id="nomor_paspor" type="text" name="nomor_paspor" value="{{ old('nomor_paspor', $penduduk->paspor) }}"
                                    class="form-control @error('nomor_paspor') is-invalid @enderror" placeholder="Masukkan Nomor Pasport...">
                                @error('nomor_paspor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nomor Pasport --}}

                        {{-- Nomor Nomor KITAS / KITAP --}}
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nomor_kitas_atau_kitap"><strong>Nomor KITAS / KITAP</strong></label>
                                <input id="nomor_kitas_atau_kitap" type="text" name="nomor_kitas_atau_kitap" value="{{ old('nomor_kitas_atau_kitap', $penduduk->nomor_kitas_atau_kitap) }}"
                                    class="form-control @error('nomor_kitas_atau_kitap') is-invalid @enderror" placeholder="Masukkan Nomor KITAS / KITAP...">
                                @error('nomor_kitas_atau_kitap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nomor Nomor KITAS / KITAP --}}

                        {{-- NIK AYAH --}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nik_ayah"><strong>NIK Ayah</strong></label>
                                <input id="nik_ayah" type="text" name="nik_ayah" value="{{ old('nik_ayah', $penduduk->nik_ayah) }}"
                                    class="form-control @error('nik_ayah') is-invalid @enderror" placeholder="Masukkan NIK Ayah...">
                                @error('nik_ayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End NIK AYAH --}}

                        {{-- Nama AYAH --}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nama_ayah"><strong>Nama Ayah</strong></label>
                                <input id="nama_ayah" type="text" name="nama_ayah" value="{{ old('nama_ayah', $penduduk->nama_ayah) }}"
                                    class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Masukkan Nama Ayah...">
                                @error('nama_ayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nama AYAH --}}

                        {{-- NIK IBU --}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nik_ibu"><strong>NIK Ibu</strong></label>
                                <input id="nik_ibu" type="text" name="nik_ibu" value="{{ old('nik_ibu', $penduduk->nik_ibu) }}"
                                    class="form-control @error('nik_ibu') is-invalid @enderror" placeholder="Masukkan NIK Ibu...">
                                @error('nik_ibu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End NIK IBU --}}

                        {{-- Nama Ibu --}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nama_ibu"><strong>Nama Ibu</strong></label>
                                <input id="nama_ibu" type="text" name="nama_ibu" value="{{ old('nama_ibu', $penduduk->nama_ibu) }}"
                                    class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Masukkan Nama Ibu...">
                                @error('nama_ibu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Nama Ibu --}}

                        {{-- Alamat--}}
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="alamat"><strong>Alamat</strong></label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Masukkan Alamat ...">{{ old('alamat', $penduduk->alamat) }}</textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End Alamat--}}

                        {{-- Dusun --}}
                        <div class="col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="dusun"><strong>Dusun</strong></label>
                                <div>
                                    <select class="selectpicker @error('dusun') is-invalid @enderror" name="dusun" id="dusun" data-width="100%">
                                        <option selected value="">Pilih Dusun</option>
                                        @foreach ($dusun as $item)
                                        <option value="{{ $item->id }}" {{ old('dusun', $penduduk->detailDusun ? $penduduk->detailDusun->dusun_id : "") == $item->id ? 'selected' : ''  }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('dusun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Dusun --}}

                        {{-- Dusun --}}
                        <div class="col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="detail_dusun_id"><strong>RT/RW</strong></label>
                                <div>
                                    <select class="form-control @error('detail_dusun_id') is-invalid @enderror" name="detail_dusun_id" id="detail_dusun_id"></select>
                                    @error('detail_dusun_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Dusun --}}


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

    $(document).ready(function() {
        if ($("#dusun").val() != "") {
            $.ajax({
                url: baseURL + '/admin-panel/detailDusun?id=' + $("#dusun").val(),
                method: 'get',
                beforeSend: function () {
                    $('#detail_dusun_id').html(`<option value="">Loading ...</option>`);
                },
                success: function (response) {
                    console.log('oke');
                    $('#detail_dusun_id').html(`<option value="">Pilih RT/RW</option>`);
                    $.each(response, function (i,e) {
                        $('#detail_dusun_id').append(`<option value="${e.id}">${e.rt}/${e.rw}</option>`);
                    });

                    $("#detail_dusun_id").val("{{ old('detail_dusun_id',$penduduk->detail_dusun_id) }}");
                }
            });
        } else {
            $('#detail_dusun_id').html(`<option value="">Pilih RT/RW</option>`);
        }

        $("#dusun").change(function () {
            $.ajax({
                url: baseURL + '/admin-panel/detailDusun?id=' + $(this).val(),
                method: 'get',
                beforeSend: function () {
                    $('#detail_dusun_id').html(`<option value="">Loading ...</option>`);
                },
                success: function (response) {
                    $('#detail_dusun_id').html(`<option value="">Pilih RT/RW</option>`);
                    $.each(response, function (i,e) {
                        $('#detail_dusun_id').append(`<option value="${e.id}">${e.rt}/${e.rw}</option>`);
                    });
                }
            });
        });

        
    });
    </script>
@endpush

@endif