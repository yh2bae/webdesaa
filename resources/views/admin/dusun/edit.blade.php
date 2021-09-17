@if(user_akses2('dusun',Session()->get('level'))->update ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Edit Dusun</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('dusun.index') }}"><span>Dusun</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Edit Dusun</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">

    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card shadow " >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Edit Dusun</h3>
                        <p>Kelola Dusun</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="{{ route('dusun.index') }}" class="btn btn-success float-right mt-2">
                             Kembali
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-4 layout-spacing">
        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">

                <form action="{{ route('dusun.update', $dusun) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="nama">Name Dusun</label>
                        <input id="nama" type="text" name="nama" value="{{ old('nama', $dusun->nama) }}"
                            class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12 my-3">
                            <button type="submit" class="btn btn-primary btn-block float-right px-4">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-8 col-lg-8 col-md-8 col-8 layout-spacing">
       
        <div class="widget widget-content-area br-4 mt-2">
            <div class="widget-one">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Detail Dusun</h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="#modal-tambah-detail-dusun" data-toggle="modal" class="btn btn-primary btn-sm float-right">+ Tambah</a>
                    </div>
                </div>

                <div class="table-responsive my-4">
                    <table class="table mb-4">
                      <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1
                            @endphp
                            @forelse ($dusun->detailDusun as $d)
                                <tr>
                                    <td class="text-center">{{ $i }}.</td>
                                    <td class="text-center">{{ $d->rw }}</td>
                                    <td class="text-center">{{ $d->rt }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apa kamu yakin ingin menghapus RT/RW {{ $d->rt }}/{{ $d->rw }} ?');"
                                            action="{{ route("detailDusun.destroy", $d) }}" method="POST">
                                            <a href="#modal-edit-detail-dusun" class="btn btn-sm btn-success edit"
                                                data-get="{{ route('detailDusun.show', $d) }}"
                                                data-action="{{ route('detailDusun.update', $d) }}"
                                                data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>




                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                                    class="far fa-trash-alt"></i>
                                            </button>
                                            @method('delete')
                                            @csrf()
                                        </form>
                                    </td>
                                </tr>
                            @php
                            $i++
                            @endphp
                             @empty
                             <tr>
                                 <td colspan="4" align="center">Data tidak tersedia</td>
                             </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Create --}}
<div class="modal fade" id="modal-tambah-detail-dusun" tabindex="-1" aria-labelledby="modal-tambah-detail-dusun"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Tambah Detail Dusun</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="form" data-redirect="{{ route('dusun.edit',$dusun) }}"
                    action="{{ route("detailDusun.store") }}" method="POST">
                    @csrf
                    <input type="hidden" name="dusun_id" value="{{ $dusun->id }}">

                    <div class="form-group">
                        <label class="form-control-label">RW</label>
                        <input type="text" class="form-control" name="rw" placeholder="Masukkan RW ...">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">RT</label>
                        <input type="text" class="form-control" name="rt" placeholder="Masukkan RT ...">
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
			            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Create --}}

{{-- Modal Edit --}}
<div class="modal fade" id="modal-edit-detail-dusun" tabindex="-1" aria-labelledby="modal-edit-detail-dusun"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Edit Detail Dusun</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="form form-edit" data-redirect="{{ route('dusun.edit',$dusun) }}" action="" method="POST">
                    @csrf @method('patch')
                    <input type="hidden" name="dusun_id" value="{{ $dusun->id }}">
                    <div class="form-group">
                        <label class="form-control-label">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw" placeholder="Masukkan RW ...">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt" placeholder="Masukkan RT ...">
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
			            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Edit --}}

@endsection

@push('css')
<link href="{{ asset('admin/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js-external')
<script>
    $(document).on('submit', '.form', function(event) {
        event.preventDefault();
        const form = this;
        const url = $(this).attr('action');
        const redirect = $(this).data('redirect');
        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(form),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function(result){
                $(form).find("button:submit").html('Simpan');
                $(form).find("button:submit").removeAttr('disabled');
                const toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em'
                });
                if (result.success) {
                    if (redirect) {
                        location.href = redirect;
                    }
                }

                toast({
                    type: 'success',
                    title: ' Data berhasil ditambah',
                    padding: '2em',
                })
                
               
            },
            error: function (response) {
                console.clear();
                $(form).find('button:submit').html('Simpan');
                $(form).find('button:submit').removeAttr('disabled');
                alertError();
                let focus = true;
                $.each(response.responseJSON.errors, function (i, e) {
                    $('#pesanError').append(`<li>`+e+`</li>`);
                    if (!$(form).find("[name='" + i + "']").hasClass('is-invalid')) {
                        $(form).find("[name='" + i + "']").addClass('is-invalid');
                        if (focus) {
                            $("[name='" + i + "']").focus();
                            focus = false;
                        }
                    }
                });
            }
        });
    });

    $(document).on('click', '.edit', function (event) {
        event.preventDefault();
        const btn = this;
        $(".form-edit").attr('action', $(this).data('action'));
        $.ajax({
            url: $(this).data('get'),
            method: 'get',
            beforeSend: function (){
                $(btn).attr('disabled','disabled');
            },
            success: function (response) {
                $(btn).html('<i class="far fa-edit"></i>');
                $(btn).removeAttr('disabled');
                $("#modal-edit-detail-dusun").modal('show');
                $("#rw").val(response.rw);
                $("#rt").val(response.rt);
            }
        });
    });
</script>
@endpush

@endif
