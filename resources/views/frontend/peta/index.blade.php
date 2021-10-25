@extends('frontend.layouts.base2')


@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Peta Desa {{ $desa->nama_desa }}</h3>
        <hr width="50%">
      
       <div class="col-lg-12">
        {!! $config->google_maps !!}
       </div>

       
    </div>
</div>
@endsection