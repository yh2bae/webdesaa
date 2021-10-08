@if(user_akses2('config',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Configurasi</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Profile Desa</span></li>
@endsection


@section('content')
<div class="row layout-spacing">

    <div class="col-md-12 col-lg-12">
        <form action="{{ route('configuration.update', $config->id) }}" method="post">
            @method('PUT')
            @csrf

            <div class="card shadow mt-2" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Configurasi</h3>
                            <p>Kelola Configurasi</p>
                        </div>
                    </div>
                </div>
            </div>

            

            
            <div class="layout-spacing mt-3">
                <div class="widget-content widget-content-area">

                    <div class="form-group my-3">
                        <label for="description">Deskripsi Desa</label>
                        <textarea name="description" id="kontenku" class="form-control @error('description') is-invalid @enderror">{{ $config->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  layout-top-spacing">

                            <div class="form-group my-3">
                                <label for="email">Email</label>
                                <input id="email" type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $config->email }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="phone">Nomor Telfon</label>
                                <input id="phone" type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ $config->phone }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="whatsapp">Nomor Whatsapp</label>
                                <input id="whatsapp" type="text" name="whatsapp"
                                    class="form-control @error('whatsapp') is-invalid @enderror"
                                    value="{{ old('whatsapp'). $config->whatsapp }}">
                                @error('whatsapp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mt-5">
                                <h4><strong>Social Media</strong></h4>
                            </div>
                            <hr>

                            <div class="form-group my-3">
                                <label for="facebook">Facebook</label>
                                <input id="facebook" type="url" name="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ $config->facebook }}">
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" type="url" name="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ $config->instagram }}">
                                @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="twitter">Twitter</label>
                                <input id="twitter" type="url" name="twitter"
                                    class="form-control @error('twitter') is-invalid @enderror"
                                    value="{{ $config->twitter }}">
                                @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group my-3">
                                <label for="youtube">Youtube</label>
                                <input id="youtube" type="url" name="youtube"
                                    class="form-control @error('youtube') is-invalid @enderror"
                                    value="{{ $config->youtube }}">
                                @error('youtube')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  layout-top-spacing">

                            <div class="form-group my-3">
                                <label for="keyword">Modul SEO (Search Engine Optimization)</label>
                                <textarea name="keywords" id="keywords"
                                    class="form-control @error('keyword') is-invalid @enderror">{{ $config->keywords }}</textarea>
                                @error('keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group  my-3">
                                <label for="google_maps">GOOGLE MAPS</label>
                                <div class="maps mb-2">
                                    <div class="rounded"> {!! $config->google_maps !!}</div>
                                </div>
                                <textarea name="google_maps"
                                    class="form-control @error('google_maps') is-invalid @enderror"
                                    rows="5">{{ $config->google_maps }}</textarea>
                                @error('google_maps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    
    </div>
</div>
@endsection

@push('css')
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('js-internal')
    <script>
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