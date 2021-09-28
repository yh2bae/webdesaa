
@if(user_akses2('struktur',Session()->get('level'))->view ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Struktur Desa</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Struktur Desa</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Penduduk</h3>
                        <p>Kelola Struktur Desa</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        @if(user_akses2('struktur',Session()->get('level'))->input ?? 0 =='1')
                        <a href="{{ route('struktur.create') }}" class="btn btn-primary float-right mt-2">+ Tambah Struktur Desa</a>  
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

                        @if(user_akses2('struktur',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('struktur',Session()->get('level'))->delete ?? 0 =='1')
                        <th class="no-content dt-no-sorting text-center">Actions</th>
                        @endif

                        <th class="text-center">Nama</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Niap</th>
                        <th class="text-center">TTL</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Pendidikan</th>
                        <th class="text-center">Nomor SK</th>
                        <th class="text-center">Tanggal SK</th>
                        <th class="text-center">Masa Jabatan</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                @php
                $i=1
                @endphp
                @foreach ($struktur as $item)
                    <tr>
                        <td>{{ $i }}</td>

                        @if(user_akses2('struktur',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('struktur',Session()->get('level'))->delete ?? 0 =='1')
                        <td>
                            <form onsubmit="return confirm('Perhatian!!! Menghapus penduduk akan menghapus semua data yang dimilikinya');"
                                action="{{ route('struktur.destroy', $item->id) }}" method="POST">

                                @if(user_akses2('struktur',Session()->get('level'))->update ?? 0 =='1')
                                <a href="{{ route('struktur.edit', $item->id) }}" title="Edit"
                                    class="btn btn-primary btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endif

                                @if(user_akses2('struktur',Session()->get('level'))->delete ?? 0 =='1')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                        class="far fa-trash-alt"></i>
                                </button>
                                @endif

                                @method('delete')
                                @csrf()
                            </form>
                        </td>
                        @endif

                        <td>{{ $item->name }}</td>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->niap }}</td>
                        <td>{{ $item->tempat_lahir }}, {{ date('d/m/Y',strtotime($item->tanggal_lahir)) }}</td>
                        <td>{{ $item->agama->nama }}</td>
                        <td>{{ $item->pendidikan ? $item->pendidikan->nama : '-' }}</td>
                        <td>{{ $item->nomor_sk }}</td>
                        <td>{{ $item->tanggal_sk }}</td>
                        <td>{{ $item->masa_jabatan }} Tahun</td>
                        <td class="text-center"><img src="{{ asset('upload/strukturdesa/'. $item->image) }}" class="rounded" width="250px"  alt="image"></td>
                        <td>{{ $item->status == 1 ? "aktif" : "tidak aktif" }}</td>
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

<style>
    .icon-svg1{
        background: #f9f9fa; 
        margin-bottom:20px;
        display:inline-block; 
        padding:12px; 
        border-radius:50%;
    }
</style>
@endsection


@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/dt-global_style.css') }}">
<link href="{{ asset('admin/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
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