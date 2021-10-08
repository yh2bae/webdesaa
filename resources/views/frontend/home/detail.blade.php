@extends('frontend.layouts.base2')


@section('content')
<div class="card">
    <div class="card-body">
        <img src="{{ asset('upload/berita/'. $artikel->image) }}" alt="image" width="100%" height="auto">

        <h3 class="mt-3" style="font-weight: 700">{{ $artikel->title }}</h3>
            <span ><i class="fas fa-user" style="margin-right: 5px"></i> {{ $artikel->writer }}</span>
            <span style="margin-left: 15px"><i class="fas fa-calendar-week" style="margin-right: 5px"></i> {{ date('d/m/Y',strtotime($artikel->tanggal_publish)) }}</span>
            <span style="margin-left: 15px"><i class="fas fa-bookmark" style="margin-right: 5px"></i>Kategori Berita: <strong  style="text-transform: uppercase">{{ $artikel->kategori->kategori_berita }}</strong></span>
        <hr>
        <p>{!! $artikel->description !!}</p>
        
    </div>
</div>
@endsection