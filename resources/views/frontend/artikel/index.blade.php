@extends('frontend.layouts.base2')


@section('content')
<div class="card mb-2">
    <div class="card-body">
        <div class="d-flex justify-content-lg-end">
            <form class="form-inline" method="get" action="{{ route('berita.search') }}">
                <div class="input-group col-lg-12 col-md-12">
                    <input style="width: 260px" class="form-control mr-2" name="keyword" id="keyword" type="search" placeholder="Cari Berita..." aria-label="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h3 style="font-weight: 700">Berita Desa {{ $desa->nama_desa }}</h3>
        
        
        <hr width="50%">


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
                    <p style="text-align: justify">{!! Str::limit($a->description, 500, $end='...') !!}</p>

                    <div>
                        <a href="{{ route('detail.berita', $a->slug) }}"
                            class="btn btn-primary btn-sm pull-right">Lihat Detail ... </a>
                    </div>


                </div>
            </div>
        </article>

        @endforeach
        <div class="d-flex justify-content-center">
            {!! $artikel->links() !!}
        </div>
    </div>
</div>

{{-- <style>
    @media (min-width: 320px) and (max-width: 480px) {
        .mobile input{
            width: 50px
        }
    }
</style> --}}
@endsection