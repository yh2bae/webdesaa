@extends('frontend.layouts.home')

@section('content')

@foreach ($artikel as $a)
<article class=" p-4 shadow-sm my-3 bg-body rounded">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <figure>
                <img class="content-image rounded" src="{{ asset('upload/berita/'. $a->image) }}">
            </figure>
        </div>
        <div class="col-sm-6 col-md-8">
            <h4>{{ $a->title }}</h4>
            <section style="font-size: 13px">
                <i class="fas fa-user"></i> {{ $a->writer }}
                <i class="fas fa-calendar-week"></i> {{ date('d/m/Y',strtotime($a->tanggal_publish)) }}
            </section>
            <br>
            <p style="text-align: justify">{!! Str::limit($a->description, 500, $end='...')  !!}</p>

            <div>
                <a href="{{ route('detail.berita', $a->slug) }}" class="btn btn-primary btn-sm pull-right">Lihat Detail ... </a>
            </div>

            
        </div>
    </div>
</article>
@endforeach

@endsection
