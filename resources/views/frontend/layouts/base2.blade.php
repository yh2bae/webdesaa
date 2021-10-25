<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('upload/desa/'.$desa->logo) }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/styles/css/slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/fontawesome.css') }}">

    <title>Desa</title>
</head>

<body>
    @include('frontend.layouts.header')
    <!-- body -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <!-- content -->
                <div class="col-md-9 col-lg-9 my-3">
                    <section>
                        {{-- <div class="container rounded"> --}}
                        @yield('content')
                        {{-- </div> --}}

                    </section>
                </div>
                <!-- end content -->
                @include('frontend.layouts.side')
            </div>
        </div>
    </section>
    <!-- Footer -->
    <!-- Footer -->
    @include('frontend.layouts.footer')
    <!-- Footer -->
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/styles/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/styles/js/navbar.js') }}"></script>


    <script>
        const baseURL = $('meta[name="base-url"]').attr('content');

        $(document).ready(function () {
            $('.slider .owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                items: 1,
                autoplay: true,
                smartSpeed: 1200,
                animateOut: 'fadeOut'

            });
        });
    </script>
    @stack('js-internal')



</body>


</html>