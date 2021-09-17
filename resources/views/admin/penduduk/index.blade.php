
@if(user_akses2('penduduk',Session()->get('level'))->view ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Penduduk</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Penduduk</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Penduduk</h3>
                        <p>Kelola Penduduk</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        @if(user_akses2('penduduk',Session()->get('level'))->input ?? 0 =='1')
                        <a href="{{ route('penduduk.create') }}" class="btn btn-primary float-right mt-2">+ Tambah Penduduk</a>  
                        @endif   
                    </div>
                </div>
            </div>
        </div>

         <div class="row my-2">
             <div class="col-md-3 col-lg-3">
                 <div class="card shadow" style="background: #3b3f5c">
                     <div class="card-body">
                        <div class="icon-svg1">
                            <svg style="color: #3b3f5c" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>

                         <h5
                             style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                             {{ $penduduk->where('status_hubungan_dalam_keluarga_id',2)->count() }}</h5>
                         <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Kepala Keluarga</p>
                     </div>
                 </div>
             </div>

             <div class="col-md-3 col-lg-3">
                 <div class="card shadow" style="background: #2196f3">
                     <div class="card-body">
                         <div class="icon-svg1" style="background: #f9f9fa">
                             <svg style="color: #2196f3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                 <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="9" cy="7" r="4"></circle>
                                 <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                 <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                             </svg>
                         </div>
                         <h5
                             style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                             {{ $penduduk->count() }}</h5>
                         <p class="card-text" style="color: #fff; font-weight:500;">Total Penduduk</p>
                     </div>
                 </div>
             </div>

             <div class="col-md-3 col-lg-3">
                 <div class="card shadow" style="background: #1abc9c">
                     <div class="card-body">
                         <div class="icon-svg1" style="background: #f9f9fa">
                             <svg style="color: #1abc9c" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                             </svg>
                         </div>
                         <h5
                             style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                             {{ $penduduk->where('jenis_kelamin',1)->count() }}</h5>
                         <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Laki - Laki</p>
                     </div>
                 </div>
             </div>

             <div class="col-md-3 col-lg-3">
                 <div class="card shadow" style="background: #d32d7a">
                     <div class="card-body">
                         <div class="icon-svg1" style="background: #f9f9fa">
                             <svg style="color: #d32d7a" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                             </svg>
                         </div>
                         <h5
                             style="font-size: 24px; font-weight:600; align-self: center; margin-bottom: 0; color:#fff;">
                             {{ $penduduk->where('jenis_kelamin',2)->count() }}</h5>
                         <p class="card-text" style="color: #fff; font-weight:500;">Jumlah Perempuan</p>
                     </div>
                 </div>
             </div>
             
         </div>

        <div class="widget-content widget-content-area br-6 mt-2">
            <table id="dtable" class="table dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="no-content dt-no-sorting">No.</th>

                        @if(user_akses2('penduduk',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('penduduk',Session()->get('level'))->delete ?? 0 =='1')
                        <th class="no-content dt-no-sorting text-center">Actions</th>
                        @endif

                        <th class="text-center">NIK</th>
                        <th class="text-center">KK</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">TTL</th>
                        <th class="text-center">Golongan Darah</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Pendidikan</th>
                        <th class="text-center">Pekerjaan</th>
                        <th class="text-center">Status Perkawinan</th>
                        <th class="text-center">Status Hub. dalam Keluarga</th>
                        <th class="text-center">Kewarganegaraan</th>
                        <th class="text-center">Nama Ayah</th>
                        <th class="text-center">Nama Ibu</th>
                    </tr>
                </thead>
                <tbody>
                @php
                $i=1
                @endphp
                @foreach ($penduduk as $item)
                    <tr>
                        <td>{{ $i }}</td>

                        @if(user_akses2('penduduk',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('penduduk',Session()->get('level'))->delete ?? 0 =='1')
                        <td>
                            <form onsubmit="return confirm('Perhatian!!! Menghapus penduduk akan menghapus semua data yang dimilikinya');"
                                action="{{ route('penduduk.destroy', $item->id) }}" method="POST">

                                @if(user_akses2('penduduk',Session()->get('level'))->update ?? 0 =='1')
                                <a href="{{ route('penduduk.edit', $item->id) }}" title="Edit"
                                    class="btn btn-primary btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                @endif

                                @if(user_akses2('penduduk',Session()->get('level'))->delete ?? 0 =='1')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                        class="far fa-trash-alt"></i>
                                </button>
                                @endif

                                @method('delete')
                                @csrf()
                            </form>
                        </td>
                        @endif

                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->kk }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin == 1 ? "Laki-laki" : "Perempuan" }}</td>
                        <td>{{ $item->tempat_lahir }}, {{ date('d/m/Y',strtotime($item->tanggal_lahir)) }}</td>
                        <td>{{ $item->darah ? $item->darah->golongan : '-' }}</td>
                        <td>{{ $item->agama->nama }}</td>
                        <td>{{ $item->pendidikan ? $item->pendidikan->nama : '-' }}</td>
                        <td>{{ $item->pekerjaan ? $item->pekerjaan->nama : '-' }}</td>
                        <td>{{ $item->statusPerkawinan->nama }}</td>
                        <td>{{ $item->statusHubunganDalamKeluarga->nama }}</td>
                        <td>
                            @php
                            switch ($item->kewarganegaraan) {
                            case 1:
                            echo "WNI";
                            break;
                            case 2:
                            echo "WNA";
                            break;
                            case 3:
                            echo "Dua Kewarganegaraan";
                            break;
                            }
                            @endphp
                        </td>
                        <td>{{ $item->nama_ayah }}</td>
                        <td>{{ $item->nama_ibu }}</td>
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