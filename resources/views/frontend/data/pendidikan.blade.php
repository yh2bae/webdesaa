@extends('frontend.layouts.base2')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Data Pendidikan Penduduk Desa {{ $desa->nama_desa }}</h3>
        <hr>
        <div id="chart-pendidikan"></div>

        <div class="my-3">
            <h5>TABEL DATA DEMOGRAFI BERDASAR PENDIDIKAN</h5>
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
                        <td>TIDAK / BELUM SEKOLAH</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 1)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 1)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 1)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 1)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 1)->count()/$penduduk->where('pendidikan_id', 1)->count()*100, 2) }}% 
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 1)->count(), 2) }}%
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 1)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 1)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 1)->count()/$penduduk->where('pendidikan_id', 1)->count()*100, 2) }}%
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 1)->count(), 2) }}% 
                        @endif
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">2</td>
                        <td>BELUM TAMAT SD/SEDERAJAT</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 2)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 2)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 2)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 2)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 2)->count()/$penduduk->where('pendidikan_id', 2)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 2)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 2)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 2)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 2)->count()/$penduduk->where('pendidikan_id', 2)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 2)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">3</td>
                        <td>TAMAT SD / SEDERAJAT</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 3)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 3)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 3)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 3)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 3)->count()/$penduduk->where('pendidikan_id',3)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 3)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 3)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 3)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 3)->count()/$penduduk->where('pendidikan_id', 3)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 3)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">4</td>
                        <td>SLTP/SEDERAJAT</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 4)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 4)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 4)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 4)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 4)->count()/$penduduk->where('pendidikan_id',4)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 4)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 4)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 4)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 4)->count()/$penduduk->where('pendidikan_id', 4)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 4)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">5</td>
                        <td>SLTA / SEDERAJAT</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 5)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 5)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 5)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 5)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 5)->count()/$penduduk->where('pendidikan_id',5)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 5)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 5)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 5)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 5)->count()/$penduduk->where('pendidikan_id', 5)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 5)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">6</td>
                        <td>DIPLOMA I / II</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 6)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 6)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 6)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 6)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 6)->count()/$penduduk->where('pendidikan_id',6)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 6)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 6)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 6)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 6)->count()/$penduduk->where('pendidikan_id', 6)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 6)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">7</td>
                        <td>AKADEMI/ DIPLOMA III/S. MUDA</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 7)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 7)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 7)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 7)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 7)->count()/$penduduk->where('pendidikan_id',7)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 7)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 7)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 7)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 7)->count()/$penduduk->where('pendidikan_id', 7)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 7)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">8</td>
                        <td>DIPLOMA IV/ STRATA I</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 8)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 8)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 8)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 8)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 8)->count()/$penduduk->where('pendidikan_id',8)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 8)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 8)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 8)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 8)->count()/$penduduk->where('pendidikan_id', 8)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 8)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">9</td>
                        <td>STRATA II</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 9)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 9)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 9)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 9)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 9)->count()/$penduduk->where('pendidikan_id',9)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 9)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 9)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 9)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 9)->count()/$penduduk->where('pendidikan_id', 9)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 9)->count(), 2) }}%
                            @endif
                            
                        </td>
                    </tr>

                    <tr class="">
                        <td class="text-center">10</td>
                        <td>STRATA III</td>
                        <td class="text-center">{{ $penduduk->where('pendidikan_id', 10)->count() }}</td>
                    
                        <td class="text-center">{{ number_format($penduduk->where('pendidikan_id', 10)->count()/$penduduk->where('pendidikan_id')->count()*100, 2) }}%</td>
                            
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 10)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 10)->count())
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 10)->count()/$penduduk->where('pendidikan_id',10)->count()*100, 2) }}%
                                @else
                                {{ number_format($penduduk->where('jenis_kelamin',1)->where('pendidikan_id', 10)->count(), 2) }}% 
                            @endif
                        </td>
                        
                        <td class="text-center">{{ $penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 10)->count() }}</td>
                        <td class="text-center">
                            @if ($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 10)->count())
                            {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 10)->count()/$penduduk->where('pendidikan_id', 10)->count()*100, 2) }}% 
                            @else
                                {{ number_format($penduduk->where('jenis_kelamin',2)->where('pendidikan_id', 10)->count(), 2) }}%
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
<script src="{{ asset('frontend/pendidikan.js') }}"></script>
@endpush