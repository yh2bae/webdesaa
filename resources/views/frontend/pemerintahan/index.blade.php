@extends('frontend.layouts.base2')

@section('content')
<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 style="font-weight: 700">Pemerintahan Desa</h3>
            <hr width="50%">
            <div class="row">
                @foreach ( $struktur as $struktur)
                <div class="col-md-4 col-lg-4 my-3">
                    <div class="card">
                        <div class="text-center">
                            @if ($struktur->image == '')
                            <img src="{{ asset('upload/strukturdesa/noavatar.png') }}" width="100%" height="350px"
                                alt="image">
                            @else
                            <img src="{{ asset('upload/strukturdesa/'. $struktur->image) }}" width="100%" height="350px"
                                alt="image">
                            @endif
                            <div class="my-2">
                                <h4>{{ $struktur->name }}</h4>
                                <p>{{ $struktur->position }}</p>

                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <a href="{{ route('pemerintahan.detail', $struktur->name) }}"
                                    class="btn btn-primary btn" style="font-size: 21px"><span class="my-2">Lihat
                                        Detail</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection