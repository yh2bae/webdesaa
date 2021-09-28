@if(user_akses2('slider',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Edit Slider</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Dusun</span></li>
@endsection

@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow " >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Edit Slider</h3>
                        <p>Kelola Slider</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('slider.index') }}" class="btn btn-success float-right mt-2">
                             Kembali
                        </a>  
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2" style="background: #f7fafc">
            <div class="widget-one">
                <form action="{{ route('slider.update', $slider) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input id="title" type="text" name="title" value="{{ old('title', $slider->title) }}"
                            class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $slider->description) }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Slider</label>
                        <div>
                            <img id="imageview" src="{{ asset('upload/image/'.$slider->image) }}"
                                alt="Foto" width="200px" class="rounded">
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

                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-block">Simpan Slider</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js-internal')
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

        $(function () {

            $("#imgInp").change(function () {
                readURL(this);
            });
        
        });
    </script>
@endpush

@endif


