@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Edit User</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Edit User</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="widget widget-content-area br-4">
            <h4><strong>Edit User {{ $user->name }}</strong></h4>
            <div class="widget-one">

                <form action="{{ route('user.update', Crypt::encryptString($user->id)) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="text" name="email" value="{{ old('email', $user->email) }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" name="username" value="{{ old('username', $user->username) }}"
                                    class="form-control @error('username') is-invalid @enderror">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="mb-2">
                                    <span class="badge badge-warning ">Jika Tidak ingin mengubah password, Tidak Perluh diisi!</span>
                                </div>
                                <input id="password" type="password" name="password"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="level">Hak Akses</label>
                                <select class="placeholder js-states form-control" name="level" id="level">
                                    @foreach ($roles as $item)
                                    @if ($item->id_role == $user->level)
                                    <option value={{ $item->id_role }} selected='selected'> {{ $item->name_role }} </option>
                                    @else
                                    <option value=" {{ $item->id_role }} "> {{ $item->name_role }} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="avatar">Upload Foto</label>
                                <div>
                                    <img id="imageview" src="{{ asset('upload/user/'. $user->avatar) }}"
                                        alt="Foto" width="100px" class="rounded">
                                </div>
                                <input type="file" id="imgInp" name="avatar"
                                    class="form-control-file mt-4 @error('avatar') is-invalid @enderror"
                                    accept="avatar/*">
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-sm float-right px-4">Simpan</button>
                            <a href="{{ route('user.index') }}" class="btn btn-success btn-sm float-right mr-2 px-4">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endpush

@push('js-internal')
<script src="{{ asset('admin/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/custom-select2.js') }}"></script>
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

    $(function () {

    $("#imgInp").change(function () {
        readURL(this);
    });

    $(".placeholder").select2({
        placeholder: "Make a Selection",
        allowClear: true
    });
    });

</script>
@endpush