@extends('frontend.layouts.home')

@section('content')

@foreach ($artikel as $a)
<article class=" p-4 shadow-sm my-3 bg-body rounded">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <figure>
                <img class="content-image" src="{{ asset('frontend/assets/sinergi2.jpg') }}">
            </figure>
        </div>
        <div class="col-sm-6 col-md-8">
            <h4>{{ $a->title }}</h4>
            <section style="font-size: 13px">
                <i class="icon-user"></i> {{ $a->penulis }}
                <i class="icon-calendar"></i>  {{ date('d/m/Y',strtotime($a->tanggal_publish)) }}
            </section>
            <br>
            <p style="text-align: justify">{{ $a->description }}</p>

            <div>
                <a href="#" class="btn btn-primary btn-sm pull-right">More ... </a>
            </div>

        </div>
    </div>
</article>
@endforeach


@endsection
