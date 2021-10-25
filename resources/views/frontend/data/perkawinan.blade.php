@extends('frontend.layouts.base2')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Data Perkawinan Penduduk Desa {{ $desa->nama_desa }}</h3>
        <hr>
        <div id="chart-perkawinan"></div>

        <div class="my-3">
            <h5>TABEL DATA DEMOGRAFI BERDASAR PERKAWINAN</h5>
            <table class="table table-striped table-bordered" style="margin-bottom:10px">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center uppercase" width="30" style="vertical-align:middle">No</th>
                        <th rowspan="2" class="text-center uppercase" style="vertical-align:middle">Kelompok</th>
                        <th colspan="2" class="text-center uppercase" style="vertical-align:middle">Jumlah</th>
                        <th colspan="2" class="text-center uppercase" style="vertical-align:middle">Laki-laki</th>
                        <th colspan="2" class="text-center uppercase" style="vertical-align:middle">Perempuan</th>
                    </tr>
                    <tr>
                        <th class="text-center uppercase">Jumlah</th>
                        <th class="text-center uppercase">Persentase</th>
                        <th class="text-center uppercase">Jumlah</th>
                        <th class="text-center uppercase">Persentase</th>
                        <th class="text-center uppercase">Jumlah</th>
                        <th class="text-center uppercase">Persentase</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="">
                        <td class="text-center">1</td>
                        <td>BELUM KAWIN</td>
                        <td class="text-center">{{ $penduduk->where('status_perkawinan_id', 1)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('status_perkawinan_id', 1)->count()/$penduduk->where('status_perkawinan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 1)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 1)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 1)->count()/$penduduk->where('status_perkawinan_id', 1)->count()*100, 2) }}% 
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 1)->count(), 2) }}%
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 1)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 1)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 1)->count()/$penduduk->where('status_perkawinan_id', 1)->count()*100, 2) }}%
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 1)->count(), 2) }}% 
                        @endif
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">2</td>
                        <td>KAWIN</td>
                        <td class="text-center">{{ $penduduk->where('status_perkawinan_id', 2)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('status_perkawinan_id', 2)->count()/$penduduk->where('status_perkawinan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 2)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 2)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 2)->count()/$penduduk->where('status_perkawinan_id', 2)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 2)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 2)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 2)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 2)->count()/$penduduk->where('status_perkawinan_id', 2)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 2)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">3</td>
                        <td>CERAI HIDUP</td>
                        <td class="text-center">{{ $penduduk->where('status_perkawinan_id', 3)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('status_perkawinan_id', 3)->count()/$penduduk->where('status_perkawinan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 3)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 3)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 3)->count()/$penduduk->where('status_perkawinan_id',3)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 3)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 3)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 3)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 3)->count()/$penduduk->where('status_perkawinan_id', 3)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 3)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">4</td>
                        <td>CERAI MATI</td>
                        <td class="text-center">{{ $penduduk->where('status_perkawinan_id', 4)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('status_perkawinan_id', 4)->count()/$penduduk->where('status_perkawinan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 4)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 4)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 4)->count()/$penduduk->where('status_perkawinan_id',4)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('status_perkawinan_id', 4)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 4)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 4)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 4)->count()/$penduduk->where('status_perkawinan_id', 4)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('status_perkawinan_id', 4)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center"></td>
                        <td>TOTAL</td>
                        <td class="text-center">{{ $penduduk->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->count()/$penduduk->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->count()/$penduduk->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->count()/$penduduk->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>


                    
                    
                    
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection

@push('js-internal')
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
<script src="{{ asset('frontend/perkawinan.js') }}"></script>
@endpush