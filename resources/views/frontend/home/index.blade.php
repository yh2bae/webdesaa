@extends('frontend.layouts.home')

@section('content')
    <article class=" p-4 shadow-sm my-3 bg-body rounded">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <figure>
                    <img src="{{ asset('frontend/assets/sinergi2.jpg') }}">
                </figure>
            </div>
            <div class="col-sm-6 col-md-8">
                <h4>Raymond Dragon</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>

                <section>
                    <i class="icon-user"></i>Ichwan Setyawan
                    <i class="icon-calendar"></i>1395/12/21
                    <a href="#" class="btn btn-primary btn-sm pull-right">More ... </a>
                </section>
            </div>
        </div>
    </article>
    <article class=" p-4 shadow-sm my-3 bg-body rounded">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <figure>
                    <img src="{{ asset('frontend/assets/sinergi2.jpg') }}">
                </figure>
            </div>
            <div class="col-sm-6 col-md-8">
                <h4>Raymond Dragon</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut
                    laoreet dolore magna aliquam erat volutpat.</p>

                <section>
                    <i class="icon-user"></i>Ichwan Setyawan
                    <i class="icon-calendar"></i>1395/12/21
                    <a href="#" class="btn btn-primary btn-sm pull-right">More ... </a>
                </section>
            </div>
        </div>
    </article>
    <article class=" p-4 shadow-sm my-3 bg-body rounded">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <figure>
                    <img src="{{ asset('frontend/assets/sinergi2.jpg') }}">
                </figure>
            </div>
            <div class="col-sm-6 col-md-8">
                <h4>Raymond Dragon</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut
                    laoreet dolore magna aliquam erat volutpat.</p>

                <section>
                    <i class="icon-user"></i>Ichwan Setyawan
                    <i class="icon-calendar"></i>2021/12/21
                    <a href="#" class="btn btn-primary btn-sm pull-right">More ... </a>
                </section>
            </div>
        </div>
    </article>
@endsection
