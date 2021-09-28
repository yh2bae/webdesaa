
@if(user_akses2('anggaran',Session()->get('level'))->view ?? 0 =='1')

@extends('admin.layout.base')

@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Anggaran Pendapatan</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Anggaran Pendapatan</span></li>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

        <div class="card shadow mt-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 style="font-size: 21px; font-weight:600; margin:6px 0px 0 0; color:#3b3f5c;">Anggaran Pendapatan</h3>
                        <p>Kelola Anggaran Pendapatan Belanja Desa</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        @if(user_akses2('anggaran',Session()->get('level'))->input ?? 0 =='1')
                        <a href="{{ route('anggaran-realisasi.create') }}?jenis={{ request('jenis') }}&tahun={{ request('tahun') }}&page={{ request('page') }}" class="btn btn-primary float-right mt-2">+ Tambah APBDes</a>  
                        @endif   
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mt-4" style="background: #f7fafc">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left mb-3">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'pendapatan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=pendapatan&tahun={{ request('tahun') }}"><i class="fas fa-hand-holding-usd mr-2"></i>PENDAPATAN</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'belanja' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=belanja&tahun={{ request('tahun') }}"><i class="fas fa-shopping-cart mr-2"></i>BELANJA</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'pembiayaan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=pembiayaan&tahun={{ request('tahun') }}"><i class="fas fa-money-check-alt mr-2"></i>PEMBIAYAAN</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'laporan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=laporan&tahun={{ request('tahun') }}"><i class="fas fa-money-check-alt mr-2"></i>Laporan</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link tab {{ request('jenis') == 'grafik' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=grafik&tahun={{ request('tahun') }}"><i class="fas fa-chart-bar mr-2"></i>Grafik</a>
                            </li>
                        </ul>
                    </div>
                    <form id="form-tahun" action="{{ URL::current()}}" method="GET">
                        <input type="hidden" name="jenis" value="{{ request('jenis') ? request('jenis') : "pendapatan"}}">
                        Tahun: <input type="number" name="tahun" id="tahun" class="form-control" value="{{ request('tahun') ? request('tahun') : date('Y') }}" style="width: 100px; height:40px">
                        <img id="loading-tahun" src="{{ asset(Storage::url('loading.gif')) }}" alt="Loading" height="20px" style="display: none">
                    </form>
                </div>

                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            @if(user_akses2('anggaran',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('anggaran',Session()->get('level'))->delete ?? 0 =='1')

                            <th class="no-content dt-no-sorting text-center">Action</th>

                            @endif

                            <th>Rincian</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Ditambahkan </th>
                            <th>Diperbarui </th>
    
    
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($anggaran_realisasi as $item)
                        <tr>

                            @if(user_akses2('anggaran',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('anggaran',Session()->get('level'))->delete ?? 0 =='1')
                            <td>
                                <form onsubmit="return confirm('Perhatian!!! Menghapus penduduk akan menghapus semua data yang dimilikinya');"
                                action="{{ route("anggaran-realisasi.destroy", $item) }}" method="POST">
                                    @if(user_akses2('anggaran',Session()->get('level'))->update ?? 0 =='1' )

                                    <a href="{{ route('anggaran-realisasi.edit', $item) }}?jenis={{ request('jenis') }}&tahun={{ request('tahun') }}&page={{ request('page') }}"
                                        class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i
                                            class="fas fa-edit"></i>
                                    </a>

                                    @endif

                                    @if(user_akses2('anggaran',Session()->get('level'))->delete ?? 0 =='1' )
                                    {{-- <a class="btn btn-sm btn-danger hapus-data"
                                        data-nama="{{ $item->detail_jenis_anggaran->nama ? $item->detail_jenis_anggaran->nama : $item->detail_jenis_anggaran->kelompok_jenis_anggaran->nama }}"
                                        data-action="{{ route("anggaran-realisasi.destroy", $item) }}" data-toggle="modal"
                                        href="#modal-hapus"><i data-toggle="tooltip" title="Hapus"
                                            class="fas fa-trash"></i></a> --}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                                class="far fa-trash-alt"></i>
                                        </button>
                                    @endif

                                    @method('delete')
                                    @csrf()
                                </form>

                            </td>
                            @endif
                           
                            <td>{{ $item->detail_jenis_anggaran->nama ? $item->detail_jenis_anggaran->nama : $item->detail_jenis_anggaran->kelompok_jenis_anggaran->nama }} {{ $item->keterangan_lainnya ? "(" . $item->keterangan_lainnya . ")" : "" }}</td>
                            <td>Rp. {{ substr(number_format($item->nilai_anggaran, 2, ',', '.'),0,-3) }}</td>
                            <td>Rp. {{ substr(number_format($item->nilai_realisasi, 2, ',', '.'),0,-3) }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($item->updated_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $anggaran_realisasi->links() }}
            </div>
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
        $('#zero-config').DataTable({
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