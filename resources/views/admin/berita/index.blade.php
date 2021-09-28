@if(user_akses2('berita',Session()->get('level'))->view ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} -  Berita</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span> Berita</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-2" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Dusun</h3>
                        <p>Kelola  Berita</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        @if(user_akses2('berita',Session()->get('level'))->input ?? 0 =='1')
                        <a href="{{ route('artikel.create') }}" class="btn btn-primary float-right mt-2">+ Tambah Berita</a>  
                        @endif   
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area br-6 mt-2">
            <table id="dtable" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="no-content dt-no-sorting">No.</th>
                        <th>Judul Berita</th>
                        <th>Slug</th>
                        <th>Kategori Berita</th>
                        <th>Image</th>
                        <th>Penulis</th>
                        <th>Publish</th>

                        @if(user_akses2('berita',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('berita
                        ',Session()->get('level'))->delete ?? 0 =='1')
                        <th class="no-content dt-no-sorting text-center">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($artikel as $b)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->slug }}</td>
                        <td>{{ $b->kategori->kategori_berita }}</td>
                        <td class="text-center"><img src="{{ asset('upload/berita/'. $b->image) }}" class="rounded" width="250px"  alt="image"></td>
                        <td>{{ $b->writer }}</td>
                        <td>{{ $b->publish }}</td>

                        @if(user_akses2('berita',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('berita',Session()->get('level'))->delete ?? 0 =='1')
                        <td class="text-center">
                            <form onsubmit="return confirm('Apa kamu yakin ingin menghapus  berita {{ $b->title }} ?');"
                                action="{{ route('artikel.destroy', $b->id) }}"
                                method="POST">
                                

                                @if(user_akses2('berita',Session()->get('level'))->update ?? 0 =='1')
                                <a href="{{ route('artikel.edit', $b->id) }}" title="Edit" class="btn btn-primary btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endif
                                
                                @if(user_akses2('berita',Session()->get('level'))->delete ?? 0 =='1')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                        class="far fa-trash-alt"></i>
                                </button>
                                @endif

                                @method('delete') 
                                @csrf()
                            </form>
                        </td>
                        @endif
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
               
            </table>
        </div>
    </div>
</div>
@endsection


@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/dt-global_style.css') }}">
@endpush

@push('js-external')
<script src="{{ asset('admin/plugins/table/datatable/datatables.js') }}"></script>
@endpush

@push('js-internal')
<script>
    $(function () {
        $('#dtable').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });
    });
</script>
@endpush

@endif