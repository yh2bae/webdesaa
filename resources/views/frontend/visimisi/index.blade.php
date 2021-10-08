@extends('frontend.layouts.base2')


@section('content')
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Visi & Misi Desa</h3>
        <hr width="50%">

        <div class="mt-5">
            <p>{!! $desa->visi_misi !!}</p>
        </div>
       
</div>
@endsection