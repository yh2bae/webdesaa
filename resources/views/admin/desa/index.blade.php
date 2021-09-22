@if(user_akses2('desa',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Profile</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Profile Desa</span></li>
@endsection

@section('content')
<div class="row layout-spacing">

   <div class="col-md-12 col-lg-12">
    <form action="{{ route('desa.update', $desa->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="card shadow mt-2" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Profil Desa</h3>
                        <p>Kelola Informasi Profil Desa</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12  layout-top-spacing">

                <div class="layout-spacing ">
                    <div class="widget-content widget-content-area">
                       
                        <div class="form-group my-3">
                            <label for="namadesa">Nama Desa</label>
                            <input id="nama_desa" type="text" name="nama_desa"
                                class="form-control @error('nama_desa') is-invalid @enderror"
                                value="{{ $desa->nama_desa }}">
                            @error('nama_desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label for="namakecamatan">Nama Kecamatan</label>
                            <input id="nama_kecamatan" type="text" name="nama_kecamatan"
                                class="form-control @error('nama_kecamatan') is-invalid @enderror"
                                value="{{ $desa->nama_kecamatan }}">
                            @error('nama_kecamatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label for="namakabupaten">Nama Kabupaten</label>
                            <input id="nama_kabupaten" type="text" name="nama_kabupaten"
                                class="form-control @error('nama_kabupaten') is-invalid @enderror"
                                value="{{ $desa->nama_kabupaten }}">
                            @error('nama_kabupaten')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
        
                        <div class="form-group my-3">
                            <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"  rows="3">{{ $desa->alamat }}</textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
        
                        {{-- <div class="form-group my-3">
                            <label for="namakepaladesa">Nama Kepala Desa</label>
                            <input id="nama_kepala_desa" type="text" name="nama_kepala_desa"
                                class="form-control @error('nama_kepala_desa') is-invalid @enderror"
                                value="{{ $desa->nama_kepala_desa }}">
                            @error('nama_kepala_desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
        
                        <div class="form-group my-3">
                            <label for="alamat">Alamat Kepala Desa</label>
                                <textarea name="alamat_kepala_desa" id="alamat_kepala_desa" class="form-control @error('alamat_kepala_desa') is-invalid @enderror"  rows="3">{{ $desa->alamat_kepala_desa }}</textarea>
                            @error('alamat_kepala_desa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}

                        <div class="form-group my-3">
                            <label for="sejarah">Serajah Desa</label>
                            <textarea name="sejarah" id="kontenku" class="form-control @error('sejarah') is-invalid @enderror">{{ $desa->sejarah }}</textarea>
                            @error('sejarah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
        
                    </div>
                </div>
        
            </div>
        
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="text-center user-info mb-5">
                            <a href="{{ asset('upload/desa/'.$desa->logo) }}" data-fancybox>
                            <img id="imageview" src="{{ asset('upload/desa/'.$desa->logo) }}" width="130px" height="130px" alt="logo">
                            </a>
                            <input type="file" id="imgInp" name="logo"
                            class="form-control-file mt-4 @error('logo') is-invalid @enderror" accept="image/*">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                            <hr>
                                
                            <p class="">Desa {{ $desa->nama_desa }}</p>
                            <span>Kec. {{ $desa->nama_kecamatan }}, Kab. {{ $desa->nama_kabupaten }} </span>
                        </div>  
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
            </div>
        </div>
        
    </form>
   </div>

</div>
@endsection

@push('css')
<link href="{{ asset('admin/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/jquery.fancybox.css') }}">
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('js-external')
<script src="{{ asset('admin/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.fancybox.js') }}"></script>
@endpush

@push('js-external')
    <script>
          function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#imageview').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }

          $("#imgInp").change(function () {
              readURL(this);
          });

          $(function () {
            $("#kontenku").each(function() {
                $(this).removeAttr("id");
                $(this).attr("id", "kontenku");
                CKEDITOR.replace('kontenku', {
                    'extraPlugins': 'imgbrowse', 
                    'filebrowserImageBrowseUrl': '{{ asset('admin/ckeditor/plugins/imgbrowse/imgbrowse.html') }}',
                    'filebrowserImageUploadUrl': '{{ route('upload', ['_token' => csrf_token() ])}}',
                });

            });
        });
    </script>
@endpush

@endif