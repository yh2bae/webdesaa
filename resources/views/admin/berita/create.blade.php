@if(user_akses2('kategori',Session()->get('level'))->input ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Tambah Kategori Berita</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('berita.index') }}"><span>Kategori Berita</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Tambah Kategori Berita</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">

        <div class="card shadow ">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Tambah Dusun
                        </h3>
                        <p>Kelola Berita</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('berita.index') }}" class="btn btn-success float-right mt-2">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">

                <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-lg-12">

                            <div class="form-group">
                                <label for="title">JUDUL ARTIKEL</label>
                                <input id="title" type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_id">CATEEGORY ARTIKEL</label>
                                <select class="placeholder js-states form-control" name="kategori_id" id="kategori_id">
                                    <option>Choose Category...</option>
                                    @foreach ($kategori as $item)
                                    <option value=" {{ $item->id }} "> {{ $item->kategori_berita }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">ISI ARTIKEL</label>
                                <textarea id="kontenku" name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="4">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="image">IMAGE</label>
                                        <div>
                                            <img id="imageview"
                                                src="https://image.flaticon.com/icons/png/512/2/2409.png"
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
                            </div>

                            <div class="form-group">
                                <label for="publish">Publish Artikel</label>
                                <select class="placeholder js-states form-control" name="publish">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="writer">TANGGAL PUBLISH</label>
                                <input id="tanggal_publish" type="date" name="tanggal_publish" class="form-control"
                                    value="{{ old('tanggal_publish') }}">
                            </div>
                            <div class="form-group">
                                <label for="writer">Penulis Artikel</label>
                                <input id="writer" type="text" name="writer"
                                    class="form-control @error('writer') is-invalid @enderror"
                                    value="{{ old('writer') }}">
                                @error('writer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary px-5 float-right btn-sm">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@push('css')
<link href="{{ asset('admin/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/jquery.fancybox.css') }}">
@endpush

@push('js-external')
<script src="{{ asset('admin/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.fancybox.js') }}"></script>
@endpush

@push('js-external')
<script>
    $(function () {
        $("#kontenku").each(function() {
            $(this).removeAttr("id");
            $(this).attr("id", "kontenku");
            CKEDITOR.replace('kontenku', {
                'extraPlugins': 'imgbrowse', 
                'filebrowserImageBrowseUrl': '{{ asset('vendor/ckeditor/plugins/imgbrowse/imgbrowse.html') }}',
                'filebrowserImageUploadUrl': '{{ route('upload', ['_token' => csrf_token() ])}}',
            });

        });
    });

    function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#imageView').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }

          $("#imageInput").change(function () {
              readURL(this);
    });
    

</script>
@endpush

@endif
